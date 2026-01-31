@extends('layout.app')

@section('main-content')
<div class="bg-white rounded-xl shadow-md post-card overflow-hidden fade-in p-6">

    <!-- Post Header -->
    <div class="flex items-center justify-between mb-4">
        <div class="flex items-center">
            <div
                class="rounded-full border-2 border-indigo-100 w-10 h-10 bg-gradient-to-r from-cyan-500 to-blue-500 flex items-center justify-center text-white font-bold mr-3 overflow-hidden">
                <img src="{{ asset('storage/' . $post->user->profile_photo) }}" class="w-full h-full object-cover"
                    alt="profile_photo">
            </div>
            <div>
                <h4 class="font-bold text-gray-800">{{ $post->user->name }}</h4>
                <div class="flex items-center text-gray-500 text-sm">
                    <span>{{ $post->user->email }}</span>
                    <span class="mx-2">•</span>
                    <span>{{ $post->updated_at->diffForHumans() }}</span>
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
            {!! nl2br(e($post->post_body)) !!}
        </p>
    </div>

    <!-- Post Image -->
    <div class="mb-4 rounded-xl overflow-hidden max-w-full">
        <img src="{{ asset('storage/' . $post->thumbnail) }}" class="w-full h-full object-cover" alt="Thumbnail">
    </div>

    <!-- Post Stats -->
    <div class="flex items-center justify-between text-gray-500 text-sm mb-4">
        <div class="flex items-center space-x-4">
            <div class="flex items-center">
                <i data-lucide="heart" class="w-5 h-5 mr-1"></i>
                <span>{{ $post->reactions->where('reaction_type_id',1 && 2 && 3 && 4 && 5 && 6 && 7 && 8 && 9 && 10)->count() ?? 0 }}</span>
            </div>
            <div class="flex items-center">
                <i data-lucide="message-circle" class="w-5 h-5 mr-1"></i>
                <span>{{ $post->comments->count() ?? 0 }}</span>
            </div>
            <div class="flex items-center">
                <!-- <i data-lucide="share-2" class="w-5 h-5 mr-1"></i>
                <span>14</span> -->
            </div>
        </div>
        <!-- <div class="flex items-center">
            <i data-lucide="eye" class="w-4 h-4 mr-1"></i>
            <span>542 views</span>
        </div> -->
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
            <!-- <button type="button"
                class="reaction-btn flex items-center text-gray-500 hover:text-blue-600 px-3 py-1.5 rounded-full hover:bg-blue-50">
                <i data-lucide="share-2" class="w-5 h-5 mr-1"></i>
                <span>Share</span>
            </button> -->
        </div>
        <button type="button" class="reaction-btn active text-red-500 p-1.5 rounded-full hover:bg-red-50">
            <i data-lucide="bookmark" class="w-5 h-5"></i>
        </button>
    </div>

</div>
@endsection
