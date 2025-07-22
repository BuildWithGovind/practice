@extends('front.layout.app')

@section('title', 'Home | codedamn')

@section('content')
<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <!-- Hero Section -->
    <div class="bg-primary-600 rounded-xl p-8 text-white mb-8">
        <div class="max-w-3xl">
            <h1 class="text-4xl font-bold mb-4">Become a top 1% developer</h1>
            <p class="text-xl mb-6">Learn, build projects, practice problems, get hired. All in one place.</p>
            <div class="flex flex-col sm:flex-row gap-4">
                <button class="bg-white text-primary-600 px-6 py-3 rounded-lg font-medium hover:bg-gray-100 transition">Start learning for free</button>
                <button class="bg-primary-700 text-white px-6 py-3 rounded-lg font-medium hover:bg-primary-800 transition">Explore programs</button>
            </div>
        </div>
    </div>
    
    <!-- Learning Paths Section -->
    <div class="mb-12">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Learning Paths</h2>
            <a href="#" class="text-primary-600 dark:text-primary-400 hover:text-primary-800 dark:hover:text-primary-300 font-medium">View all</a>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Path Card 1 -->
            <div class="bg-white dark:bg-dark-800 rounded-xl shadow-sm overflow-hidden transition-transform hover:scale-[1.02]">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="bg-indigo-100 dark:bg-indigo-900 p-3 rounded-lg">
                            <i class="fab fa-js text-indigo-600 dark:text-indigo-300 text-2xl"></i>
                        </div>
                        <h3 class="ml-4 font-bold text-lg dark:text-white">Frontend Development</h3>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">Master HTML, CSS, JavaScript and modern frameworks like React to build amazing websites.</p>
                    <div class="flex justify-between text-sm text-gray-500 dark:text-gray-400">
                        <span>12 courses</span>
                        <span>45 hours</span>
                    </div>
                </div>
                <div class="bg-gray-50 dark:bg-dark-700 px-6 py-4">
                    <a href="#" class="text-primary-600 dark:text-primary-400 font-medium hover:text-primary-800 dark:hover:text-primary-300">Start Path →</a>
                </div>
            </div>
            
            <!-- Path Card 2 -->
            <div class="bg-white dark:bg-dark-800 rounded-xl shadow-sm overflow-hidden transition-transform hover:scale-[1.02]">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="bg-green-100 dark:bg-green-900 p-3 rounded-lg">
                            <i class="fas fa-server text-green-600 dark:text-green-300 text-2xl"></i>
                        </div>
                        <h3 class="ml-4 font-bold text-lg dark:text-white">Backend Development</h3>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">Learn Node.js, databases, APIs and build scalable server-side applications.</p>
                    <div class="flex justify-between text-sm text-gray-500 dark:text-gray-400">
                        <span>10 courses</span>
                        <span>38 hours</span>
                    </div>
                </div>
                <div class="bg-gray-50 dark:bg-dark-700 px-6 py-4">
                    <a href="#" class="text-primary-600 dark:text-primary-400 font-medium hover:text-primary-800 dark:hover:text-primary-300">Start Path →</a>
                </div>
            </div>
            
            <!-- Path Card 3 -->
            <div class="bg-white dark:bg-dark-800 rounded-xl shadow-sm overflow-hidden transition-transform hover:scale-[1.02]">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="bg-blue-100 dark:bg-blue-900 p-3 rounded-lg">
                            <i class="fas fa-laptop-code text-blue-600 dark:text-blue-300 text-2xl"></i>
                        </div>
                        <h3 class="ml-4 font-bold text-lg dark:text-white">Fullstack Development</h3>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">Combine frontend and backend skills to build complete web applications.</p>
                    <div class="flex justify-between text-sm text-gray-500 dark:text-gray-400">
                        <span>15 courses</span>
                        <span>60 hours</span>
                    </div>
                </div>
                <div class="bg-gray-50 dark:bg-dark-700 px-6 py-4">
                    <a href="#" class="text-primary-600 dark:text-primary-400 font-medium hover:text-primary-800 dark:hover:text-primary-300">Start Path →</a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Popular Courses Section -->
    <div class="mb-12">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Popular Courses</h2>
            <a href="#" class="text-primary-600 dark:text-primary-400 hover:text-primary-800 dark:hover:text-primary-300 font-medium">View all</a>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Course Card 1 -->
            <div class="bg-white dark:bg-dark-800 rounded-xl shadow-sm overflow-hidden transition-transform hover:scale-[1.02]">
                <img src="https://codedamn.com/images/react-course.png" alt="React Course" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h3 class="font-bold mb-2 dark:text-white">React JS Fundamentals</h3>
                    <div class="flex items-center text-sm text-gray-500 dark:text-gray-400 mb-2">
                        <i class="fas fa-star text-yellow-400 mr-1"></i>
                        <span>4.9</span>
                        <span class="mx-2">•</span>
                        <span>12 hours</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="font-medium text-gray-900 dark:text-white">Free</span>
                        <button class="text-primary-600 dark:text-primary-400 hover:text-primary-800 dark:hover:text-primary-300">Enroll →</button>
                    </div>
                </div>
            </div>
            
            <!-- Course Card 2 -->
            <div class="bg-white dark:bg-dark-800 rounded-xl shadow-sm overflow-hidden transition-transform hover:scale-[1.02]">
                <img src="https://codedamn.com/images/nodejs-course.png" alt="Node.js Course" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h3 class="font-bold mb-2 dark:text-white">Node.js Crash Course</h3>
                    <div class="flex items-center text-sm text-gray-500 dark:text-gray-400 mb-2">
                        <i class="fas fa-star text-yellow-400 mr-1"></i>
                        <span>4.8</span>
                        <span class="mx-2">•</span>
                        <span>8 hours</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="font-medium text-gray-900 dark:text-white">Free</span>
                        <button class="text-primary-600 dark:text-primary-400 hover:text-primary-800 dark:hover:text-primary-300">Enroll →</button>
                    </div>
                </div>
            </div>
            
            <!-- Course Card 3 -->
            <div class="bg-white dark:bg-dark-800 rounded-xl shadow-sm overflow-hidden transition-transform hover:scale-[1.02]">
                <img src="https://codedamn.com/images/javascript-course.png" alt="JavaScript Course" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h3 class="font-bold mb-2 dark:text-white">Modern JavaScript</h3>
                    <div class="flex items-center text-sm text-gray-500 dark:text-gray-400 mb-2">
                        <i class="fas fa-star text-yellow-400 mr-1"></i>
                        <span>4.7</span>
                        <span class="mx-2">•</span>
                        <span>10 hours</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="font-medium text-gray-900 dark:text-white">Free</span>
                        <button class="text-primary-600 dark:text-primary-400 hover:text-primary-800 dark:hover:text-primary-300">Enroll →</button>
                    </div>
                </div>
            </div>
            
            <!-- Course Card 4 -->
            <div class="bg-white dark:bg-dark-800 rounded-xl shadow-sm overflow-hidden transition-transform hover:scale-[1.02]">
                <img src="https://codedamn.com/images/python-course.png" alt="Python Course" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h3 class="font-bold mb-2 dark:text-white">Python for Beginners</h3>
                    <div class="flex items-center text-sm text-gray-500 dark:text-gray-400 mb-2">
                        <i class="fas fa-star text-yellow-400 mr-1"></i>
                        <span>4.6</span>
                        <span class="mx-2">•</span>
                        <span>6 hours</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="font-medium text-gray-900 dark:text-white">Free</span>
                        <button class="text-primary-600 dark:text-primary-400 hover:text-primary-800 dark:hover:text-primary-300">Enroll →</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Practice Section -->
    <div class="mb-12">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Practice Problems</h2>
            <a href="#" class="text-primary-600 dark:text-primary-400 hover:text-primary-800 dark:hover:text-primary-300 font-medium">View all</a>
        </div>
        
        <div class="bg-white dark:bg-dark-800 rounded-xl shadow-sm overflow-hidden">
            <div class="grid grid-cols-1 md:grid-cols-3 divide-y md:divide-y-0 md:divide-x divide-gray-200 dark:divide-gray-700">
                <!-- Problem Category 1 -->
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="bg-purple-100 dark:bg-purple-900 p-3 rounded-lg">
                            <i class="fas fa-code text-purple-600 dark:text-purple-300 text-2xl"></i>
                        </div>
                        <h3 class="ml-4 font-bold text-lg dark:text-white">JavaScript</h3>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">Solve 500+ JavaScript problems from basic to advanced level.</p>
                    <a href="#" class="inline-flex items-center text-primary-600 dark:text-primary-400 hover:text-primary-800 dark:hover:text-primary-300 font-medium">
                        Start Practicing
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
                
                <!-- Problem Category 2 -->
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="bg-red-100 dark:bg-red-900 p-3 rounded-lg">
                            <i class="fas fa-project-diagram text-red-600 dark:text-red-300 text-2xl"></i>
                        </div>
                        <h3 class="ml-4 font-bold text-lg dark:text-white">Data Structures</h3>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">Master arrays, linked lists, trees, graphs and more.</p>
                    <a href="#" class="inline-flex items-center text-primary-600 dark:text-primary-400 hover:text-primary-800 dark:hover:text-primary-300 font-medium">
                        Start Practicing
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
                
                <!-- Problem Category 3 -->
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="bg-blue-100 dark:bg-blue-900 p-3 rounded-lg">
                            <i class="fas fa-brain text-blue-600 dark:text-blue-300 text-2xl"></i>
                        </div>
                        <h3 class="ml-4 font-bold text-lg dark:text-white">Algorithms</h3>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">Solve 300+ algorithm problems to crack coding interviews.</p>
                    <a href="#" class="inline-flex items-center text-primary-600 dark:text-primary-400 hover:text-primary-800 dark:hover:text-primary-300 font-medium">
                        Start Practicing
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- CTA Section -->
    <div class="bg-gray-900 rounded-xl p-8 text-white mb-8">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-3xl font-bold mb-4">Ready to become a pro developer?</h2>
            <p class="text-xl mb-6">Join millions of developers learning on codedamn today.</p>
            <button class="bg-primary-600 text-white px-8 py-3 rounded-lg font-medium hover:bg-primary-700 transition">Start Learning for Free</button>
        </div>
    </div>
</main>
@endsection
