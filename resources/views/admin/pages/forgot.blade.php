@extends('admin.layout.auth')
@section('title', 'Forgot Password')
@section('content')
<div class="mt-8">
    <div class="mt-6">
        <div class="text-center">
            <i class="fas fa-key text-4xl text-primary-600 dark:text-primary-400 mb-4"></i>
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Forgot your password?</h2>
            <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                Enter your email address and we'll send you a link to reset your password.
            </p>
        </div>

        <form action="#" method="POST" class="mt-8 space-y-6">
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email address</label>
                <div class="mt-1 relative rounded-md shadow-sm">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="fas fa-envelope text-gray-400"></i>
                    </div>
                    <input id="email" name="email" type="email" autocomplete="email" required 
                           class="py-3 pl-10 block w-full border border-gray-300 dark:border-gray-600 rounded-md shadow-sm 
                                  focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-800 dark:text-white sm:text-sm" 
                           placeholder="you@example.com">
                </div>
            </div>

            <div>
                <button type="submit" 
                        class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm 
                               text-sm font-medium text-white bg-primary-600 hover:bg-primary-700 
                               focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 
                               transition duration-150 ease-in-out">
                    Send reset link
                </button>
            </div>
        </form>

        <div class="mt-6 text-center">
            <p class="text-sm text-gray-600 dark:text-gray-400">
                Remember your password? 
                <a href="#" class="font-medium text-primary-600 dark:text-primary-400 hover:text-primary-500 dark:hover:text-primary-300">
                    Sign in
                </a>
            </p>
        </div>
    </div>
</div>
@endsection