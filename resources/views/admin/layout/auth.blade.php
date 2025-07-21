<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creta - Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            200: '#bae6fd',
                            300: '#7dd3fc',
                            400: '#38bdf8',
                            500: '#0ea5e9',
                            600: '#0284c7',
                            700: '#0369a1',
                            800: '#075985',
                            900: '#0c4a6e',
                        },
                        secondary: {
                            50: '#f5f3ff',
                            100: '#ede9fe',
                            200: '#ddd6fe',
                            300: '#c4b5fd',
                            400: '#a78bfa',
                            500: '#8b5cf6',
                            600: '#7c3aed',
                            700: '#6d28d9',
                            800: '#5b21b6',
                            900: '#4c1d95',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        .bg-auth {
            background-image: url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80');
            background-size: cover;
            background-position: center;
        }
        
        @media (max-width: 768px) {
            .bg-auth {
                background-image: none;
            }
        }
    </style>
</head>
<body class="h-full">
    <div class="min-h-full flex">
        <!-- Left side - Background image -->
        <div class="hidden lg:block relative w-0 flex-1 bg-auth">
            <div class="absolute inset-0 bg-gray-900/50"></div>
            <div class="relative h-full flex flex-col justify-between p-12 text-white">
                <div>
                    <svg class="w-10 h-10" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <linearGradient x1="28.538%" y1="20.229%" x2="100%" y2="108.156%" id="logo-a">
                                <stop stop-color="#3b82f6" stop-opacity="0" offset="0%"/>
                                <stop stop-color="#3b82f6" offset="100%"/>
                            </linearGradient>
                            <linearGradient x1="88.638%" y1="29.267%" x2="22.42%" y2="100%" id="logo-b">
                                <stop stop-color="#8b5cf6" stop-opacity="0" offset="0%"/>
                                <stop stop-color="#8b5cf6" offset="100%"/>
                            </linearGradient>
                        </defs>
                        <rect fill="#6366f1" width="32" height="32" rx="8"/>
                        <path d="M18.277 16.043l-1.313-.792c-1.142-.688-1.893-1.118-1.893-1.962v-.008c0-.782.623-1.384 1.523-1.384.953 0 1.542.492 1.832 1.216l1.71-.888C19.455 10.005 18.304 9 16.618 9c-1.722 0-2.98 1.078-2.98 2.467v.008c0 1.555 1.178 2.403 2.65 3.205l1.313.793c1.142.687 1.893 1.103 1.893 1.947v.008c0 .782-.624 1.384-1.523 1.384-.953 0-1.532-.492-1.832-1.216l-1.71.887c.449 1.164 1.6 2.169 3.286 2.169 1.722 0 2.98-1.077 2.98-2.467v-.008c0-1.555-1.178-2.403-2.65-3.205z" fill="#fff"/>
                    </svg>
                </div>
                <div>
                    <h2 class="text-3xl font-bold mb-4">Welcome to Creta Admin</h2>
                    <p class="text-lg opacity-90">The most powerful admin dashboard for your business. Manage your data with ease and efficiency.</p>
                </div>
                <div class="flex items-center space-x-4 text-sm opacity-80">
                    <a href="#" class="hover:underline">Privacy Policy</a>
                    <span>•</span>
                    <a href="#" class="hover:underline">Terms of Service</a>
                </div>
            </div>
        </div>

        <!-- Right side - Login form -->
        <div class="flex-1 flex flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24 bg-white dark:bg-gray-900">
            <div class="mx-auto w-full max-w-md lg:w-96">
                <div class="text-center lg:text-left">
                    <svg class="w-10 h-10 mx-auto lg:mx-0" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <linearGradient x1="28.538%" y1="20.229%" x2="100%" y2="108.156%" id="logo-a">
                                <stop stop-color="#3b82f6" stop-opacity="0" offset="0%"/>
                                <stop stop-color="#3b82f6" offset="100%"/>
                            </linearGradient>
                            <linearGradient x1="88.638%" y1="29.267%" x2="22.42%" y2="100%" id="logo-b">
                                <stop stop-color="#8b5cf6" stop-opacity="0" offset="0%"/>
                                <stop stop-color="#8b5cf6" offset="100%"/>
                            </linearGradient>
                        </defs>
                        <rect fill="#6366f1" width="32" height="32" rx="8"/>
                        <path d="M18.277 16.043l-1.313-.792c-1.142-.688-1.893-1.118-1.893-1.962v-.008c0-.782.623-1.384 1.523-1.384.953 0 1.542.492 1.832 1.216l1.71-.888C19.455 10.005 18.304 9 16.618 9c-1.722 0-2.98 1.078-2.98 2.467v.008c0 1.555 1.178 2.403 2.65 3.205l1.313.793c1.142.687 1.893 1.103 1.893 1.947v.008c0 .782-.624 1.384-1.523 1.384-.953 0-1.532-.492-1.832-1.216l-1.71.887c.449 1.164 1.6 2.169 3.286 2.169 1.722 0 2.98-1.077 2.98-2.467v-.008c0-1.555-1.178-2.403-2.65-3.205z" fill="#fff"/>
                    </svg>
                    <h2 class="mt-6 text-3xl font-extrabold text-gray-900 dark:text-white">Sign in to your account</h2>
                   
                </div>

                @yield('content')
                
            </div>
            
            <!-- Dark mode toggle for mobile -->
            <div class="lg:hidden absolute top-4 right-4">
                <button id="theme-toggle-mobile" class="p-2 rounded-full bg-gray-100 dark:bg-gray-800 text-gray-500 dark:text-gray-400">
                    <i class="fas fa-moon dark:hidden"></i>
                    <i class="fas fa-sun hidden dark:block"></i>
                </button>
            </div>
        </div>
    </div>

    <script>
        // Toggle dark mode
        document.getElementById('theme-toggle-mobile').addEventListener('click', function() {
            document.documentElement.classList.toggle('dark');
            localStorage.setItem('theme', document.documentElement.classList.contains('dark') ? 'dark' : 'light');
        });

        // Check for saved theme preference
        if (localStorage.getItem('theme') === 'dark' || (!localStorage.getItem('theme') && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }

        // Toggle password visibility
        document.querySelector('button[type="button"]').addEventListener('click', function() {
            const passwordInput = document.getElementById('password');
            const icon = this.querySelector('i');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.replace('fa-eye-slash', 'fa-eye');
            } else {
                passwordInput.type = 'password';
                icon.classList.replace('fa-eye', 'fa-eye-slash');
            }
        });
    </script>
</body>
</html>