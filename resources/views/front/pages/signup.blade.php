@extends('front.layout.app')

@section('title', 'Register | codedamn')

@section('content')
<main class="flex-grow flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="w-full max-w-md space-y-8">
        <div class="text-center">
            <h2 class="mt-6 text-3xl font-bold text-gray-900 dark:text-white">Create a new account</h2>
            <p class="mt-2 text-sm text-gray-600 dark:text-gray-300">
                Already have an account? <a href="{{ route('login') }}" class="font-medium text-primary-600 dark:text-primary-400 hover:text-primary-500 dark:hover:text-primary-300">Sign in</a>
            </p>
        </div>

        @if ($errors->any())
            <div class="bg-red-100 text-red-700 px-4 py-3 rounded text-sm">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('authsignup') }}" class="space-y-6">
            @csrf
            <div class="rounded-md shadow-sm space-y-4">
                <!-- Name -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Full Name</label>
                    <input id="name" name="name" type="text" value="{{ old('name') }}" required class="w-full px-3 py-2 border rounded-md dark:bg-dark-700 dark:text-dark" placeholder="John Doe">
                    @error('name') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email address</label>
                    <input id="email" name="email" type="email" value="{{ old('email') }}" required class="w-full px-3 py-2 border rounded-md dark:bg-dark-700 dark:text-dark" placeholder="you@example.com">
                    @error('email') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Password</label>
                    <input id="password" name="password" type="password" required class="w-full px-3 py-2 border rounded-md dark:bg-dark-700 dark:text-dark" placeholder="••••••••">
                    @error('password') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
                </div>

                <!-- Confirm Password -->
                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Confirm Password</label>
                    <input id="password_confirmation" name="password_confirmation" type="password" required class="w-full px-3 py-2 border rounded-md dark:bg-dark-700 dark:text-dark" placeholder="••••••••">
                    @error('password_confirmation') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
                </div>

                <!-- Terms Checkbox -->
                <div class="flex items-center">
                    <input id="terms" name="terms" type="checkbox" class="h-4 w-4 text-primary-600 border-gray-300 dark:border-gray-600 rounded" {{ old('terms') ? 'checked' : '' }}>
                    <label for="terms" class="ml-2 text-sm text-gray-700 dark:text-gray-300">
                        I agree to the <a href="#" class="font-medium text-primary-600 dark:text-primary-400 hover:underline">Terms and Conditions</a>
                    </label>
                    @error('terms') <p class="text-red-600 text-sm mt-1 ml-6">{{ $message }}</p> @enderror
                </div>
            </div>

            <div>
                <button type="submit" class="w-full py-2 px-4 bg-primary-600 hover:bg-primary-700 text-white rounded-md text-sm font-medium">
                    Create Account
                </button>
            </div>
        </form>
    </div>
</main>
@endsection
