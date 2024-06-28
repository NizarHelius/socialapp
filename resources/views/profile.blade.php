<x-app-layout>
    <x-slot name="header">
        <div class="bg-white dark:bg-gray-800 p-6 shadow-lg rounded-lg">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex items-center space-x-4">
                <img src="https://i.pinimg.com/564x/f0/9b/0b/f09b0b01235c4302072f600357737b70.jpg" alt="Profile Picture" class="w-24 h-24 rounded-full object-cover border-4 border-white shadow-md">
                <div>
                    <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">{{ __('John Doe') }}</h2>
                    <p class="text-gray-500 dark:text-gray-400">{{ __('@johndoe') }}</p>
                </div>
                <div class="ml-auto">
                    <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition-colors">
                        {{ __('Edit Profile') }}
                    </button>
                </div>
            </div>
            <div class="mt-6 flex justify-around text-center">
                <div class="m-6">
                    <span class="font-bold text-gray-800 dark:text-gray-200">120</span>
                    <span class="text-gray-500 dark:text-gray-400">Posts</span>
                </div>
                <div class="m-6">
                    <span class="font-bold text-gray-800 dark:text-gray-200">350</span>
                    <span class="text-gray-500 dark:text-gray-400">Followers</span>
                </div>
                <div class="m-6">
                    <span class="font-bold text-gray-800 dark:text-gray-200">180</span>
                    <span class="text-gray-500 dark:text-gray-400">Following</span>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="py-12 bg-gray-100 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow-lg rounded-lg transform hover:scale-105 transition-transform">
                <div class="max-w-xl">
                    <livewire:profile.update-profile-information-form />
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow-lg rounded-lg transform hover:scale-105 transition-transform">
                <div class="max-w-xl">
                    <livewire:profile.update-password-form />
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow-lg rounded-lg transform hover:scale-105 transition-transform">
                <div class="max-w-xl">
                    <livewire:profile.delete-user-form />
                </div>
            </div>

            <!-- User Posts Section -->
            <div class="bg-white dark:bg-gray-800 p-6 shadow-lg rounded-lg">
                <h3 class="font-semibold text-lg text-gray-800 dark:text-gray-200 mb-4">{{ __('Your Posts') }}</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                    <!-- Example Post -->
                    <div class="bg-gray-200 dark:bg-gray-700 rounded-lg overflow-hidden shadow-lg">
                        <img src="{{ asset('images/post1.jpg') }}" alt="Post Image" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h4 class="font-semibold text-gray-800 dark:text-gray-200">{{ __('Post Title') }}</h4>
                            <p class="text-gray-600 dark:text-gray-400">{{ __('Post description goes here.') }}</p>
                        </div>
                    </div>
                    <!-- Repeat similar blocks for more posts -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
