@extends('admin.layout.app')

@section('title', 'Home Page')

@section('content')
   <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Mobile header -->
            <header class="lg:hidden flex items-center justify-between px-4 py-3 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                <div class="flex items-center">
                    <button id="mobileSidebarToggle" class="mr-4 text-gray-500 hover:text-gray-600 dark:hover:text-gray-400">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                    <h1 class="text-xl font-semibold text-gray-800 dark:text-gray-200">Dashboard</h1>
                </div>
                <div class="flex items-center">
                    <button id="mobileSearchToggle" class="p-2 text-gray-500 hover:text-gray-600 dark:hover:text-gray-400">
                        <i class="fas fa-search text-lg"></i>
                    </button>
                    <button class="p-2 ml-2 text-gray-500 hover:text-gray-600 dark:hover:text-gray-400">
                        <i class="fas fa-bell text-lg"></i>
                    </button>
                </div>
            </header>

            <!-- Desktop header -->
            <header class="hidden lg:flex items-center justify-between px-6 py-4 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                <div class="flex items-center">
                    <h1 class="text-xl font-semibold text-gray-800 dark:text-gray-200">Dashboard Overview</h1>
                </div>
                <div class="flex items-center space-x-4">
                    <div class="relative hidden md:block">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-search text-gray-400"></i>
                        </div>
                        <input type="text" class="block w-full pl-10 pr-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-gray-50 dark:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500" placeholder="Search...">
                    </div>
                    <button class="p-2 text-gray-500 hover:text-gray-600 dark:hover:text-gray-400 relative">
                        <i class="fas fa-bell text-lg"></i>
                        <span class="absolute top-0 right-0 w-2 h-2 rounded-full bg-red-500"></span>
                    </button>
                    <div class="relative">
                        <button id="userMenuButton" class="flex items-center space-x-2 focus:outline-none">
                            <div class="w-8 h-8 rounded-full bg-primary-500 flex items-center justify-center text-white font-medium">JD</div>
                            <span class="hidden md:block text-sm font-medium">John Doe</span>
                            <i class="fas fa-chevron-down hidden md:block text-xs"></i>
                        </button>
                        <div id="userMenu" class="hidden absolute right-0 mt-2 w-48 bg-white dark:bg-gray-800 rounded-md shadow-lg py-1 z-10 border border-gray-200 dark:border-gray-700">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700">Your Profile</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700">Settings</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700">Sign out</a>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Main content area -->
            <main class="flex-1 overflow-y-auto p-4 md:p-6 bg-gray-50 dark:bg-gray-900">
                <!-- Page title and actions -->
                <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6">
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200">Welcome back, John!</h2>
                        <p class="text-gray-600 dark:text-gray-400 mt-1">Here's what's happening with your store today.</p>
                    </div>
                    <div class="mt-4 md:mt-0">
                        <button class="inline-flex items-center px-4 py-2 bg-primary-600 hover:bg-primary-700 text-white text-sm font-medium rounded-lg shadow-sm transition duration-150 ease-in-out">
                            <i class="fas fa-plus mr-2"></i>
                            New Order
                        </button>
                    </div>
                </div>

                <!-- Stats cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
                    <!-- Card 1 -->
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Total Revenue</p>
                                <h3 class="text-2xl font-bold text-gray-800 dark:text-gray-200 mt-1">$24,780</h3>
                                <p class="text-sm mt-2">
                                    <span class="text-green-500 flex items-center">
                                        <i class="fas fa-arrow-up mr-1"></i>
                                        <span>12.5% from last month</span>
                                    </span>
                                </p>
                            </div>
                            <div class="bg-primary-100 dark:bg-primary-500/20 p-3 rounded-full">
                                <i class="fas fa-dollar-sign text-primary-600 dark:text-primary-400"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Total Users</p>
                                <h3 class="text-2xl font-bold text-gray-800 dark:text-gray-200 mt-1">1,842</h3>
                                <p class="text-sm mt-2">
                                    <span class="text-green-500 flex items-center">
                                        <i class="fas fa-arrow-up mr-1"></i>
                                        <span>8.2% from last month</span>
                                    </span>
                                </p>
                            </div>
                            <div class="bg-green-100 dark:bg-green-500/20 p-3 rounded-full">
                                <i class="fas fa-users text-green-600 dark:text-green-400"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Pending Orders</p>
                                <h3 class="text-2xl font-bold text-gray-800 dark:text-gray-200 mt-1">124</h3>
                                <p class="text-sm mt-2">
                                    <span class="text-red-500 flex items-center">
                                        <i class="fas fa-arrow-down mr-1"></i>
                                        <span>3.1% from last month</span>
                                    </span>
                                </p>
                            </div>
                            <div class="bg-orange-100 dark:bg-orange-500/20 p-3 rounded-full">
                                <i class="fas fa-shopping-cart text-orange-600 dark:text-orange-400"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Active Products</p>
                                <h3 class="text-2xl font-bold text-gray-800 dark:text-gray-200 mt-1">356</h3>
                                <p class="text-sm mt-2">
                                    <span class="text-green-500 flex items-center">
                                        <i class="fas fa-arrow-up mr-1"></i>
                                        <span>5.7% from last month</span>
                                    </span>
                                </p>
                            </div>
                            <div class="bg-purple-100 dark:bg-purple-500/20 p-3 rounded-full">
                                <i class="fas fa-box text-purple-600 dark:text-purple-400"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Charts and tables section -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
                    <!-- Revenue chart -->
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6 lg:col-span-2">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Revenue Overview</h3>
                            <div class="flex items-center space-x-2">
                                <button class="px-3 py-1 text-xs bg-gray-100 dark:bg-gray-700 rounded-lg">Week</button>
                                <button class="px-3 py-1 text-xs bg-primary-600 text-white rounded-lg">Month</button>
                                <button class="px-3 py-1 text-xs bg-gray-100 dark:bg-gray-700 rounded-lg">Year</button>
                            </div>
                        </div>
                        <div class="h-64">
                            <!-- Chart placeholder -->
                            <div class="flex items-center justify-center h-full bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                <p class="text-gray-500 dark:text-gray-400">Revenue chart will appear here</p>
                            </div>
                        </div>
                    </div>

                    <!-- Recent activity -->
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-4">Recent Activity</h3>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <div class="w-8 h-8 rounded-full bg-green-100 dark:bg-green-500/20 flex items-center justify-center">
                                        <i class="fas fa-check text-green-600 dark:text-green-400 text-sm"></i>
                                    </div>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-gray-800 dark:text-gray-200">Order #1234 completed</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">2 min ago</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <div class="w-8 h-8 rounded-full bg-blue-100 dark:bg-blue-500/20 flex items-center justify-center">
                                        <i class="fas fa-user-plus text-blue-600 dark:text-blue-400 text-sm"></i>
                                    </div>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-gray-800 dark:text-gray-200">New customer registered</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">1 hour ago</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <div class="w-8 h-8 rounded-full bg-orange-100 dark:bg-orange-500/20 flex items-center justify-center">
                                        <i class="fas fa-exclamation text-orange-600 dark:text-orange-400 text-sm"></i>
                                    </div>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-gray-800 dark:text-gray-200">High traffic warning</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">3 hours ago</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <div class="w-8 h-8 rounded-full bg-purple-100 dark:bg-purple-500/20 flex items-center justify-center">
                                        <i class="fas fa-shopping-cart text-purple-600 dark:text-purple-400 text-sm"></i>
                                    </div>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-gray-800 dark:text-gray-200">New order received</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">5 hours ago</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent orders table -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 flex items-center justify-between">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Recent Orders</h3>
                        <button class="text-sm text-primary-600 dark:text-primary-400 hover:text-primary-800 dark:hover:text-primary-300">View All</button>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-gray-50 dark:bg-gray-700">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Order</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Customer</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Status</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Date</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Amount</th>
                                    <th scope="col" class="relative px-6 py-3"><span class="sr-only">Actions</span></th>
                                </tr>
                            </thead>
                            <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">#1234</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">John Smith</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 dark:bg-green-500/20 text-green-800 dark:text-green-400">Completed</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">May 15, 2023</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">$245.00</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="#" class="text-primary-600 dark:text-primary-400 hover:text-primary-900 dark:hover:text-primary-300">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">#1233</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">Sarah Johnson</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 dark:bg-yellow-500/20 text-yellow-800 dark:text-yellow-400">Pending</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">May 14, 2023</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">$189.00</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="#" class="text-primary-600 dark:text-primary-400 hover:text-primary-900 dark:hover:text-primary-300">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">#1232</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">Michael Brown</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 dark:bg-blue-500/20 text-blue-800 dark:text-blue-400">Processing</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">May 14, 2023</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">$356.50</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="#" class="text-primary-600 dark:text-primary-400 hover:text-primary-900 dark:hover:text-primary-300">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">#1231</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">Emily Davis</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 dark:bg-green-500/20 text-green-800 dark:text-green-400">Completed</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">May 13, 2023</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">$412.00</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="#" class="text-primary-600 dark:text-primary-400 hover:text-primary-900 dark:hover:text-primary-300">View</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
@endsection
