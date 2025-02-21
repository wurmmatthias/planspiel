<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ ucfirst(str_replace('-', ' ', $slug)) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow-xl rounded-lg p-8">
                <p class="text-lg text-gray-800 dark:text-gray-200">
                    Hier finden Sie Lernmaterialien zum Thema <strong>{{ ucfirst(str_replace('-', ' ', $slug)) }}</strong>.
                </p>
                <!-- Add further content for the topic -->
            </div>
        </div>
    </div>
</x-app-layout>
