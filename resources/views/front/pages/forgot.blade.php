@extends('front.layout.app')

@section('title', 'Home | codedamn')

@section('content')
<main class="flex-grow flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="w-full max-w-md space-y-8">
        <div class="text-center">
            <h2 class="mt-6 text-3xl font-bold text-gray-900 dark:text-white">Reset your password</h2>
            <p class="mt-2 text-sm text-gray-600 dark:text-gray-300">
                Remember your password? <a href="#" class="font-medium text-primary-600 dark:text-primary-400 hover:text-primary-500 dark:hover:text-primary-300">Sign in</a>
            </p>
        </div>

        <!-- Password Reset Form -->
        <form id="forgotPasswordForm" class="mt-8 space-y-6" action="{{ route('authforgot') }}" method="POST">
            @csrf

            @if ($errors->any())
                <div class="p-4 rounded-md bg-green-50 dark:bg-green-900">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <i class="fas fa-exclamation-circle text-green-500 dark:text-green-300"></i>
                        </div>
                        <div class="ml-3">
                            <ul class="text-sm text-green-700 dark:text-green-200">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endif

            <div class="rounded-md shadow-sm space-y-4">
                <!-- Email Input -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Email address</label>
                    <div class="relative">
                        <input id="email" name="email" type="email" autocomplete="email" required
                            value="{{ old('email') }}"
                            class="appearance-none rounded-md relative block w-full px-3 py-2 border @error('email') border-red-500 @else border-gray-300 dark:border-gray-600 @enderror placeholder-gray-500 dark:placeholder-gray-400 text-gray-900 dark:text-dark focus:outline-none focus:ring-primary-500 focus:border-primary-500 focus:z-10 sm:text-sm bg-white dark:bg-dark-700"
                            placeholder="you@example.com">
                        @error('email')
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <i class="fas fa-exclamation-circle text-red-500"></i>
                            </div>
                        @enderror
                    </div>
                    @error('email')
                        <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                    @enderror
                    <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">We'll send a password reset link to this email if your account exists</p>
                </div>
            </div>

            <div>
                <button type="submit"
                    class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-colors">
                    <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                        <i class="fas fa-paper-plane text-primary-300 group-hover:text-primary-200"></i>
                    </span>
                    Send Reset Link
                </button>
            </div>
        </form>

        <div id="successMessage" class="hidden p-4 rounded-md bg-green-50 dark:bg-green-900">
            <div class="flex">
                <div class="flex-shrink-0">
                    <i class="fas fa-check-circle text-green-400 dark:text-green-300"></i>
                </div>
                <div class="ml-3">
                    <p class="text-sm font-medium text-green-800 dark:text-green-200">
                        Password reset link sent! Check your email for instructions.
                    </p>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
