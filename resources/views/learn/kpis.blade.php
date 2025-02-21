<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            KPIs – Erklärung
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Hero Section -->
            <div class="bg-gradient-to-r from-blue-400 via-indigo-400 to-purple-400 dark:from-blue-600 dark:via-indigo-600 dark:to-purple-600 shadow-xl rounded-lg p-8 mb-8 text-center">
                <h1 class="text-4xl font-bold text-white">KPIs erklärt</h1>
                <p class="mt-4 text-lg text-white opacity-90">
                    Erfahren Sie, was die wichtigsten Kennzahlen bedeuten und wie sie die Unternehmensleistung widerspiegeln.
                </p>
            </div>

            <!-- KPI Explanation Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card 1: Umsatz -->
                <div class="bg-white dark:bg-gray-700 shadow-md rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-200">Umsatz</h3>
                    <p class="mt-2 text-gray-700 dark:text-gray-300">
                        Der Umsatz gibt den Gesamtwert aller Verkäufe an und zeigt, wie effektiv das Unternehmen Einnahmen generiert.
                    </p>
                </div>
                <!-- Card 2: Gewinn -->
                <div class="bg-white dark:bg-gray-700 shadow-md rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-200">Gewinn</h3>
                    <p class="mt-2 text-gray-700 dark:text-gray-300">
                        Der Gewinn ist der verbleibende Betrag nach Abzug aller Kosten und Ausgaben vom Umsatz und misst die Rentabilität.
                    </p>
                </div>
                <!-- Card 3: Cashflow -->
                <div class="bg-white dark:bg-gray-700 shadow-md rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-200">Cashflow</h3>
                    <p class="mt-2 text-gray-700 dark:text-gray-300">
                        Der Cashflow zeigt den Nettozufluss liquider Mittel an und ist entscheidend für die finanzielle Stabilität des Unternehmens.
                    </p>
                </div>
                <!-- Card 4: Neue Kunden -->
                <div class="bg-white dark:bg-gray-700 shadow-md rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-200">Neue Kunden</h3>
                    <p class="mt-2 text-gray-700 dark:text-gray-300">
                        Diese Kennzahl misst, wie viele neue Kunden gewonnen wurden und dient als Indikator für das Wachstumspotenzial.
                    </p>
                </div>
                <!-- Card 5: Marktanteil -->
                <div class="bg-white dark:bg-gray-700 shadow-md rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-200">Marktanteil</h3>
                    <p class="mt-2 text-gray-700 dark:text-gray-300">
                        Der Marktanteil zeigt den prozentualen Anteil des Unternehmens am Gesamtmarkt und gibt Auskunft über die Wettbewerbsposition.
                    </p>
                </div>
                <!-- Card 6: ROI -->
                <div class="bg-white dark:bg-gray-700 shadow-md rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-200">ROI</h3>
                    <p class="mt-2 text-gray-700 dark:text-gray-300">
                        Der Return on Investment (ROI) misst die Effizienz und Rentabilität der getätigten Investitionen im Unternehmen.
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
