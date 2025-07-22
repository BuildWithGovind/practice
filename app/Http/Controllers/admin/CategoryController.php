<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Validation\Rule;
use Str;
class CategoryController extends Controller
{
    
    public function index()
    {
        $categories = Category::with(['parent', 'children'])->get();
        return view('admin.pages.category.listing', compact('categories'));
    }

    // Show create form
    public function create()
    {
        $categories = Category::whereNull('parent_id')->get(); // for parent dropdown
        return view('admin.pages.category.add', compact('categories'));
    }

    
    
    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('categories')->where(function ($query) use ($request) {
                    return $query->where('parent_id', $request->parent_id);
                })
            ],
            'parent_id' => [
                'nullable',
                'exists:categories,id'
            ],
            'is_active' => [
                'required',
                'boolean'
            ]
        ]);

        $baseSlug = Str::slug($validated['name']);
        if (!empty($validated['parent_id'])) {
            $parent = Category::find($validated['parent_id']);
            if ($parent) {
                $baseSlug = Str::slug($parent->name) . '-' . $baseSlug;
            }
        }

        $slug = $baseSlug;
        $counter = 1;
        while (Category::where('slug', $slug)->exists()) {
            $slug = $baseSlug . '-' . $counter++;
        }

        $validated['slug'] = $slug;
        $validated['parent_id'] = $validated['parent_id'] ?? null;

        try {
            $category = Category::create($validated);

            return redirect()
                ->route('categories.index')
                ->with('success', 'Category created successfully!');
                
        } catch (\Exception $e) {
            return back()
                ->withInput()
                ->with('error', 'Error creating category: ' . $e->getMessage());
        }
    }

    public function show(Category $category)
    {
        return view('categories.show', compact('category'));
    }

    
    public function edit($id)
    {   
        $category = Category::findOrFail($id);
        $categories = Category::whereNull('parent_id')->where('id', '!=', $id)->get();
        return view('admin.pages.category.add', compact('category', 'categories'));
    }


    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('categories')->ignore($category->id)->where(function ($query) use ($request) {
                    return $query->where('parent_id', $request->parent_id);
                }),
            ],
            'parent_id' => [
                'nullable',
                'exists:categories,id',
                'not_in:' . $category->id, // Prevent parent from being self
            ],
            'is_active' => [
                'required',
                'boolean',
            ],
        ]);

        // Generate slug with parent name (if any)
        $slug = Str::slug($request->name);
        if ($request->parent_id) {
            $parent = Category::find($request->parent_id);
            if ($parent) {
                $slug = Str::slug($parent->name . '-' . $request->name);
            }
        }

        $category->update([
            'name' => $request->name,
            'slug' => $slug,
            'parent_id' => $request->parent_id ?? null,
            'is_active' => $request->is_active,
        ]);

        return redirect()
            ->route('categories.index')
            ->with('success', 'Category updated successfully.');
    }

    // Delete category
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Category deleted.');
    }
}
