<!-- Mobile sidebar backdrop -->
<div class="fixed inset-0 bg-gray-900 bg-opacity-50 z-40 lg:hidden lg:z-auto transition-opacity duration-200 opacity-0 pointer-events-none" id="sidebarBackdrop"></div>

<!-- Sidebar -->
<div id="sidebar" class="flex flex-col absolute z-50 left-0 top-0 lg:static lg:left-auto lg:top-auto lg:translate-x-0 h-screen overflow-y-scroll lg:overflow-y-auto no-scrollbar w-64 bg-white dark:bg-gray-800 shadow-lg shrink-0 border-r border-gray-200 dark:border-gray-700">
    <!-- Sidebar header -->
    <div class="flex justify-between items-center px-4 py-4 border-b border-gray-200 dark:border-gray-700">
        <div class="flex items-center">
            <svg class="w-8 h-8 shrink-0" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
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
            <span class="ml-3 text-xl font-semibold text-gray-800 dark:text-gray-200">Creta</span>
        </div>
    </div>

    <!-- Sidebar content -->
    <div class="px-4 py-4">
        <div >
            <ul class="space-y-1">
                <!-- Accordion item: Users -->
                <li x-data="{ open: false }" class="mb-1">
                    <button @click="open = !open" class="flex items-center justify-between w-full pl-3 py-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                        <div class="flex items-center">
                            <div class="flex items-center justify-center w-6 h-6">
                                <i class="fas fa-users text-sm"></i>
                            </div>
                            <span class="ml-3 text-sm font-medium">Users</span>
                        </div>
                        <div class="flex items-center justify-center w-6 h-6">
                            <svg class="w-3 h-3 transform transition-transform duration-200" :class="{ 'rotate-90': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                    </button>
                    <div x-show="open" x-collapse class="mt-1 pl-9 space-y-1">
                        <a href="#" class="block py-1.5 text-sm rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">All Users</a>
                        <a href="#" class="block py-1.5 text-sm rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">Roles & Permissions</a>
                        <a href="#" class="block py-1.5 text-sm rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">Activity Log</a>
                    </div>
                </li>

                <li x-data="{ open: false }" class="mb-1">
                    <button @click="open = !open" class="flex items-center justify-between w-full pl-3 py-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                        <div class="flex items-center">
                            <div class="flex items-center justify-center w-6 h-6">
                                <i class="fas fa-users text-sm"></i>
                            </div>
                            <span class="ml-3 text-sm font-medium">Blogs</span>
                        </div>
                        <div class="flex items-center justify-center w-6 h-6">
                            <svg class="w-3 h-3 transform transition-transform duration-200" :class="{ 'rotate-90': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                    </button>
                    <div x-show="open" x-collapse class="mt-1 pl-9 space-y-1">
                        <a href="{{ route('admin.blogs') }}" class="block py-1.5 text-sm rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">All Blogs</a>
                    </div>
                </li>

                <li x-data="{ open: false }" class="mb-1">
                    <button @click="open = !open" class="flex items-center justify-between w-full pl-3 py-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                        <div class="flex items-center">
                            <div class="flex items-center justify-center w-6 h-6">
                                <i class="fas fa-users text-sm"></i>
                            </div>
                            <span class="ml-3 text-sm font-medium">Category</span>
                        </div>
                        <div class="flex items-center justify-center w-6 h-6">
                            <svg class="w-3 h-3 transform transition-transform duration-200" :class="{ 'rotate-90': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                    </button>
                    <div x-show="open" x-collapse class="mt-1 pl-9 space-y-1">
                        <a href="{{ route('categories.index') }}" class="block py-1.5 text-sm rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">All Category</a>
                    </div>
                </li>

                <li x-data="{ open: false }" class="mb-1">
                    <button @click="open = !open" class="flex items-center justify-between w-full pl-3 py-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                        <div class="flex items-center">
                            <div class="flex items-center justify-center w-6 h-6">
                                <i class="fas fa-users text-sm"></i>
                            </div>
                            <span class="ml-3 text-sm font-medium">Tests</span>
                        </div>
                        <div class="flex items-center justify-center w-6 h-6">
                            <svg class="w-3 h-3 transform transition-transform duration-200" :class="{ 'rotate-90': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                    </button>
                    <div x-show="open" x-collapse class="mt-1 pl-9 space-y-1">
                        <a href="{{ route('admin.tests') }}" class="block py-1.5 text-sm rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">All Test</a>
                    </div>
                </li>

                <!-- Accordion item: Products -->
                <li x-data="{ open: false }" class="mb-1">
                    <button @click="open = !open" class="flex items-center justify-between w-full pl-3 py-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                        <div class="flex items-center">
                            <div class="flex items-center justify-center w-6 h-6">
                                <i class="fas fa-boxes text-sm"></i>
                            </div>
                            <span class="ml-3 text-sm font-medium">Products</span>
                        </div>
                        <div class="flex items-center justify-center w-6 h-6">
                            <svg class="w-3 h-3 transform transition-transform duration-200" :class="{ 'rotate-90': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                    </button>
                    <div x-show="open" x-collapse class="mt-1 pl-9 space-y-1">
                        <a href="#" class="block py-1.5 text-sm rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">Inventory</a>
                        <a href="#" class="block py-1.5 text-sm rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">Categories</a>
                        <a href="#" class="block py-1.5 text-sm rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">Collections</a>
                    </div>
                </li>

                <!-- Regular menu item -->
                <li>
                    <a href="#" class="flex items-center pl-3 py-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                        <div class="flex items-center justify-center w-6 h-6">
                            <i class="fas fa-shopping-cart text-sm"></i>
                        </div>
                        <span class="ml-3 text-sm font-medium">Orders</span>
                        <span class="ml-auto px-2 py-0.5 text-xs font-medium rounded-full bg-primary-100 dark:bg-primary-400/20 text-primary-600 dark:text-primary-400">12</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>


</div>