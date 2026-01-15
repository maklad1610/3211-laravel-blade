@extends('layout.app')

@section('main-content')
    <main class="py-6">
        <div class="max-w-screen-xl mx-auto px-4 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
                <!-- Left Sidebar -->
                <div class="lg:col-span-3 space-y-6">
                    <!-- User Profile Card -->
                    <div class="bg-white rounded-xl shadow-md hover-lift overflow-hidden fade-in">
                        <div class="gradient-bg h-24"></div>
                        <div class="px-6 pb-6 relative">
                            <div class="flex justify-center">
                                <div
                                    class="rounded-full border-4 border-white -mt-12 w-24 h-24 bg-gradient-to-r from-cyan-500 to-blue-500 flex items-center justify-center text-white text-3xl font-bold">
                                    M
                                </div>
                            </div>
                            <div class="text-center mt-4">
                                <h2 class="text-xl font-bold text-gray-800">Michael Chen</h2>
                                <p class="text-gray-500 text-sm">@michael_c</p>
                                <p class="text-gray-600 mt-2">Web Developer & Technical Writer</p>
                            </div>
                            <div class="grid grid-cols-3 gap-4 mt-6 text-center">
                                <div>
                                    <p class="text-xl font-bold text-gray-800">142</p>
                                    <p class="text-gray-500 text-sm">Posts</p>
                                </div>
                                <div>
                                    <p class="text-xl font-bold text-gray-800">2.4K</p>
                                    <p class="text-gray-500 text-sm">Followers</p>
                                </div>
                                <div>
                                    <p class="text-xl font-bold text-gray-800">356</p>
                                    <p class="text-gray-500 text-sm">Following</p>
                                </div>
                            </div>
                            <div class="mt-6">
                                <button
                                    class="w-full gradient-border py-2 px-4 rounded-lg text-indigo-600 font-medium hover:bg-indigo-50 transition-colors flex items-center justify-center">
                                    <i data-lucide="edit" class="w-4 h-4 mr-2"></i>
                                    Edit Profile
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Trending Topics -->
                    <div class="bg-white rounded-xl shadow-md hover-lift overflow-hidden fade-in">
                        <div class="px-6 py-4 border-b border-gray-200">
                            <h3 class="text-lg font-bold text-gray-800 flex items-center">
                                <i data-lucide="trending-up" class="w-5 h-5 mr-2 text-indigo-600"></i>
                                Trending Topics
                            </h3>
                        </div>
                        <div class="p-6">
                            <ul class="space-y-4">
                                <li>
                                    <a href="#"
                                        class="flex items-center justify-between text-gray-700 hover:text-indigo-600 transition-colors">
                                        <span>#WebDevelopment</span>
                                        <span class="text-xs bg-indigo-100 text-indigo-800 px-2 py-1 rounded-full">142
                                            posts</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center justify-between text-gray-700 hover:text-indigo-600 transition-colors">
                                        <span>#Programming</span>
                                        <span class="text-xs bg-purple-100 text-purple-800 px-2 py-1 rounded-full">98
                                            posts</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center justify-between text-gray-700 hover:text-indigo-600 transition-colors">
                                        <span>#UIUXDesign</span>
                                        <span class="text-xs bg-pink-100 text-pink-800 px-2 py-1 rounded-full">76
                                            posts</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center justify-between text-gray-700 hover:text-indigo-600 transition-colors">
                                        <span>#Laravel</span>
                                        <span class="text-xs bg-blue-100 text-blue-800 px-2 py-1 rounded-full">64
                                            posts</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center justify-between text-gray-700 hover:text-indigo-600 transition-colors">
                                        <span>#Technology</span>
                                        <span class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded-full">52
                                            posts</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Quick Stats -->
                    <div class="bg-gradient-to-r from-indigo-500 to-purple-600 rounded-xl shadow-lg p-6 text-white fade-in">
                        <h3 class="text-xl font-bold mb-3 flex items-center">
                            <i data-lucide="bar-chart" class="w-5 h-5 mr-2"></i>
                            Weekly Stats
                        </h3>
                        <div class="space-y-3">
                            <div class="flex justify-between items-center">
                                <span>Posts Created</span>
                                <span class="font-bold">12</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span>Comments Made</span>
                                <span class="font-bold">28</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span>Likes Received</span>
                                <span class="font-bold">156</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span>New Followers</span>
                                <span class="font-bold">24</span>
                            </div>
                        </div>
                        <button type="button"
                            class="w-full mt-4 bg-white text-indigo-600 hover:bg-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            View Analytics
                        </button>
                    </div>
                </div>

                <!-- Main Feed -->
                <div class="lg:col-span-6 space-y-6">
                    <!-- Create Post -->
                    <div class="bg-white rounded-xl shadow-md hover-lift overflow-hidden fade-in">
                        <div class="p-6">
                            <div class="flex items-start">
                                <div
                                    class="rounded-full border-2 border-indigo-100 w-12 h-12 bg-gradient-to-r from-cyan-500 to-blue-500 flex items-center justify-center text-white font-bold mr-3">
                                    M
                                </div>
                                <div class="flex-1">
                                    <textarea id="postContent" rows="3"
                                        class="block p-4 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-indigo-500 focus:border-indigo-500"
                                        placeholder="What's on your mind today?"></textarea>
                                    <div class="flex items-center justify-between mt-4">
                                        <div class="flex space-x-2">
                                            <button type="button"
                                                class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none">
                                                <i data-lucide="image" class="w-5 h-5"></i>
                                            </button>
                                            <button type="button"
                                                class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none">
                                                <i data-lucide="smile" class="w-5 h-5"></i>
                                            </button>
                                            <button type="button"
                                                class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none">
                                                <i data-lucide="code" class="w-5 h-5"></i>
                                            </button>
                                            <button type="button"
                                                class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none">
                                                <i data-lucide="link" class="w-5 h-5"></i>
                                            </button>
                                        </div>
                                        <button type="button"
                                            class="text-white bg-gradient-to-r from-indigo-500 to-purple-600 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                            Publish Post
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Post Filters -->
                    <div class="bg-white rounded-xl shadow-sm p-4 fade-in">
                        <div class="flex flex-wrap gap-2">
                            <button type="button"
                                class="text-gray-800 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-full text-sm px-4 py-2 text-center">Latest</button>
                            <button type="button"
                                class="text-gray-800 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-full text-sm px-4 py-2 text-center">Trending</button>
                            <button type="button"
                                class="text-gray-800 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-full text-sm px-4 py-2 text-center">Following</button>
                            <button type="button"
                                class="text-gray-800 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-full text-sm px-4 py-2 text-center">Saved</button>
                            <button type="button"
                                class="text-white bg-gradient-to-r from-indigo-500 to-purple-600 hover:bg-gradient-to-l focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-sm px-4 py-2 text-center">For
                                You</button>
                        </div>
                    </div>

                    <!-- Posts Feed -->
                    <div id="postsFeed" class="space-y-6">
                        <!-- Post 1 -->
                        <div class="bg-white rounded-xl shadow-md post-card overflow-hidden fade-in">
                            <div class="p-6">
                                <!-- Post Header -->
                                <div class="flex items-center justify-between mb-4">
                                    <div class="flex items-center">
                                        <div
                                            class="rounded-full border-2 border-indigo-100 w-10 h-10 bg-gradient-to-r from-pink-500 to-rose-500 flex items-center justify-center text-white font-bold mr-3">
                                            S
                                        </div>
                                        <div>
                                            <h4 class="font-bold text-gray-800">Sarah Johnson</h4>
                                            <div class="flex items-center text-gray-500 text-sm">
                                                <span>@sarah_j</span>
                                                <span class="mx-2">•</span>
                                                <span>2 hours ago</span>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="text-gray-400 hover:text-gray-600">
                                        <i data-lucide="more-horizontal" class="w-6 h-6"></i>
                                    </button>
                                </div>

                                <!-- Post Content -->
                                <div class="mb-4">
                                    <p class="text-gray-800">
                                        After trying several JavaScript frameworks, I find that Vue.js offers the best
                                        developer experience in terms of simplicity, ease of learning, and powerful
                                        capabilities.

                                        What do you think? What's your favorite framework and why?

                                        #WebDevelopment #VueJS #Programming
                                    </p>
                                </div>

                                <!-- Post Stats -->
                                <div class="flex items-center justify-between text-gray-500 text-sm mb-4">
                                    <div class="flex items-center space-x-4">
                                        <div class="flex items-center">
                                            <i data-lucide="heart" class="w-5 h-5 mr-1"></i>
                                            <span>42</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i data-lucide="message-circle" class="w-5 h-5 mr-1"></i>
                                            <span>18</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i data-lucide="share-2" class="w-5 h-5 mr-1"></i>
                                            <span>7</span>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <i data-lucide="eye" class="w-4 h-4 mr-1"></i>
                                        <span>324 views</span>
                                    </div>
                                </div>

                                <!-- Post Actions -->
                                <div class="flex items-center justify-between border-t border-gray-100 pt-4">
                                    <div class="flex space-x-2">
                                        <button type="button"
                                            class="reaction-btn flex items-center text-gray-500 hover:text-indigo-600 px-3 py-1.5 rounded-full hover:bg-indigo-50">
                                            <i data-lucide="heart" class="w-5 h-5 mr-1"></i>
                                            <span>Like</span>
                                        </button>
                                        <button type="button"
                                            class="reaction-btn flex items-center text-gray-500 hover:text-green-600 px-3 py-1.5 rounded-full hover:bg-green-50">
                                            <i data-lucide="message-circle" class="w-5 h-5 mr-1"></i>
                                            <span>Comment</span>
                                        </button>
                                        <button type="button"
                                            class="reaction-btn flex items-center text-gray-500 hover:text-blue-600 px-3 py-1.5 rounded-full hover:bg-blue-50">
                                            <i data-lucide="share-2" class="w-5 h-5 mr-1"></i>
                                            <span>Share</span>
                                        </button>
                                    </div>
                                    <button type="button"
                                        class="reaction-btn text-gray-500 hover:text-red-500 p-1.5 rounded-full hover:bg-red-50">
                                        <i data-lucide="bookmark" class="w-5 h-5"></i>
                                    </button>
                                </div>

                                <!-- Comments Preview -->
                                <div class="mt-4 pt-4 border-t border-gray-100">
                                    <div class="flex items-start">
                                        <div
                                            class="rounded-full border border-gray-200 w-8 h-8 bg-gradient-to-r from-amber-500 to-orange-500 flex items-center justify-center text-white text-xs font-bold mr-2">
                                            T
                                        </div>
                                        <div class="flex-1">
                                            <div class="bg-gray-50 rounded-lg p-3">
                                                <div class="flex items-center mb-1">
                                                    <span class="font-medium text-sm text-gray-800">Thomas Lee</span>
                                                    <span class="text-gray-400 text-xs mx-2">•</span>
                                                    <span class="text-gray-400 text-xs">1 hour ago</span>
                                                </div>
                                                <p class="text-gray-600 text-sm">Completely agree! Vue's reactivity
                                                    system is intuitive and the documentation is excellent.</p>
                                            </div>
                                            <div class="flex items-center mt-2 ml-2">
                                                <button
                                                    class="text-xs text-gray-500 hover:text-indigo-600 flex items-center mr-3">
                                                    <i data-lucide="heart" class="w-3 h-3 mr-1"></i>
                                                    <span>3</span>
                                                </button>
                                                <button
                                                    class="text-xs text-gray-500 hover:text-green-600 flex items-center">
                                                    <i data-lucide="message-circle" class="w-3 h-3 mr-1"></i>
                                                    <span>Reply</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Post 2 -->
                        <div class="bg-white rounded-xl shadow-md post-card overflow-hidden fade-in">
                            <div class="p-6">
                                <!-- Post Header -->
                                <div class="flex items-center justify-between mb-4">
                                    <div class="flex items-center">
                                        <div
                                            class="rounded-full border-2 border-indigo-100 w-10 h-10 bg-gradient-to-r from-green-500 to-teal-500 flex items-center justify-center text-white font-bold mr-3">
                                            A
                                        </div>
                                        <div>
                                            <h4 class="font-bold text-gray-800">Alex Rodriguez</h4>
                                            <div class="flex items-center text-gray-500 text-sm">
                                                <span>@alex_r</span>
                                                <span class="mx-2">•</span>
                                                <span>5 hours ago</span>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="text-gray-400 hover:text-gray-600">
                                        <i data-lucide="more-horizontal" class="w-6 h-6"></i>
                                    </button>
                                </div>

                                <!-- Post Content -->
                                <div class="mb-4">
                                    <p class="text-gray-800">
                                        📢 Important announcement for Laravel developers!

                                        Laravel 10 has been released with amazing new features including:
                                        - Native PHP 8.2 support
                                        - Type hints in all stubs
                                        - Improved exception handling
                                        - New testing tools

                                        Try it out and let me know what you think!

                                        #Laravel #WebDevelopment #PHP
                                    </p>
                                </div>

                                <!-- Post Image -->
                                <div class="mb-4 rounded-xl overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80"
                                        alt="Laravel"
                                        class="w-full h-64 object-cover hover:scale-105 transition-transform duration-500">
                                </div>

                                <!-- Post Stats -->
                                <div class="flex items-center justify-between text-gray-500 text-sm mb-4">
                                    <div class="flex items-center space-x-4">
                                        <div class="flex items-center">
                                            <i data-lucide="heart" class="w-5 h-5 mr-1"></i>
                                            <span>89</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i data-lucide="message-circle" class="w-5 h-5 mr-1"></i>
                                            <span>32</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i data-lucide="share-2" class="w-5 h-5 mr-1"></i>
                                            <span>14</span>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <i data-lucide="eye" class="w-4 h-4 mr-1"></i>
                                        <span>542 views</span>
                                    </div>
                                </div>

                                <!-- Post Actions -->
                                <div class="flex items-center justify-between border-t border-gray-100 pt-4">
                                    <div class="flex space-x-2">
                                        <button type="button"
                                            class="reaction-btn flex items-center text-gray-500 hover:text-indigo-600 px-3 py-1.5 rounded-full hover:bg-indigo-50">
                                            <i data-lucide="heart" class="w-5 h-5 mr-1"></i>
                                            <span>Like</span>
                                        </button>
                                        <button type="button"
                                            class="reaction-btn flex items-center text-gray-500 hover:text-green-600 px-3 py-1.5 rounded-full hover:bg-green-50">
                                            <i data-lucide="message-circle" class="w-5 h-5 mr-1"></i>
                                            <span>Comment</span>
                                        </button>
                                        <button type="button"
                                            class="reaction-btn flex items-center text-gray-500 hover:text-blue-600 px-3 py-1.5 rounded-full hover:bg-blue-50">
                                            <i data-lucide="share-2" class="w-5 h-5 mr-1"></i>
                                            <span>Share</span>
                                        </button>
                                    </div>
                                    <button type="button"
                                        class="reaction-btn active text-red-500 p-1.5 rounded-full hover:bg-red-50">
                                        <i data-lucide="bookmark" class="w-5 h-5"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Post 3 -->
                        <div class="bg-white rounded-xl shadow-md post-card overflow-hidden fade-in">
                            <div class="p-6">
                                <!-- Post Header -->
                                <div class="flex items-center justify-between mb-4">
                                    <div class="flex items-center">
                                        <div
                                            class="rounded-full border-2 border-indigo-100 w-10 h-10 bg-gradient-to-r from-purple-500 to-pink-500 flex items-center justify-center text-white font-bold mr-3">
                                            J
                                        </div>
                                        <div>
                                            <h4 class="font-bold text-gray-800">Jessica Williams</h4>
                                            <div class="flex items-center text-gray-500 text-sm">
                                                <span>@jessica_w</span>
                                                <span class="mx-2">•</span>
                                                <span>1 day ago</span>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="text-gray-400 hover:text-gray-600">
                                        <i data-lucide="more-horizontal" class="w-6 h-6"></i>
                                    </button>
                                </div>

                                <!-- Post Content -->
                                <div class="mb-4">
                                    <p class="text-gray-800">
                                        Just published a comprehensive guide to modern CSS Grid layouts with practical
                                        examples and interactive demos.

                                        Perfect for both beginners and experienced developers looking to master
                                        responsive design patterns.

                                        Check it out and let me know your thoughts! 👇

                                        #CSS #WebDesign #Frontend #ResponsiveDesign
                                    </p>
                                </div>

                                <!-- Code Snippet -->
                                <div class="mb-4 bg-gray-900 rounded-lg p-4 overflow-x-auto">
                                    <pre class="text-gray-200 text-sm">
    <code>.grid-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 1.5rem;
      padding: 2rem;
    }

    .grid-item {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      border-radius: 12px;
      padding: 1.5rem;
      color: white;
      transition: transform 0.3s ease;
    }

    .grid-item:hover {
      transform: translateY(-5px);
    }</code>
                                        </pre>
                                </div>

                                <!-- Post Stats -->
                                <div class="flex items-center justify-between text-gray-500 text-sm mb-4">
                                    <div class="flex items-center space-x-4">
                                        <div class="flex items-center">
                                            <i data-lucide="heart" class="w-5 h-5 mr-1"></i>
                                            <span>127</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i data-lucide="message-circle" class="w-5 h-5 mr-1"></i>
                                            <span>45</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i data-lucide="share-2" class="w-5 h-5 mr-1"></i>
                                            <span>22</span>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <i data-lucide="eye" class="w-4 h-4 mr-1"></i>
                                        <span>892 views</span>
                                    </div>
                                </div>

                                <!-- Post Actions -->
                                <div class="flex items-center justify-between border-t border-gray-100 pt-4">
                                    <div class="flex space-x-2">
                                        <button type="button"
                                            class="reaction-btn flex items-center text-gray-500 hover:text-indigo-600 px-3 py-1.5 rounded-full hover:bg-indigo-50">
                                            <i data-lucide="heart" class="w-5 h-5 mr-1"></i>
                                            <span>Like</span>
                                        </button>
                                        <button type="button"
                                            class="reaction-btn flex items-center text-gray-500 hover:text-green-600 px-3 py-1.5 rounded-full hover:bg-green-50">
                                            <i data-lucide="message-circle" class="w-5 h-5 mr-1"></i>
                                            <span>Comment</span>
                                        </button>
                                        <button type="button"
                                            class="reaction-btn flex items-center text-gray-500 hover:text-blue-600 px-3 py-1.5 rounded-full hover:bg-blue-50">
                                            <i data-lucide="share-2" class="w-5 h-5 mr-1"></i>
                                            <span>Share</span>
                                        </button>
                                    </div>
                                    <button type="button"
                                        class="reaction-btn text-gray-500 hover:text-red-500 p-1.5 rounded-full hover:bg-red-50">
                                        <i data-lucide="bookmark" class="w-5 h-5"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Load More Button -->
                    <div class="text-center">
                        <button type="button" id="loadMoreBtn"
                            class="text-white bg-gradient-to-r from-indigo-500 to-purple-600 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            Load More Posts
                        </button>
                    </div>
                </div>

                <!-- Right Sidebar -->
                <div class="lg:col-span-3 space-y-6">
                    <!-- Who to Follow -->
                    <div class="bg-white rounded-xl shadow-md hover-lift overflow-hidden fade-in">
                        <div class="px-6 py-4 border-b border-gray-200">
                            <h3 class="text-lg font-bold text-gray-800 flex items-center">
                                <i data-lucide="users" class="w-5 h-5 mr-2 text-indigo-600"></i>
                                Who to Follow
                            </h3>
                        </div>
                        <div class="p-6">
                            <div class="space-y-4">
                                <!-- User 1 -->
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <div
                                            class="rounded-full border-2 border-indigo-100 w-12 h-12 bg-gradient-to-r from-pink-500 to-rose-500 flex items-center justify-center text-white font-bold mr-3">
                                            E
                                        </div>
                                        <div>
                                            <h4 class="font-bold text-gray-800">Emma Wilson</h4>
                                            <p class="text-gray-500 text-sm">@emma_wilson</p>
                                        </div>
                                    </div>
                                    <button type="button"
                                        class="text-white bg-gradient-to-r from-indigo-500 to-purple-600 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-3 py-1.5 text-center">
                                        Follow
                                    </button>
                                </div>

                                <!-- User 2 -->
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <div
                                            class="rounded-full border-2 border-indigo-100 w-12 h-12 bg-gradient-to-r from-amber-500 to-orange-500 flex items-center justify-center text-white font-bold mr-3">
                                            D
                                        </div>
                                        <div>
                                            <h4 class="font-bold text-gray-800">David Miller</h4>
                                            <p class="text-gray-500 text-sm">@david_m</p>
                                        </div>
                                    </div>
                                    <button type="button"
                                        class="text-white bg-gradient-to-r from-indigo-500 to-purple-600 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-3 py-1.5 text-center">
                                        Follow
                                    </button>
                                </div>

                                <!-- User 3 -->
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <div
                                            class="rounded-full border-2 border-indigo-100 w-12 h-12 bg-gradient-to-r from-emerald-500 to-teal-500 flex items-center justify-center text-white font-bold mr-3">
                                            L
                                        </div>
                                        <div>
                                            <h4 class="font-bold text-gray-800">Lisa Brown</h4>
                                            <p class="text-gray-500 text-sm">@lisa_brown</p>
                                        </div>
                                    </div>
                                    <button type="button"
                                        class="text-white bg-gradient-to-r from-indigo-500 to-purple-600 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-3 py-1.5 text-center">
                                        Follow
                                    </button>
                                </div>
                            </div>
                            <div class="mt-6">
                                <a href="#"
                                    class="block text-center text-indigo-600 hover:text-indigo-800 font-medium flex items-center justify-center">
                                    Show More
                                    <i data-lucide="chevron-right" class="w-4 h-4 ml-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Trending Posts -->
                    <div class="bg-white rounded-xl shadow-md hover-lift overflow-hidden fade-in">
                        <div class="px-6 py-4 border-b border-gray-200">
                            <h3 class="text-lg font-bold text-gray-800 flex items-center">
                                <i data-lucide="flame" class="w-5 h-5 mr-2 text-indigo-600"></i>
                                Trending Now
                            </h3>
                        </div>
                        <div class="p-6">
                            <div class="space-y-4">
                                <!-- Trending Post 1 -->
                                <div class="flex items-start">
                                    <div class="bg-indigo-100 text-indigo-800 rounded-lg p-2 mr-3">
                                        <i data-lucide="zap" class="w-5 h-5"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-gray-800 text-sm">Best Laravel Security Practices</h4>
                                        <p class="text-gray-500 text-xs mt-1">By Alex Rodriguez • 245 likes</p>
                                    </div>
                                </div>

                                <!-- Trending Post 2 -->
                                <div class="flex items-start">
                                    <div class="bg-purple-100 text-purple-800 rounded-lg p-2 mr-3">
                                        <i data-lucide="code" class="w-5 h-5"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-gray-800 text-sm">Tailwind vs Bootstrap Comparison
                                        </h4>
                                        <p class="text-gray-500 text-xs mt-1">By Sarah Johnson • 189 comments</p>
                                    </div>
                                </div>

                                <!-- Trending Post 3 -->
                                <div class="flex items-start">
                                    <div class="bg-pink-100 text-pink-800 rounded-lg p-2 mr-3">
                                        <i data-lucide="book-open" class="w-5 h-5"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-gray-800 text-sm">How to Land Your First Programming
                                            Job</h4>
                                        <p class="text-gray-500 text-xs mt-1">By Michael Chen • 342 shares</p>
                                    </div>
                                </div>

                                <!-- Trending Post 4 -->
                                <div class="flex items-start">
                                    <div class="bg-blue-100 text-blue-800 rounded-lg p-2 mr-3">
                                        <i data-lucide="cpu" class="w-5 h-5"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-gray-800 text-sm">AI Tools for Developers in 2023</h4>
                                        <p class="text-gray-500 text-xs mt-1">By Thomas Lee • 521 likes</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Upcoming Events -->
                    <div class="bg-gradient-to-r from-cyan-500 to-blue-600 rounded-xl shadow-lg p-6 text-white fade-in">
                        <h3 class="text-xl font-bold mb-3 flex items-center">
                            <i data-lucide="calendar" class="w-5 h-5 mr-2"></i>
                            Upcoming Events
                        </h3>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div class="bg-white bg-opacity-20 rounded-lg p-2 mr-3">
                                    <div class="text-center">
                                        <div class="font-bold text-lg">24</div>
                                        <div class="text-xs">OCT</div>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="font-bold">Web Dev Conference</h4>
                                    <p class="text-sm opacity-90">Virtual • 2:00 PM EST</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="bg-white bg-opacity-20 rounded-lg p-2 mr-3">
                                    <div class="text-center">
                                        <div class="font-bold text-lg">28</div>
                                        <div class="text-xs">OCT</div>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="font-bold">Laravel Live Workshop</h4>
                                    <p class="text-sm opacity-90">Online • 11:00 AM EST</p>
                                </div>
                            </div>
                        </div>
                        <button type="button"
                            class="w-full mt-4 bg-white text-cyan-600 hover:bg-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            View All Events
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- JavaScript for Interactions -->
    <script>
        // Initialize Lucide icons
        lucide.createIcons();

        // Initialize Flowbite components
        document.addEventListener('DOMContentLoaded', function () {
            // Initialize dropdowns
            const dropdowns = document.querySelectorAll('[data-dropdown-toggle]');

            // Reaction buttons interaction
            const reactionButtons = document.querySelectorAll('.reaction-btn');
            reactionButtons.forEach(button => {
                button.addEventListener('click', function () {
                    // Toggle active class for like/bookmark buttons
                    const icon = this.querySelector('i');
                    if (icon) {
                        const iconName = icon.getAttribute('data-lucide');
                        if (iconName === 'heart' || iconName === 'bookmark') {
                            this.classList.toggle('active');

                            if (iconName === 'heart') {
                                this.classList.toggle('text-red-500');
                                this.classList.toggle('text-gray-500');

                                // Update count (simulated)
                                const countElement = this.querySelector('span');
                                if (countElement && countElement.textContent !== 'Like') {
                                    let count = parseInt(countElement.textContent);
                                    if (this.classList.contains('active')) {
                                        countElement.textContent = count + 1;
                                    } else {
                                        countElement.textContent = count - 1;
                                    }
                                }
                            }

                            if (iconName === 'bookmark') {
                                this.classList.toggle('text-red-500');
                                this.classList.toggle('text-gray-500');

                                // Change icon for bookmark
                                if (this.classList.contains('active')) {
                                    icon.setAttribute('data-lucide', 'bookmark-check');
                                } else {
                                    icon.setAttribute('data-lucide', 'bookmark');
                                }
                                lucide.createIcons();
                            }
                        }
                    }
                });
            });

            // Create post button animation
            const createPostBtn = document.getElementById('createPostBtn');
            if (createPostBtn) {
                createPostBtn.addEventListener('click', function () {
                    document.getElementById('postContent').focus();

                    // Add a slight animation
                    this.classList.add('animate-pulse');
                    setTimeout(() => {
                        this.classList.remove('animate-pulse');
                    }, 500);
                });
            }

            // Post card hover effects
            const postCards = document.querySelectorAll('.post-card');
            postCards.forEach(card => {
                card.addEventListener('mouseenter', function () {
                    this.style.transform = 'translateY(-5px)';
                });

                card.addEventListener('mouseleave', function () {
                    this.style.transform = 'translateY(0)';
                });
            });

            // Load more posts functionality
            const loadMoreBtn = document.getElementById('loadMoreBtn');
            if (loadMoreBtn) {
                loadMoreBtn.addEventListener('click', function () {
                    // Show loading state
                    const originalText = this.textContent;
                    this.innerHTML = '<i data-lucide="loader-2" class="w-4 h-4 mr-2 animate-spin"></i> Loading...';
                    lucide.createIcons();

                    // Simulate API call delay
                    setTimeout(() => {
                        // Reset button
                        this.textContent = originalText;

                        // Show success message
                        const toast = document.createElement('div');
                        toast.className = 'fixed top-4 right-4 z-50 flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow-lg';
                        toast.innerHTML = `
                                <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg">
                                    <i data-lucide="check" class="w-5 h-5"></i>
                                </div>
                                <div class="ml-3 text-sm font-normal">Loaded more posts successfully!</div>
                                <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg p-1.5 inline-flex h-8 w-8">
                                    <i data-lucide="x" class="w-5 h-5"></i>
                                </button>
                            `;
                        document.body.appendChild(toast);
                        lucide.createIcons();

                        // Add close functionality
                        const closeBtn = toast.querySelector('button');
                        closeBtn.addEventListener('click', () => {
                            toast.remove();
                        });

                        // Auto-remove toast after 3 seconds
                        setTimeout(() => {
                            if (toast.parentNode) {
                                toast.remove();
                            }
                        }, 3000);
                    }, 1500);
                });
            }

            // Image hover zoom effect
            const postImages = document.querySelectorAll('.post-card img');
            postImages.forEach(img => {
                img.addEventListener('mouseenter', function () {
                    this.style.transform = 'scale(1.05)';
                });

                img.addEventListener('mouseleave', function () {
                    this.style.transform = 'scale(1)';
                });
            });

            // Search functionality
            const searchInput = document.getElementById('search');
            if (searchInput) {
                searchInput.addEventListener('keyup', function (e) {
                    if (e.key === 'Enter') {
                        // Perform search action
                        const query = this.value.trim();
                        if (query) {
                            alert(`Searching for: ${query}`);
                            // In a real app, you would make an API call here
                        }
                    }
                });
            }

            // Add a floating action button for mobile
            if (window.innerWidth < 1024) {
                const fab = document.createElement('button');
                fab.className = 'fixed bottom-6 right-6 z-40 w-14 h-14 bg-gradient-to-r from-indigo-500 to-purple-600 text-white rounded-full shadow-lg flex items-center justify-center hover-lift';
                fab.innerHTML = '<i data-lucide="plus" class="w-6 h-6"></i>';
                fab.addEventListener('click', function () {
                    document.getElementById('postContent').focus();
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                });
                document.body.appendChild(fab);
                lucide.createIcons();
            }
        });

        // Simulate adding a new post
        window.addNewPost = function (content) {
            const postsFeed = document.getElementById('postsFeed');
            const newPost = document.createElement('div');
            newPost.className = 'bg-white rounded-xl shadow-md post-card overflow-hidden fade-in';
            newPost.innerHTML = `
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center">
                                <div class="rounded-full border-2 border-indigo-100 w-10 h-10 bg-gradient-to-r from-cyan-500 to-blue-500 flex items-center justify-center text-white font-bold mr-3">
                                    M
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-800">Michael Chen</h4>
                                    <div class="flex items-center text-gray-500 text-sm">
                                        <span>@michael_c</span>
                                        <span class="mx-2">•</span>
                                        <span>Just now</span>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="text-gray-400 hover:text-gray-600">
                                <i data-lucide="more-horizontal" class="w-6 h-6"></i>
                            </button>
                        </div>
                        <div class="mb-4">
                            <p class="text-gray-800">${content || "Just shared my thoughts on the latest web development trends. What do you think about the future of frontend frameworks?"}</p>
                        </div>
                        <div class="flex items-center justify-between text-gray-500 text-sm mb-4">
                            <div class="flex items-center space-x-4">
                                <div class="flex items-center">
                                    <i data-lucide="heart" class="w-5 h-5 mr-1"></i>
                                    <span>0</span>
                                </div>
                                <div class="flex items-center">
                                    <i data-lucide="message-circle" class="w-5 h-5 mr-1"></i>
                                    <span>0</span>
                                </div>
                                <div class="flex items-center">
                                    <i data-lucide="share-2" class="w-5 h-5 mr-1"></i>
                                    <span>0</span>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <i data-lucide="eye" class="w-4 h-4 mr-1"></i>
                                <span>1 view</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between border-t border-gray-100 pt-4">
                            <div class="flex space-x-2">
                                <button type="button" class="reaction-btn flex items-center text-gray-500 hover:text-indigo-600 px-3 py-1.5 rounded-full hover:bg-indigo-50">
                                    <i data-lucide="heart" class="w-5 h-5 mr-1"></i>
                                    <span>Like</span>
                                </button>
                                <button type="button" class="reaction-btn flex items-center text-gray-500 hover:text-green-600 px-3 py-1.5 rounded-full hover:bg-green-50">
                                    <i data-lucide="message-circle" class="w-5 h-5 mr-1"></i>
                                    <span>Comment</span>
                                </button>
                                <button type="button" class="reaction-btn flex items-center text-gray-500 hover:text-blue-600 px-3 py-1.5 rounded-full hover:bg-blue-50">
                                    <i data-lucide="share-2" class="w-5 h-5 mr-1"></i>
                                    <span>Share</span>
                                </button>
                            </div>
                            <button type="button" class="reaction-btn text-gray-500 hover:text-red-500 p-1.5 rounded-full hover:bg-red-50">
                                <i data-lucide="bookmark" class="w-5 h-5"></i>
                            </button>
                        </div>
                    </div>
                `;

            // Add to the top of the feed
            postsFeed.insertBefore(newPost, postsFeed.firstChild);

            // Re-initialize event listeners for new post
            setTimeout(() => {
                lucide.createIcons();

                const newReactionButtons = newPost.querySelectorAll('.reaction-btn');
                newReactionButtons.forEach(button => {
                    button.addEventListener('click', function () {
                        const icon = this.querySelector('i');
                        if (icon) {
                            const iconName = icon.getAttribute('data-lucide');
                            if (iconName === 'heart' || iconName === 'bookmark') {
                                this.classList.toggle('active');

                                if (iconName === 'heart') {
                                    this.classList.toggle('text-red-500');
                                    this.classList.toggle('text-gray-500');
                                }

                                if (iconName === 'bookmark') {
                                    this.classList.toggle('text-red-500');
                                    this.classList.toggle('text-gray-500');
                                }
                            }
                        }
                    });
                });

                // Add hover effect to new post
                newPost.addEventListener('mouseenter', function () {
                    this.style.transform = 'translateY(-5px)';
                });

                newPost.addEventListener('mouseleave', function () {
                    this.style.transform = 'translateY(0)';
                });
            }, 100);

            // Show success notification
            alert('New post published successfully!');
        };

        // Publish post when clicking the publish button
        document.querySelector('button:contains("Publish Post")')?.addEventListener('click', function () {
            const postContent = document.getElementById('postContent').value;
            if (postContent.trim()) {
                window.addNewPost(postContent);
                document.getElementById('postContent').value = '';
            } else {
                alert('Please write something before publishing!');
            }
        });
    </script>
@endsection