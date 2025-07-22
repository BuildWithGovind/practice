@extends('admin.layout.app')

@section('title', isset($category) ? 'Edit Category' : 'Add Category')

@section('content')
<main class="flex-1 overflow-y-auto p-4 md:p-6 bg-gray-50 dark:bg-gray-900">
    <div class="max-w-8xl mx-auto bg-white dark:bg-gray-800 rounded-lg shadow p-6">
        <h2 class="text-xl font-semibold mb-4 text-gray-800 dark:text-gray-200">
            {{ isset($category) ? 'Edit Category' : 'Add Category' }}
        </h2>

        <form 
            action="{{ isset($category) ? route('categories.update', $category->id) : route('categories.store') }}" 
            method="POST" 
            class="space-y-5"
        >
            @csrf
            @if(isset($category))
                @method('PUT')
            @endif

            <!-- Parent Category -->
            <div>
                <label for="parent_id" class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-300">Parent Category</label>
                <select id="parent_id" name="parent_id" class="w-full rounded border-gray-300 dark:border-gray-700 dark:bg-gray-700 dark:text-white p-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="">None (Top Level Category)</option>
                    @foreach($categories as $cat)
                        <option value="{{ $cat->id }}"
                            {{ (old('parent_id') ?? $category->parent_id ?? '') == $cat->id ? 'selected' : '' }}>
                            {{ $cat->name }}
                        </option>
                    @endforeach
                </select>
                @error('parent_id')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Name -->
            <div>
                <label for="name" class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-300">Category Name *</label>
                <input type="text" id="name" name="name"
                       value="{{ old('name') ?? $category->name ?? '' }}" 
                       class="w-full border rounded border-gray-300 dark:border-gray-700 dark:bg-gray-700 dark:text-white p-2 focus:ring-blue-500 focus:border-blue-500" 
                       required
                       placeholder="Enter category name">
                @error('name')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Is Active -->
            <div>
                <label for="is_active" class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-300">Status</label>
                <select id="is_active" name="is_active" class="w-full rounded border-gray-300 dark:border-gray-700 dark:bg-gray-700 dark:text-white p-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="1" {{ (old('is_active') ?? $category->is_active ?? 1) == 1 ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ (old('is_active') ?? $category->is_active ?? 1) == 0 ? 'selected' : '' }}>Inactive</option>
                </select>
                @error('is_active')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="text-right">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors">
                    {{ isset($category) ? 'Update Category' : 'Save Category' }}
                </button>
            </div>
        </form>
    </div>
</main>
@endsection
