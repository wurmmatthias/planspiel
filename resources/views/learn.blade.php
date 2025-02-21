<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Lernmaterialien') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Main Title / Intro (optional) -->
            <div class="mb-8 text-center">
                <h1 class="text-4xl font-bold text-gray-800 dark:text-gray-200">Lernmaterialien</h1>
                <p class="mt-4 text-lg text-gray-600 dark:text-gray-400">
                    Wähle ein Thema, um tiefer in die Materie einzutauchen.
                </p>
            </div>
            <!-- Cards for Topics -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card 1: IT Management -->
                <a href="{{ route('learn.topic', ['slug' => 'it-management']) }}" class="block">
                    <div class="bg-gradient-to-r from-blue-400 to-green-400 rounded-lg p-6 shadow-lg transform hover:scale-105 transition duration-300">
                        <div class="text-4xl mb-4 text-white">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3 class="text-xl font-bold text-white">IT Management</h3>
                    </div>
                </a>
                <!-- Card 2: Digitale Transformation -->
                <a href="{{ route('learn.topic', ['slug' => 'marketing']) }}" class="block">
                    <div class="bg-gradient-to-r from-purple-400 to-pink-400 rounded-lg p-6 shadow-lg transform hover:scale-105 transition duration-300">
                        <div class="text-4xl mb-4 text-white">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <h3 class="text-xl font-bold text-white">Marketing</h3>
                    </div>
                </a>
                <!-- Card 3: Cybersecurity -->
                <a href="{{ route('learn.topic', ['slug' => 'unternehmensformen']) }}" class="block">
                    <div class="bg-gradient-to-r from-red-400 to-yellow-400 rounded-lg p-6 shadow-lg transform hover:scale-105 transition duration-300">
                        <div class="text-4xl mb-4 text-white">
                            <i class="fas fa-flag"></i>
                        </div>
                        <h3 class="text-xl font-bold text-white">Unternehmsformen</h3>
                    </div>
                </a>
                <!-- Card 4-->
                <a href="{{ route('learn.topic', ['slug' => 'kpis']) }}" class="block">
                    <div class="bg-gradient-to-r from-blue-400 to-green-400 rounded-lg p-6 shadow-lg transform hover:scale-105 transition duration-300">
                        <div class="text-4xl mb-4 text-white">
                            <i class="fas fa-signal"></i>
                        </div>
                        <h3 class="text-xl font-bold text-white">Key Performance Indikatoren</h3>
                    </div>
                </a>
                <!-- Card 5-->
                <a href="{{ route('learn.topic', ['slug' => 'geschaeftsmodelle']) }}" class="block">
                    <div class="bg-gradient-to-r from-purple-400 to-pink-400 rounded-lg p-6 shadow-lg transform hover:scale-105 transition duration-300">
                        <div class="text-4xl mb-4 text-white">
                            <i class="fas fa-microchip"></i>
                        </div>
                        <h3 class="text-xl font-bold text-white">Geschäftsmodelle</h3>
                    </div>
                </a>
                <!-- Card 6-->
                <a href="{{ route('learn.topic', ['slug' => 'finanzierung']) }}" class="block">
                    <div class="bg-gradient-to-r from-red-400 to-yellow-400 rounded-lg p-6 shadow-lg transform hover:scale-105 transition duration-300">
                        <div class="text-4xl mb-4 text-white">
                            <i class="fas fa-credit-card"></i>
                        </div>
                        <h3 class="text-xl font-bold text-white">Finanzierungsmethoden</h3>
                    </div>
                </a>
                <!-- Card 7 -->
                <a href="{{ route('learn.topic', ['slug' => 'kostenplanung']) }}" class="block">
                    <div class="bg-gradient-to-r from-blue-400 to-green-400 rounded-lg p-6 shadow-lg transform hover:scale-105 transition duration-300">
                        <div class="text-4xl mb-4 text-white">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                        <h3 class="text-xl font-bold text-white">Kostenplanung</h3>
                    </div>
                </a>
                <!-- Card 8 -->
                <a href="{{ route('learn.topic', ['slug' => 'risikomanagement']) }}" class="block">
                    <div class="bg-gradient-to-r from-purple-400 to-pink-400 rounded-lg p-6 shadow-lg transform hover:scale-105 transition duration-300">
                        <div class="text-4xl mb-4 text-white">
                            <i class="fas fa-battery-empty"></i>
                        </div>
                        <h3 class="text-xl font-bold text-white">Risikomanagement</h3>
                    </div>
                </a>
                <!-- Card 9 -->
                <a href="{{ route('learn.topic', ['slug' => 'einkauf']) }}" class="block">
                    <div class="bg-gradient-to-r from-red-400 to-yellow-400 rounded-lg p-6 shadow-lg transform hover:scale-105 transition duration-300">
                        <div class="text-4xl mb-4 text-white">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <h3 class="text-xl font-bold text-white">Einkaufsstrategien</h3>
                    </div>
                </a>
                <!-- Additional cards can be added here -->
            </div>
        </div>
    </div>
</x-app-layout>
