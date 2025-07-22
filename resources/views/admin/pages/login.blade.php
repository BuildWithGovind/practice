@extends('admin.layout.auth')
@section('title', 'Login Page')
@section('content')
<div class="mt-8">
    <div class="mt-6">
        <form action="{{ route('admin.login.submit') }}" method="POST" class="space-y-6">
            @csrf

             @if ($errors->any())
                <div class="text-red-500 text-sm">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>• {{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email address</label>
                <div class="mt-1 relative rounded-md shadow-sm">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="fas fa-envelope text-gray-400"></i>
                    </div>
                    <input id="email" name="email" type="email" autocomplete="email" required class="py-3 pl-10 block w-full border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-800 dark:text-white sm:text-sm" placeholder="you@example.com">
                </div>
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Password</label>
                <div class="mt-1 relative rounded-md shadow-sm">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="fas fa-lock text-gray-400"></i>
                    </div>
                    <input id="password" name="password" type="password" autocomplete="current-password" required class="py-3 pl-10 block w-full border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-800 dark:text-white sm:text-sm" placeholder="••••••••">
                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                        <button type="button" class="text-gray-400 hover:text-gray-500 focus:outline-none">
                            <i class="fas fa-eye-slash text-sm"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-between">
                <!-- <div class="flex items-center">
                    <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300 dark:border-gray-600 rounded dark:bg-gray-800">
                    <label for="remember-me" class="ml-2 block text-sm text-gray-700 dark:text-gray-300">Remember me</label>
                </div> -->

                <!-- <div class="text-sm">
                    <a href="#" class="font-medium text-primary-600 dark:text-primary-400 hover:text-primary-500 dark:hover:text-primary-300">Forgot your password?</a>
                </div> -->
            </div>

            <div>
                <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition duration-150 ease-in-out">
                    Sign in
                </button>
            </div>
        </form>

    
    </div>
</div>
@endsection