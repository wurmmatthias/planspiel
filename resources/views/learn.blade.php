<meta name="csrf-token" content="{{ csrf_token() }}">

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

            <br>
            <br>

<!-- Floating Chatbot Button + Panel -->
<div x-data="{ open: false }" class="fixed bottom-6 right-6 z-50">
    <!-- Toggle Button -->
    <button @click="open = !open"
        class="bg-gradient-to-r from-blue-400 to-green-400 rounded-lg p-6 shadow-lg transform hover:scale-105 transition duration-300">
        <i class="fas fa-robot text-xl"></i>
    </button>

    <!-- Chat Panel -->
    <div x-show="open" @click.away="open = false" x-transition
        class="mt-4 w-80 bg-white dark:bg-gray-800 text-gray-800 dark:text-white rounded-lg shadow-2xl overflow-hidden flex flex-col h-[500px]">
        <div class="bg-gradient-to-r from-blue-400 to-green-400 text-white px-4 py-3 font-bold">
            Lern-Chatbot
        </div>

        <div id="chatlog"
            class="flex-1 overflow-y-auto p-4 space-y-2 text-sm bg-gray-50 dark:bg-gray-900">
            <p class="text-gray-400 text-sm italic">Frag mich etwas zu IT, Management, KPIs usw.</p>
        </div>

        <div class="flex border-t border-gray-200 dark:border-gray-700">
            <input type="text" id="chatInput" placeholder="Deine Frage..."
                class="flex-grow p-2 text-sm border-none focus:outline-none dark:bg-gray-800 dark:text-white" />
            <button onclick="sendChat()"
                class="bg-gradient-to-r from-blue-400 to-green-400 text-white px-4 hover:bg-blue-700 transition">Senden</button>
        </div>
    </div>
</div>



        </div>
    </div>

<script>
    async function sendChat() {
        const input = document.getElementById('chatInput');
        const log = document.getElementById('chatlog');
        const question = input.value.trim();
        if (!question) return;

        const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        // Nutzerfrage anzeigen
        log.innerHTML += `<div><strong>Du:</strong> ${question}</div>`;
        input.value = "";

        try {
            const res = await fetch("/lernchatbot", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": token
                },
                body: JSON.stringify({ question })
            });

            const data = await res.json();
            log.innerHTML += `<div><strong>Bot:</strong> ${data.answer}</div>`;
            log.scrollTop = log.scrollHeight;

        } catch (error) {
            log.innerHTML += `<div class="text-red-600"><strong>Fehler:</strong> ${error.message}</div>`;
        }
    }

        // ENTER-Taste abfangen
    document.getElementById("chatInput").addEventListener("keydown", function (e) {
        if (e.key === "Enter" && !e.shiftKey) {
            e.preventDefault(); // verhindert Zeilenumbruch
            sendChat();
        }
    });
</script>



</x-app-layout>
