@extends('front.layout.app')

@section('title', 'Home | codedamn')

@section('content')

<main class="flex-grow flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-8">
            <div class="text-center">
                <h2 class="mt-6 text-3xl font-bold text-gray-900 dark:text-white">Sign in to your account</h2>
                <p class="mt-2 text-sm text-gray-600 dark:text-gray-300">
                    Or <a href="#" class="font-medium text-primary-600 dark:text-primary-400 hover:text-primary-500 dark:hover:text-primary-300">start your 14-day free trial</a>
                </p>
            </div>

            <!-- Login Form -->
            <form id="loginForm" class="mt-8 space-y-6" method="POST" action="{{ route('authlogin') }}">
                @csrf
                <input type="hidden" name="remember" value="true">

                <div class="rounded-md shadow-sm space-y-4">
                    <!-- Email Input -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Email address</label>
                        <div class="relative">
                            <input id="email" name="email" type="email" autocomplete="email" required
                                class="appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 dark:border-gray-600 placeholder-gray-500 dark:placeholder-gray-400 text-gray-900 dark:text-dark focus:outline-none focus:ring-primary-500 focus:border-primary-500 focus:z-10 sm:text-sm bg-white dark:bg-dark-700"
                                placeholder="you@example.com" value="{{ old('email') }}">
                        </div>
                        @error('email')
                            <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password Input -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Password</label>
                        <div class="relative">
                            <input id="password" name="password" type="password" autocomplete="current-password" required
                                class="appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 dark:border-gray-600 placeholder-gray-500 dark:placeholder-gray-400 text-gray-900 dark:text-dark focus:outline-none focus:ring-primary-500 focus:border-primary-500 focus:z-10 sm:text-sm bg-white dark:bg-dark-700"
                                placeholder="••••••••">
                        </div>
                        @error('password')
                            <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                        @enderror
                    </div>


                          <input type="hidden" name="role" value="user">
                    <!-- Role Selection -->
                    <!-- <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Login as</label>
                        <div class="mt-1 grid grid-cols-3 gap-3">
                            <div class="flex items-center">
                                <input id="student" name="role" type="radio" value="student" checked
                                    class="focus:ring-primary-500 h-4 w-4 text-primary-600 border-gray-300 dark:border-gray-600">
                                <label for="student" class="ml-2 block text-sm text-gray-700 dark:text-gray-300">Student</label>
                            </div>
                        </div>
                        @error('role')
                            <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                        @enderror
                    </div> -->
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember-me" name="remember-me" type="checkbox"
                            class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300 dark:border-gray-600 rounded">
                        <label for="remember-me" class="ml-2 block text-sm text-gray-700 dark:text-gray-300">Remember me</label>
                    </div>

                    <div class="text-sm">
                        <a href="{{ route('forgot') }}" class="font-medium text-primary-600 dark:text-primary-400 hover:text-primary-500 dark:hover:text-primary-300">Forgot your password?</a>
                    </div>
                </div>

                <div>
                    <button type="submit"
                        class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-colors">
                        <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                            <i class="fas fa-sign-in-alt text-primary-300 group-hover:text-primary-200"></i>
                        </span>
                        Sign in
                    </button>
                </div>

             
            </form>

        </div>
    </main>


@endsection
