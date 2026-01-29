@extends('layout.empty')

@section('main-content')
<div class="min-h-screen flex items-center justify-center p-4">
    <div class="max-w-md w-full space-y-8 bg-white dark:bg-gray-600 rounded-xl shadow-lg p-8">
        {{-- Form Header --}}
        <div class="text-center">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">
                Welcome
            </h2>
            <div class="flex justify-center space-x-4">
                <button id="signin-tab" class="px-4 py-2 font-medium text-blue-600 border-b-2 border-blue-600">
                    Sign In
                </button>
                <button id="signup-tab" class="px-4 py-2 font-medium text-gray-500 hover:text-blue-600 border-b-2 border-transparent">
                    Sign Up
                </button>
            </div>
        </div>

        {{-- Error Messages --}}
        @if ($errors->any())
            <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Sign In Form --}}
        <form id="signin-form" class="space-y-6" method="POST" action="{{ route('login') }}" novalidate>
            @csrf
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                <input id="email" name="email" type="email" required value="{{ old('email') }}"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input id="password" name="password" type="password" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div class="flex items-center">
                <input id="remember_me" name="remember" type="checkbox"
                    class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                <label for="remember_me" class="ml-2 block text-sm text-gray-900">Remember me</label>
            </div>
            <div>
                <button type="submit"
                    class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Sign In
                </button>
            </div>
        </form>

        {{-- Sign Up Form --}}
        <form id="signup-form" class="space-y-6 hidden" method="POST" action="{{ route('register') }}" enctype="multipart/form-data" novalidate>
            @csrf
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                <input id="name" name="name" type="text" required value="{{ old('name') }}"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
                <label for="email_signup" class="block text-sm font-medium text-gray-700">Email address</label>
                <input id="email_signup" name="email" type="email" required value="{{ old('email') }}"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
                <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                <input id="phone" name="phone" type="text" value="{{ old('phone') }}"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
                <label for="profile_photo" class="block text-sm font-medium text-gray-700">Profile Photo</label>
                <input id="profile_photo" name="profile_photo" type="file" accept="image/*"
                    class="mt-1 block w-full text-sm text-gray-700 file:py-2 file:px-4 file:border file:border-gray-300 file:rounded-md file:text-sm file:bg-gray-100 file:text-gray-700 hover:file:bg-gray-200">
            </div>

            <div>
                <label for="password_signup" class="block text-sm font-medium text-gray-700">Password</label>
                <input id="password_signup" name="password" type="password" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                <input id="password_confirmation" name="password_confirmation" type="password" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
                <button type="submit"
                    class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                    Sign Up
                </button>
            </div>
        </form>

        <div class="text-end">{{ config('app.version', '5.0.0') }}</div>
    </div>
</div>

{{-- Toggle JS --}}
<script>
    const signinTab = document.getElementById('signin-tab');
    const signupTab = document.getElementById('signup-tab');
    const signinForm = document.getElementById('signin-form');
    const signupForm = document.getElementById('signup-form');

    signinTab.addEventListener('click', () => {
        signinForm.classList.remove('hidden');
        signupForm.classList.add('hidden');
        signinTab.classList.add('text-blue-600', 'border-blue-600');
        signinTab.classList.remove('text-gray-500', 'border-transparent');
        signupTab.classList.remove('text-blue-600', 'border-blue-600');
        signupTab.classList.add('text-gray-500', 'border-transparent');
    });

    signupTab.addEventListener('click', () => {
        signupForm.classList.remove('hidden');
        signinForm.classList.add('hidden');
        signupTab.classList.add('text-blue-600', 'border-blue-600');
        signupTab.classList.remove('text-gray-500', 'border-transparent');
        signinTab.classList.remove('text-blue-600', 'border-blue-600');
        signinTab.classList.add('text-gray-500', 'border-transparent');
    });
</script>
@endsection
