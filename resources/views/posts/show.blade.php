@extends('layout.app')

@section('main-content')
    <div class="p-4">

        <h1>{{ $post->post_title }}</h1>


        <div class="border-b border-gray-200 px-6 py-4">
            <div class="flex items-center">
                <div
                    class="rounded-full border-2 border-indigo-100 w-10 h-10 bg-linear-to-r from-cyan-500 to-blue-500 flex items-center justify-center text-white font-bold mr-3 overflow-hidden">
                    <img src="{{ asset('storage/' . $post->user->profile_photo) }}" class="w-full h-full object-cover"
                        alt="Thumbnail">
                </div>
                <div>
                    <p class="font-medium text-gray-800">{{ $post->user->name }}</p>
                    <p class="text-sm text-gray-500">{{ $post->user->email }}</p>
                </div>
            </div>
        </div>

        <div class="max-w-lg">
            <img src="{{ asset('storage/' . $post->thumbnail) }}" class="w-full h-full object-cover" alt="Thumbnail">
        </div>

        <p>Status: {{ $post->postStatus->type }}</p>

        <div>
            {!! nl2br(e($post->post_body)) !!}
        </div>

    </div>
@endsection