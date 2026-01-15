@extends('layout.app')


@section('main-content')

  <div class="min-h-screen bg-gradient-to-br from-gray-50 to-gray-100 py-8">
    <div class="max-w-4xl mx-auto px-4">
        <!-- Header -->
        <div class="mb-8">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-3xl font-bold text-gray-800">Create New Post</h1>
                    <p class="text-gray-600 mt-2">Share your thoughts, ideas, or knowledge with the community</p>
                </div>
                <a href="{{ route('home') }}" class="flex items-center text-gray-600 hover:text-indigo-600 transition-colors">
                    <i data-lucide="arrow-left" class="w-5 h-5 mr-2"></i>
                    Back to Feed
                </a>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Main Form -->
            <div class="lg:col-span-2">
                <form id="createPostForm" class="bg-white rounded-2xl shadow-lg overflow-hidden">
                    @csrf
                    
                    <!-- Form Header -->
                    <div class="border-b border-gray-200 px-6 py-4">
                        <div class="flex items-center">
                            <div class="rounded-full border-2 border-indigo-100 w-10 h-10 bg-gradient-to-r from-cyan-500 to-blue-500 flex items-center justify-center text-white font-bold mr-3">
                                M
                            </div>
                            <div>
                                <p class="font-medium text-gray-800">Michael Chen</p>
                                <p class="text-sm text-gray-500">@michael_c</p>
                            </div>
                        </div>
                    </div>

                    <!-- Post Content -->
                    <div class="p-6">
                        <!-- Title -->
                        <div class="mb-6">
                            <label for="postTitle" class="block text-sm font-medium text-gray-700 mb-2 flex items-center">
                                <i data-lucide="type" class="w-4 h-4 mr-2 text-indigo-600"></i>
                                Post Title
                            </label>
                            <input type="text" id="postTitle" name="title" 
                                   class="w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all"
                                   placeholder="What's your post about?" required>
                            <p class="mt-1 text-sm text-gray-500">Make it catchy and descriptive</p>
                        </div>

                        <!-- Content -->
                        <div class="mb-6">
                            <label for="postContent" class="block text-sm font-medium text-gray-700 mb-2 flex items-center">
                                <i data-lucide="edit" class="w-4 h-4 mr-2 text-indigo-600"></i>
                                Post Content
                            </label>
                            <div class="relative">
                                <textarea id="postContent" name="content" rows="12"
                                          class="w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all resize-none"
                                          placeholder="Write your thoughts here... (Supports Markdown)" required></textarea>
                                
                                <!-- Word Counter -->
                                <div class="absolute bottom-3 right-3 text-sm text-gray-500">
                                    <span id="wordCount">0</span> words
                                </div>
                            </div>
                        </div>

                        <!-- Tags -->
                        <div class="mb-6">
                            <label for="postTags" class="block text-sm font-medium text-gray-700 mb-2 flex items-center">
                                <i data-lucide="tag" class="w-4 h-4 mr-2 text-indigo-600"></i>
                                Tags
                            </label>
                            <div class="relative">
                                <input type="text" id="postTags" 
                                       class="w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all"
                                       placeholder="Add tags separated by commas (e.g., laravel, webdev, programming)">
                                <div class="mt-2 flex flex-wrap gap-2" id="tagsContainer"></div>
                            </div>
                            <p class="mt-1 text-sm text-gray-500">Add up to 5 tags to help others find your post</p>
                        </div>

                        <!-- Image Upload -->
                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 mb-2 flex items-center">
                                <i data-lucide="image" class="w-4 h-4 mr-2 text-indigo-600"></i>
                                Featured Image
                            </label>
                            <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-lg hover:border-indigo-400 transition-colors" id="imageUploadArea">
                                <div class="space-y-1 text-center">
                                    <i data-lucide="upload-cloud" class="mx-auto h-12 w-12 text-gray-400"></i>
                                    <div class="flex text-sm text-gray-600">
                                        <label for="postImage" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none">
                                            <span>Upload a file</span>
                                            <input id="postImage" name="image" type="file" class="sr-only" accept="image/*">
                                        </label>
                                        <p class="pl-1">or drag and drop</p>
                                    </div>
                                    <p class="text-xs text-gray-500">PNG, JPG, GIF up to 5MB</p>
                                </div>
                            </div>
                            <div id="imagePreview" class="mt-4 hidden">
                                <div class="relative rounded-lg overflow-hidden">
                                    <img id="previewImage" src="" alt="Preview" class="w-full h-64 object-cover">
                                    <button type="button" id="removeImage" class="absolute top-3 right-3 bg-red-500 text-white p-2 rounded-full hover:bg-red-600 transition-colors">
                                        <i data-lucide="x" class="w-4 h-4"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Code Snippet Option -->
                        <div class="mb-6">
                            <div class="flex items-center justify-between mb-2">
                                <label class="text-sm font-medium text-gray-700 flex items-center">
                                    <i data-lucide="code" class="w-4 h-4 mr-2 text-indigo-600"></i>
                                    Add Code Snippet
                                </label>
                                <button type="button" id="toggleCode" class="text-sm text-indigo-600 hover:text-indigo-800 flex items-center">
                                    <i data-lucide="plus" class="w-4 h-4 mr-1"></i>
                                    Add Code
                                </button>
                            </div>
                            <div id="codeSection" class="hidden space-y-3">
                                <div>
                                    <label for="codeLanguage" class="block text-sm text-gray-600 mb-1">Language</label>
                                    <select id="codeLanguage" class="w-full px-4 py-2 bg-gray-50 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                                        <option value="javascript">JavaScript</option>
                                        <option value="php">PHP</option>
                                        <option value="python">Python</option>
                                        <option value="html">HTML</option>
                                        <option value="css">CSS</option>
                                        <option value="bash">Bash</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="codeSnippet" class="block text-sm text-gray-600 mb-1">Code</label>
                                    <textarea id="codeSnippet" rows="6" 
                                              class="w-full px-4 py-3 font-mono text-sm bg-gray-900 text-gray-100 border border-gray-700 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                                              placeholder="Paste your code here..."></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Visibility -->
                        <div class="mb-8">
                            <label class="block text-sm font-medium text-gray-700 mb-2 flex items-center">
                                <i data-lucide="eye" class="w-4 h-4 mr-2 text-indigo-600"></i>
                                Visibility
                            </label>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
                                <label class="relative flex cursor-pointer rounded-lg border border-gray-300 p-4 focus:outline-none hover:border-indigo-400 transition-colors">
                                    <input type="radio" name="visibility" value="public" class="sr-only" checked>
                                    <div class="flex w-full items-center justify-between">
                                        <div class="flex items-center">
                                            <div class="text-sm">
                                                <p class="font-medium text-gray-900">Public</p>
                                                <p class="text-gray-500">Anyone can see this post</p>
                                            </div>
                                        </div>
                                        <i data-lucide="globe" class="h-5 w-5 text-indigo-600"></i>
                                    </div>
                                </label>
                                
                                <label class="relative flex cursor-pointer rounded-lg border border-gray-300 p-4 focus:outline-none hover:border-indigo-400 transition-colors">
                                    <input type="radio" name="visibility" value="followers" class="sr-only">
                                    <div class="flex w-full items-center justify-between">
                                        <div class="flex items-center">
                                            <div class="text-sm">
                                                <p class="font-medium text-gray-900">Followers</p>
                                                <p class="text-gray-500">Only your followers</p>
                                            </div>
                                        </div>
                                        <i data-lucide="users" class="h-5 w-5 text-gray-400"></i>
                                    </div>
                                </label>
                                
                                <label class="relative flex cursor-pointer rounded-lg border border-gray-300 p-4 focus:outline-none hover:border-indigo-400 transition-colors">
                                    <input type="radio" name="visibility" value="private" class="sr-only">
                                    <div class="flex w-full items-center justify-between">
                                        <div class="flex items-center">
                                            <div class="text-sm">
                                                <p class="font-medium text-gray-900">Private</p>
                                                <p class="text-gray-500">Only you can see this</p>
                                            </div>
                                        </div>
                                        <i data-lucide="lock" class="h-5 w-5 text-gray-400"></i>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <!-- Form Actions -->
                        <div class="flex flex-col sm:flex-row gap-3 pt-6 border-t border-gray-200">
                            <button type="button" id="saveDraft" class="px-6 py-3 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors flex items-center justify-center">
                                <i data-lucide="save" class="w-5 h-5 mr-2"></i>
                                Save Draft
                            </button>
                            <button type="button" id="previewPost" class="px-6 py-3 border border-indigo-300 text-indigo-700 rounded-lg hover:bg-indigo-50 transition-colors flex items-center justify-center">
                                <i data-lucide="eye" class="w-5 h-5 mr-2"></i>
                                Preview
                            </button>
                            <button type="submit" class="flex-1 px-6 py-3 bg-gradient-to-r from-indigo-500 to-purple-600 text-white rounded-lg hover:from-indigo-600 hover:to-purple-700 transition-all shadow-md hover:shadow-lg flex items-center justify-center">
                                <i data-lucide="send" class="w-5 h-5 mr-2"></i>
                                Publish Post
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1">
                <!-- Tips Card -->
                <div class="bg-gradient-to-r from-indigo-500 to-purple-600 rounded-2xl shadow-lg p-6 text-white mb-6">
                    <h3 class="text-lg font-bold mb-4 flex items-center">
                        <i data-lucide="lightbulb" class="w-5 h-5 mr-2"></i>
                        Writing Tips
                    </h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i data-lucide="check-circle" class="w-5 h-5 mr-2 mt-0.5"></i>
                            <span>Keep titles clear and descriptive</span>
                        </li>
                        <li class="flex items-start">
                            <i data-lucide="check-circle" class="w-5 h-5 mr-2 mt-0.5"></i>
                            <span>Use formatting for better readability</span>
                        </li>
                        <li class="flex items-start">
                            <i data-lucide="check-circle" class="w-5 h-5 mr-2 mt-0.5"></i>
                            <span>Add relevant tags for discoverability</span>
                        </li>
                        <li class="flex items-start">
                            <i data-lucide="check-circle" class="w-5 h-5 mr-2 mt-0.5"></i>
                            <span>Include code snippets when relevant</span>
                        </li>
                    </ul>
                </div>

                <!-- Formatting Guide -->
                <div class="bg-white rounded-2xl shadow-lg p-6 mb-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                        <i data-lucide="type" class="w-5 h-5 mr-2 text-indigo-600"></i>
                        Formatting Guide
                    </h3>
                    <div class="space-y-3 text-sm">
                        <div class="flex items-center justify-between p-2 hover:bg-gray-50 rounded">
                            <code class="text-gray-700">**bold**</code>
                            <span class="font-semibold text-gray-600">Bold Text</span>
                        </div>
                        <div class="flex items-center justify-between p-2 hover:bg-gray-50 rounded">
                            <code class="text-gray-700">*italic*</code>
                            <span class="italic text-gray-600">Italic Text</span>
                        </div>
                        <div class="flex items-center justify-between p-2 hover:bg-gray-50 rounded">
                            <code class="text-gray-700"># Heading</code>
                            <span class="font-bold text-gray-600">Heading</span>
                        </div>
                        <div class="flex items-center justify-between p-2 hover:bg-gray-50 rounded">
                            <code class="text-gray-700">- List item</code>
                            <span class="text-gray-600">Bullet List</span>
                        </div>
                        <div class="flex items-center justify-between p-2 hover:bg-gray-50 rounded">
                            <code class="text-gray-700">> Quote</code>
                            <span class="text-gray-600">Blockquote</span>
                        </div>
                    </div>
                </div>

                <!-- Recent Drafts -->
                <div class="bg-white rounded-2xl shadow-lg p-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                        <i data-lucide="file-text" class="w-5 h-5 mr-2 text-indigo-600"></i>
                        Recent Drafts
                    </h3>
                    <div class="space-y-3">
                        <div class="p-3 border border-gray-200 rounded-lg hover:border-indigo-300 transition-colors cursor-pointer">
                            <p class="font-medium text-gray-800 truncate">Getting Started with Laravel Livewire</p>
                            <p class="text-sm text-gray-500 mt-1">Last edited 2 hours ago</p>
                        </div>
                        <div class="p-3 border border-gray-200 rounded-lg hover:border-indigo-300 transition-colors cursor-pointer">
                            <p class="font-medium text-gray-800 truncate">CSS Grid vs Flexbox Guide</p>
                            <p class="text-sm text-gray-500 mt-1">Last edited yesterday</p>
                        </div>
                        <a href="#" class="block text-center text-indigo-600 hover:text-indigo-800 text-sm font-medium pt-2">
                            View all drafts
                            <i data-lucide="chevron-right" class="w-4 h-4 inline ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Preview Modal -->
    <div id="previewModal" class="fixed inset-0 bg-gray-900 bg-opacity-50 hidden z-50 overflow-y-auto">
        <div class="flex items-center justify-center min-h-screen p-4">
            <div class="bg-white rounded-2xl shadow-2xl w-full max-w-4xl">
                <div class="flex items-center justify-between p-6 border-b border-gray-200">
                    <h3 class="text-2xl font-bold text-gray-800">Post Preview</h3>
                    <button type="button" id="closePreview" class="text-gray-400 hover:text-gray-600">
                        <i data-lucide="x" class="w-6 h-6"></i>
                    </button>
                </div>
                <div class="p-6 max-h-[70vh] overflow-y-auto">
                    <div id="previewContent" class="prose max-w-none">
                        <!-- Preview content will be inserted here -->
                    </div>
                </div>
                <div class="flex justify-end gap-3 p-6 border-t border-gray-200">
                    <button type="button" id="closePreviewBtn" class="px-6 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors">
                        Close
                    </button>
                    <button type="button" id="editPostBtn" class="px-6 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors">
                        Edit Post
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize Lucide icons
        lucide.createIcons();
        
        // Word counter
        const postContent = document.getElementById('postContent');
        const wordCount = document.getElementById('wordCount');
        
        postContent.addEventListener('input', function() {
            const words = this.value.trim().split(/\s+/).filter(word => word.length > 0);
            wordCount.textContent = words.length;
        });
        
        // Tags functionality
        const tagsInput = document.getElementById('postTags');
        const tagsContainer = document.getElementById('tagsContainer');
        let tags = [];
        
        tagsInput.addEventListener('keydown', function(e) {
            if (e.key === 'Enter' || e.key === ',') {
                e.preventDefault();
                const tag = this.value.trim();
                if (tag && tags.length < 5) {
                    addTag(tag);
                    this.value = '';
                }
            }
        });
        
        function addTag(tag) {
            if (tags.includes(tag.toLowerCase())) return;
            
            tags.push(tag.toLowerCase());
            const tagElement = document.createElement('div');
            tagElement.className = 'inline-flex items-center bg-indigo-100 text-indigo-800 px-3 py-1 rounded-full text-sm';
            tagElement.innerHTML = `
                ${tag}
                <button type="button" class="ml-2 text-indigo-600 hover:text-indigo-800" data-tag="${tag.toLowerCase()}">
                    <i data-lucide="x" class="w-3 h-3"></i>
                </button>
            `;
            tagsContainer.appendChild(tagElement);
            lucide.createIcons();
            
            // Add remove functionality
            tagElement.querySelector('button').addEventListener('click', function() {
                const tagToRemove = this.getAttribute('data-tag');
                tags = tags.filter(t => t !== tagToRemove);
                tagElement.remove();
            });
        }
        
        // Image upload preview
        const imageInput = document.getElementById('postImage');
        const imagePreview = document.getElementById('imagePreview');
        const previewImage = document.getElementById('previewImage');
        const imageUploadArea = document.getElementById('imageUploadArea');
        const removeImageBtn = document.getElementById('removeImage');
        
        imageInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    previewImage.src = e.target.result;
                    imagePreview.classList.remove('hidden');
                    imageUploadArea.classList.add('hidden');
                };
                reader.readAsDataURL(file);
            }
        });
        
        // Drag and drop functionality
        ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
            imageUploadArea.addEventListener(eventName, preventDefaults, false);
        });
        
        function preventDefaults(e) {
            e.preventDefault();
            e.stopPropagation();
        }
        
        ['dragenter', 'dragover'].forEach(eventName => {
            imageUploadArea.addEventListener(eventName, highlight, false);
        });
        
        ['dragleave', 'drop'].forEach(eventName => {
            imageUploadArea.addEventListener(eventName, unhighlight, false);
        });
        
        function highlight() {
            imageUploadArea.classList.add('border-indigo-500', 'bg-indigo-50');
        }
        
        function unhighlight() {
            imageUploadArea.classList.remove('border-indigo-500', 'bg-indigo-50');
        }
        
        imageUploadArea.addEventListener('drop', handleDrop, false);
        
        function handleDrop(e) {
            const dt = e.dataTransfer;
            const files = dt.files;
            imageInput.files = files;
            
            // Trigger change event
            const event = new Event('change');
            imageInput.dispatchEvent(event);
        }
        
        removeImageBtn.addEventListener('click', function() {
            imagePreview.classList.add('hidden');
            imageUploadArea.classList.remove('hidden');
            imageInput.value = '';
        });
        
        // Code snippet toggle
        const toggleCodeBtn = document.getElementById('toggleCode');
        const codeSection = document.getElementById('codeSection');
        
        toggleCodeBtn.addEventListener('click', function() {
            codeSection.classList.toggle('hidden');
            if (codeSection.classList.contains('hidden')) {
                this.innerHTML = '<i data-lucide="plus" class="w-4 h-4 mr-1"></i> Add Code';
            } else {
                this.innerHTML = '<i data-lucide="minus" class="w-4 h-4 mr-1"></i> Remove Code';
            }
            lucide.createIcons();
        });
        
        // Preview functionality
        const previewBtn = document.getElementById('previewPost');
        const previewModal = document.getElementById('previewModal');
        const previewContent = document.getElementById('previewContent');
        const closePreview = document.getElementById('closePreview');
        const closePreviewBtn = document.getElementById('closePreviewBtn');
        const editPostBtn = document.getElementById('editPostBtn');
        
        function generatePreview() {
            const title = document.getElementById('postTitle').value || 'Untitled Post';
            const content = document.getElementById('postContent').value || 'No content yet.';
            const code = document.getElementById('codeSnippet').value;
            const language = document.getElementById('codeLanguage').value;
            
            let previewHTML = `
                <h1 class="text-3xl font-bold text-gray-800 mb-6">${title}</h1>
                <div class="prose prose-lg max-w-none">
                    ${marked.parse(content)}
                </div>
            `;
            
            if (code) {
                previewHTML += `
                    <div class="mt-8">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Code Snippet</h3>
                        <pre class="bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto"><code class="language-${language}">${code}</code></pre>
                    </div>
                `;
            }
            
            previewHTML += `
                <div class="mt-8 pt-6 border-t border-gray-200">
                    <div class="flex items-center">
                        <div class="rounded-full border-2 border-indigo-100 w-10 h-10 bg-gradient-to-r from-cyan-500 to-blue-500 flex items-center justify-center text-white font-bold mr-3">
                            M
                        </div>
                        <div>
                            <p class="font-medium text-gray-800">Michael Chen</p>
                            <p class="text-sm text-gray-500">Posted just now</p>
                        </div>
                    </div>
                    <div class="mt-4 flex flex-wrap gap-2">
                        ${tags.map(tag => `<span class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm">#${tag}</span>`).join('')}
                    </div>
                </div>
            `;
            
            return previewHTML;
        }
        
        previewBtn.addEventListener('click', function() {
            previewContent.innerHTML = generatePreview();
            previewModal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        });
        
        [closePreview, closePreviewBtn].forEach(btn => {
            btn.addEventListener('click', function() {
                previewModal.classList.add('hidden');
                document.body.style.overflow = 'auto';
            });
        });
        
        editPostBtn.addEventListener('click', function() {
            previewModal.classList.add('hidden');
            document.body.style.overflow = 'auto';
            document.getElementById('postTitle').focus();
        });
        
        // Form submission
        const form = document.getElementById('createPostForm');
        const saveDraftBtn = document.getElementById('saveDraft');
        
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Show loading state
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            submitBtn.innerHTML = '<i data-lucide="loader-2" class="w-5 h-5 mr-2 animate-spin"></i> Publishing...';
            submitBtn.disabled = true;
            
            // Simulate API call
            setTimeout(() => {
                // Show success notification
                const toast = document.createElement('div');
                toast.className = 'fixed top-4 right-4 z-50 flex items-center w-full max-w-xs p-4 text-gray-500 bg-white rounded-lg shadow-lg';
                toast.innerHTML = `
                    <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg">
                        <i data-lucide="check" class="w-5 h-5"></i>
                    </div>
                    <div class="ml-3 text-sm font-normal">Post published successfully!</div>
                    <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg p-1.5 inline-flex h-8 w-8">
                        <i data-lucide="x" class="w-5 h-5"></i>
                    </button>
                `;
                document.body.appendChild(toast);
                lucide.createIcons();
                
                // Reset form
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
                
                // Redirect after success
                setTimeout(() => {
                    window.location.href = '/';
                }, 1500);
                
                // Auto-remove toast
                setTimeout(() => toast.remove(), 3000);
            }, 2000);
        });
        
        saveDraftBtn.addEventListener('click', function() {
            // Show saving indicator
            const originalText = this.innerHTML;
            this.innerHTML = '<i data-lucide="loader-2" class="w-5 h-5 mr-2 animate-spin"></i> Saving...';
            this.disabled = true;
            
            setTimeout(() => {
                this.innerHTML = originalText;
                this.disabled = false;
                
                // Show success message
                const toast = document.createElement('div');
                toast.className = 'fixed top-4 right-4 z-50 flex items-center w-full max-w-xs p-4 text-gray-500 bg-white rounded-lg shadow-lg';
                toast.innerHTML = `
                    <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-blue-500 bg-blue-100 rounded-lg">
                        <i data-lucide="save" class="w-5 h-5"></i>
                    </div>
                    <div class="ml-3 text-sm font-normal">Draft saved successfully!</div>
                `;
                document.body.appendChild(toast);
                lucide.createIcons();
                
                setTimeout(() => toast.remove(), 3000);
            }, 1000);
        });
        
        // Markdown parser for preview
        const markedScript = document.createElement('script');
        markedScript.src = 'https://cdn.jsdelivr.net/npm/marked/marked.min.js';
        document.head.appendChild(markedScript);
    });
</script>

<style>
    .prose {
        color: #374151;
    }
    .prose h1 {
        font-size: 2.25em;
        font-weight: 800;
        margin-top: 0;
        margin-bottom: 0.5em;
    }
    .prose h2 {
        font-size: 1.875em;
        font-weight: 700;
        margin-top: 1.5em;
        margin-bottom: 0.5em;
    }
    .prose p {
        margin-top: 1em;
        margin-bottom: 1em;
        line-height: 1.75;
    }
    .prose ul {
        list-style-type: disc;
        padding-left: 1.5em;
        margin-top: 1em;
        margin-bottom: 1em;
    }
    .prose blockquote {
        border-left: 4px solid #e5e7eb;
        padding-left: 1em;
        font-style: italic;
        color: #6b7280;
        margin-top: 1.5em;
        margin-bottom: 1.5em;
    }
    .prose code {
        background-color: #f3f4f6;
        padding: 0.2em 0.4em;
        border-radius: 0.25em;
        font-family: 'Courier New', monospace;
        font-size: 0.875em;
    }
    .prose pre {
        background-color: #1f2937;
        color: #f9fafb;
        padding: 1em;
        border-radius: 0.5em;
        overflow-x: auto;
        margin-top: 1.5em;
        margin-bottom: 1.5em;
    }
</style>

@endsection