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
                        <svg class="w-16 h-16 text-white mb-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21h18M9 3v18m6-18v18" />
                        </svg>
                        <span class="text-xl font-bold text-white">Unternehmen</span>
                    </a>

                    <!-- Entscheidungen Button -->
                    <a href="#" class="flex flex-col items-center justify-center p-8 bg-gradient-to-r from-red-400 to-yellow-400 hover:from-red-500 hover:to-yellow-500 rounded-xl shadow-md transition transform hover:scale-105">
                        <!-- Sample Decision Icon SVG -->
                        <svg class="w-16 h-16 text-white mb-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4" />
                        </svg>
                        <span class="text-xl font-bold text-white">Entscheidungen</span>
                    </a>

                    <!-- Benutzerkonten Button -->
                    <a href="#" class="flex flex-col items-center justify-center p-8 bg-gradient-to-r from-purple-400 to-pink-400 hover:from-purple-500 hover:to-pink-500 rounded-xl shadow-md transition transform hover:scale-105">
                        <!-- Sample User Icon SVG -->
                        <svg class="w-16 h-16 text-white mb-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a4 4 0 00-5-3.87M9 20H4v-2a4 4 0 015-3.87m3-12a4 4 0 110 8 4 4 0 010-8zm8 4a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                        <span class="text-xl font-bold text-white">Benutzerkonten</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
