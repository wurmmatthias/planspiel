<!-- resources/views/admin/dashboard.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            Admin Area
        </h2>
    </x-slot>

    <!-- Hero Section -->
    <div class="py-12 bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 dark:from-indigo-800 dark:via-purple-800 dark:to-pink-800">
        <div class="max-w-3xl mx-auto text-center">
            <h1 class="text-5xl font-bold text-white">Willkommen im Admin-Bereich</h1>
            <p class="mt-4 text-xl text-white opacity-90">
                Verwalten Sie Ihr System – wählen Sie einen der folgenden Bereiche.
            </p>
        </div>
    </div>

    <!-- Admin Navigation Buttons -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow-2xl rounded-xl p-10">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Unternehmen Button -->
                    <a href="{{ route('admin.companies') }}" class="flex flex-col items-center justify-center p-8 bg-gradient-to-r from-blue-400 to-green-400 hover:from-blue-500 hover:to-green-500 rounded-xl shadow-md transition transform hover:scale-105">
                        <!-- Sample Building Icon SVG -->
                        <div class="text-4xl mb-4 text-white">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <span class="text-xl font-bold text-white">Unternehmen</span>
                    </a>

                    <!-- Entscheidungen Button -->
                    <a href="#" class="flex flex-col items-center justify-center p-8 bg-gradient-to-r from-red-400 to-yellow-400 hover:from-red-500 hover:to-yellow-500 rounded-xl shadow-md transition transform hover:scale-105">
                        <!-- Sample Decision Icon SVG -->
                        <div class="text-4xl mb-4 text-white">
                            <i class="fas fa-thumbs-up"></i>
                        </div>
                        <span class="text-xl font-bold text-white">Entscheidungen</span>
                    </a>

                    <!-- Benutzerkonten Button -->
                    <a href="#" class="flex flex-col items-center justify-center p-8 bg-gradient-to-r from-purple-400 to-pink-400 hover:from-purple-500 hover:to-pink-500 rounded-xl shadow-md transition transform hover:scale-105">
                        <!-- Sample User Icon SVG -->
                        <div class="text-4xl mb-4 text-white">
                            <i class="fas fa-users"></i>
                        </div>
                        <span class="text-xl font-bold text-white">Benutzerkonten</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
