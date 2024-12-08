<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <form method="POST" action="{{ route('posts.store') }}">
                    @csrf
                    <label for="title">Title:</label>
                    <input type="text" id="title" name="title" required>
                    <label for="content">Content:</label>
                    <textarea id="content" name="content" required></textarea>
                    <button type="submit">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>



