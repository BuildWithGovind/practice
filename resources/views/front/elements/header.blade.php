<nav class="bg-white dark:bg-dark-800 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">

            <!-- Left Side -->
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="text-xl font-bold text-gray-900 dark:text-white">TDS</a>
                <div class="hidden sm:flex sm:space-x-8 ml-6">
                    <a href="#" class="text-sm font-medium px-3 py-2 text-gray-900 dark:text-white border-b-2 border-primary-600">Learn</a>
                    <a href="#" class="text-sm font-medium px-3 py-2 text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-200">Practice</a>
                    <a href="#" class="text-sm font-medium px-3 py-2 text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-200">Projects</a>
                    <a href="#" class="text-sm font-medium px-3 py-2 text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-200">Assessments</a>
                </div>
            </div>

            <!-- Right Side -->
            <div class="flex items-center space-x-4">
                <!-- Icons -->
                <button class="p-1 rounded-full text-gray-400 hover:text-gray-500 dark:hover:text-gray-300">
                    <i class="fas fa-search"></i>
                </button>
                <button class="p-1 rounded-full text-gray-400 hover:text-gray-500 dark:hover:text-gray-300">
                    <i class="fas fa-bell"></i>
                </button>
                <button id="theme-toggle" class="p-1 rounded-full text-gray-400 hover:text-gray-500 dark:hover:text-gray-300">
                    <i id="theme-icon" class="fas fa-moon"></i>
                </button>

                @auth
                    <!-- Authenticated User Dropdown -->
                    <div class="relative">
                        <button id="userDropdownBtn" class="flex items-center space-x-2 rounded-full bg-gray-800 dark:bg-gray-600 p-1 text-white focus:outline-none">
                            <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_image ?? 'https://ui-avatars.com/api/?name=' . urlencode(Auth::user()->name) }}" alt="User Image">
                            <span class="hidden md:block text-sm font-medium">{{ Auth::user()->name }}</span>
                            <i class="fas fa-chevron-down text-xs ml-1"></i>
                        </button>

                        <div id="userDropdownMenu" class="hidden absolute right-0 z-50 mt-2 w-48 bg-white dark:bg-gray-800 rounded-md shadow-lg py-2">
                            <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700">Dashboard</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-red-50 dark:hover:bg-red-700">Logout</button>
                            </form>
                        </div>
                    </div>
                @else
                    <!-- Guest -->
                    <a href="{{ route('frontlogin') }}">
                        <button class="px-4 py-2 bg-gray-800 text-white rounded-md hover:bg-gray-700">Login</button>
                    </a>
                    <a href="{{ route('signup') }}">
                        <button class="px-4 py-2 bg-primary-600 text-white rounded-md hover:bg-primary-700">Signup</button>
                    </a>
                @endauth
            </div>
        </div>
    </div>
</nav>
