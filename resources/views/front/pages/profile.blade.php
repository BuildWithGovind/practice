@extends('front.layout.app')

@section('title', 'Home | codedamn')

@section('content')
<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
      <div class="min-h-screen">
        <!-- Profile Header -->
        <div class="bg-white dark:bg-dark-800 shadow-sm">
            <div class="max-w-7xl mx-auto  sm:px-6 lg:px-8 py-8">
                <div class="flex flex-col md:flex-row items-start md:items-center gap-6">
                    <!-- Profile Picture -->
                    <div class="relative">
                        <img class="h-24 w-24 rounded-full ring-4 ring-white dark:ring-dark-800" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Profile picture">
                        <span class="absolute bottom-0 right-0 bg-green-500 rounded-full p-1.5 ring-2 ring-white dark:ring-dark-800">
                            <span class="sr-only">Online</span>
                        </span>
                    </div>
                    
                    <!-- Profile Info -->
                    <div class="flex-1">
                        <div class="flex items-center justify-between">
                            <div>
                                <h1 class="text-2xl font-bold text-gray-900 dark:text-white">John Doe</h1>
                                <p class="text-gray-600 dark:text-gray-300">Full Stack Developer</p>
                                <p class="text-gray-600 dark:text-gray-300">mp17govind96@gmail.com</p>
                                      <p class="text-gray-600 dark:text-gray-300">22 Octomber 1996</p>
                            </div>
                           
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Left Column -->
            <div class="lg:col-span-2 space-y-8">
                <!-- About Section -->
                <div class="bg-white dark:bg-dark-800 shadow rounded-lg p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h2 class="text-xl font-bold text-gray-900 dark:text-white">About</h2>
                        <button class="text-primary-600 dark:text-primary-400 hover:text-primary-800 dark:hover:text-primary-300">
                            <i class="fas fa-edit"></i>
                        </button>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300">
                        Passionate full-stack developer with 5+ years of experience building web applications. 
                        Specialized in JavaScript, React, Node.js, and modern web technologies. 
                        Love solving complex problems and creating efficient, scalable solutions.
                    </p>
                    
                    <div class="mt-6 grid grid-cols-2 gap-4">
                        <div>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Location</p>
                            <p class="text-gray-900 dark:text-white">San Francisco, CA</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Joined</p>
                            <p class="text-gray-900 dark:text-white">January 2021</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Website</p>
                            <a href="#" class="text-primary-600 dark:text-primary-400 hover:underline">johndoe.dev</a>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500 dark:text-gray-400">GitHub</p>
                            <a href="#" class="text-primary-600 dark:text-primary-400 hover:underline">github.com/johndoe</a>
                        </div>
                    </div>
                </div>

                <!-- Skills & Experience -->
                <div class="bg-white dark:bg-dark-800 shadow rounded-lg p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h2 class="text-xl font-bold text-gray-900 dark:text-white">Skills & Experience</h2>
                        <button class="text-primary-600 dark:text-primary-400 hover:text-primary-800 dark:hover:text-primary-300">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                    
                    <!-- Skills -->
                    <div class="mb-6">
                        <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-3">Technical Skills</h3>
                        <div class="space-y-4">
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-sm font-medium text-gray-900 dark:text-white">JavaScript</span>
                                    <span class="text-sm text-gray-500 dark:text-gray-400">Expert</span>
                                </div>
                                <div class="progress-bar">
                                    <div class="progress-fill" style="width: 90%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-sm font-medium text-gray-900 dark:text-white">React</span>
                                    <span class="text-sm text-gray-500 dark:text-gray-400">Advanced</span>
                                </div>
                                <div class="progress-bar">
                                    <div class="progress-fill" style="width: 80%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-sm font-medium text-gray-900 dark:text-white">Node.js</span>
                                    <span class="text-sm text-gray-500 dark:text-gray-400">Advanced</span>
                                </div>
                                <div class="progress-bar">
                                    <div class="progress-fill" style="width: 85%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-sm font-medium text-gray-900 dark:text-white">Python</span>
                                    <span class="text-sm text-gray-500 dark:text-gray-400">Intermediate</span>
                                </div>
                                <div class="progress-bar">
                                    <div class="progress-fill" style="width: 65%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Experience -->
                    <div>
                        <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-3">Work Experience</h3>
                        <div class="space-y-4">
                            <div class="border-l-4 border-primary-600 pl-4 py-1">
                                <h4 class="font-medium text-gray-900 dark:text-white">Senior Developer</h4>
                                <p class="text-sm text-gray-600 dark:text-gray-300">TechCorp Inc. • 2020 - Present</p>
                                <p class="text-gray-600 dark:text-gray-300 mt-1">Led a team of 5 developers to build scalable web applications using React and Node.js.</p>
                            </div>
                            <div class="border-l-4 border-primary-600 pl-4 py-1">
                                <h4 class="font-medium text-gray-900 dark:text-white">Frontend Developer</h4>
                                <p class="text-sm text-gray-600 dark:text-gray-300">WebSolutions • 2018 - 2020</p>
                                <p class="text-gray-600 dark:text-gray-300 mt-1">Developed responsive UIs and implemented new features for client projects.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Certificates -->
                <div class="bg-white dark:bg-dark-800 shadow rounded-lg p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h2 class="text-xl font-bold text-gray-900 dark:text-white">Certificates</h2>
                        <button class="text-primary-600 dark:text-primary-400 hover:text-primary-800 dark:hover:text-primary-300">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="border border-gray-200 dark:border-gray-700 rounded-lg p-4 hover:shadow-md transition-shadow">
                            <div class="flex items-start">
                                <div class="bg-blue-100 dark:bg-blue-900 p-3 rounded-lg mr-4">
                                    <i class="fas fa-certificate text-blue-600 dark:text-blue-300 text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="font-medium text-gray-900 dark:text-white">Full Stack Developer</h3>
                                    <p class="text-sm text-gray-600 dark:text-gray-300">codedamn • Issued May 2022</p>
                                    <a href="#" class="mt-2 inline-block text-sm text-primary-600 dark:text-primary-400 hover:underline">View Certificate</a>
                                </div>
                            </div>
                        </div>
                        <div class="border border-gray-200 dark:border-gray-700 rounded-lg p-4 hover:shadow-md transition-shadow">
                            <div class="flex items-start">
                                <div class="bg-green-100 dark:bg-green-900 p-3 rounded-lg mr-4">
                                    <i class="fas fa-certificate text-green-600 dark:text-green-300 text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="font-medium text-gray-900 dark:text-white">React Specialist</h3>
                                    <p class="text-sm text-gray-600 dark:text-gray-300">codedamn • Issued Jan 2022</p>
                                    <a href="#" class="mt-2 inline-block text-sm text-primary-600 dark:text-primary-400 hover:underline">View Certificate</a>
                                </div>
                            </div>
                        </div>
                        <div class="border border-gray-200 dark:border-gray-700 rounded-lg p-4 hover:shadow-md transition-shadow">
                            <div class="flex items-start">
                                <div class="bg-purple-100 dark:bg-purple-900 p-3 rounded-lg mr-4">
                                    <i class="fas fa-certificate text-purple-600 dark:text-purple-300 text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="font-medium text-gray-900 dark:text-white">Node.js Advanced</h3>
                                    <p class="text-sm text-gray-600 dark:text-gray-300">codedamn • Issued Sep 2021</p>
                                    <a href="#" class="mt-2 inline-block text-sm text-primary-600 dark:text-primary-400 hover:underline">View Certificate</a>
                                </div>
                            </div>
                        </div>
                        <div class="border border-gray-200 dark:border-gray-700 rounded-lg p-4 hover:shadow-md transition-shadow">
                            <div class="flex items-start">
                                <div class="bg-yellow-100 dark:bg-yellow-900 p-3 rounded-lg mr-4">
                                    <i class="fas fa-certificate text-yellow-600 dark:text-yellow-300 text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="font-medium text-gray-900 dark:text-white">JavaScript Expert</h3>
                                    <p class="text-sm text-gray-600 dark:text-gray-300">codedamn • Issued Mar 2021</p>
                                    <a href="#" class="mt-2 inline-block text-sm text-primary-600 dark:text-primary-400 hover:underline">View Certificate</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="space-y-8">
                <!-- Resume Section -->
                <div class="bg-white dark:bg-dark-800 shadow rounded-lg p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h2 class="text-xl font-bold text-gray-900 dark:text-white">Resume</h2>
                        <button class="text-primary-600 dark:text-primary-400 hover:text-primary-800 dark:hover:text-primary-300">
                            <i class="fas fa-upload"></i>
                        </button>
                    </div>
                    
                    <div class="border-2 border-dashed border-gray-300 dark:border-gray-700 rounded-lg p-6 text-center">
                        <i class="fas fa-file-pdf text-4xl text-gray-400 dark:text-gray-500 mb-3"></i>
                        <p class="text-gray-600 dark:text-gray-300 mb-3">Upload your resume to showcase your experience</p>
                        <button class="px-4 py-2 bg-primary-600 hover:bg-primary-700 text-white rounded-lg text-sm font-medium transition-colors">
                            Upload Resume
                        </button>
                        <p class="text-xs text-gray-500 dark:text-gray-400 mt-3">PDF, DOC, DOCX (Max 5MB)</p>
                    </div>
                    
                    <div class="mt-4">
                        <h3 class="font-medium text-gray-900 dark:text-white mb-2">Public Resume URL</h3>
                        <div class="flex">
                            <input type="text" readonly value="codedamn.com/johndoe/resume" 
                                   class="flex-1 px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-l-lg bg-gray-50 dark:bg-dark-700 text-gray-900 dark:text-white">
                            <button class="px-3 py-2 bg-gray-100 dark:bg-dark-700 border border-l-0 border-gray-300 dark:border-gray-600 rounded-r-lg text-gray-700 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-dark-600">
                                <i class="fas fa-copy"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Badges Section -->
                <div class="bg-white dark:bg-dark-800 shadow rounded-lg p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h2 class="text-xl font-bold text-gray-900 dark:text-white">Badges</h2>
                        <button class="text-primary-600 dark:text-primary-400 hover:text-primary-800 dark:hover:text-primary-300">
                            <i class="fas fa-trophy"></i>
                        </button>
                    </div>
                    
                    <div class="grid grid-cols-3 gap-4">
                        <div class="text-center">
                            <div class="bg-yellow-100 dark:bg-yellow-900 p-3 rounded-full inline-flex items-center justify-center mb-2">
                                <i class="fas fa-medal text-yellow-600 dark:text-yellow-300 text-xl"></i>
                            </div>
                            <p class="text-sm font-medium text-gray-900 dark:text-white">Gold Coder</p>
                        </div>
                        <div class="text-center">
                            <div class="bg-blue-100 dark:bg-blue-900 p-3 rounded-full inline-flex items-center justify-center mb-2">
                                <i class="fas fa-rocket text-blue-600 dark:text-blue-300 text-xl"></i>
                            </div>
                            <p class="text-sm font-medium text-gray-900 dark:text-white">Fast Learner</p>
                        </div>
                        <div class="text-center">
                            <div class="bg-purple-100 dark:bg-purple-900 p-3 rounded-full inline-flex items-center justify-center mb-2">
                                <i class="fas fa-lightbulb text-purple-600 dark:text-purple-300 text-xl"></i>
                            </div>
                            <p class="text-sm font-medium text-gray-900 dark:text-white">Problem Solver</p>
                        </div>
                        <div class="text-center">
                            <div class="bg-green-100 dark:bg-green-900 p-3 rounded-full inline-flex items-center justify-center mb-2">
                                <i class="fas fa-code text-green-600 dark:text-green-300 text-xl"></i>
                            </div>
                            <p class="text-sm font-medium text-gray-900 dark:text-white">Clean Coder</p>
                        </div>
                        <div class="text-center">
                            <div class="bg-red-100 dark:bg-red-900 p-3 rounded-full inline-flex items-center justify-center mb-2">
                                <i class="fas fa-fire text-red-600 dark:text-red-300 text-xl"></i>
                            </div>
                            <p class="text-sm font-medium text-gray-900 dark:text-white">Hot Streak</p>
                        </div>
                        <div class="text-center">
                            <div class="bg-indigo-100 dark:bg-indigo-900 p-3 rounded-full inline-flex items-center justify-center mb-2">
                                <i class="fas fa-star text-indigo-600 dark:text-indigo-300 text-xl"></i>
                            </div>
                            <p class="text-sm font-medium text-gray-900 dark:text-white">Top Performer</p>
                        </div>
                    </div>
                    
                    <div class="mt-4 text-center">
                        <a href="#" class="text-sm text-primary-600 dark:text-primary-400 hover:underline">View all badges</a>
                    </div>
                </div>

                <!-- Ranking Section -->
                <div class="bg-white dark:bg-dark-800 shadow rounded-lg p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h2 class="text-xl font-bold text-gray-900 dark:text-white">Ranking</h2>
                        <button class="text-primary-600 dark:text-primary-400 hover:text-primary-800 dark:hover:text-primary-300">
                            <i class="fas fa-chart-line"></i>
                        </button>
                    </div>
                    
                    <div class="space-y-4">
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="text-sm font-medium text-gray-900 dark:text-white">Global Rank</span>
                                <span class="text-sm font-bold text-primary-600 dark:text-primary-400">#1,245</span>
                            </div>
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 75%"></div>
                            </div>
                            <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">Top 15% of all coders</p>
                        </div>
                        
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="text-sm font-medium text-gray-900 dark:text-white">JavaScript Rank</span>
                                <span class="text-sm font-bold text-primary-600 dark:text-primary-400">#568</span>
                            </div>
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 85%"></div>
                            </div>
                            <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">Top 10% in JavaScript</p>
                        </div>
                        
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="text-sm font-medium text-gray-900 dark:text-white">React Rank</span>
                                <span class="text-sm font-bold text-primary-600 dark:text-primary-400">#723</span>
                            </div>
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 70%"></div>
                            </div>
                            <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">Top 20% in React</p>
                        </div>
                    </div>
                    
                    <div class="mt-6">
                        <h3 class="font-medium text-gray-900 dark:text-white mb-2">Weekly Progress</h3>
                        <div class="bg-gray-50 dark:bg-dark-700 rounded-lg p-4">
                            <div class="flex justify-between text-sm text-gray-500 dark:text-gray-400 mb-2">
                                <span>+12 positions</span>
                                <span>+350 XP</span>
                            </div>
                            <div class="h-2 bg-gray-200 dark:bg-dark-600 rounded-full overflow-hidden">
                                <div class="h-full bg-green-500" style="width: 60%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
