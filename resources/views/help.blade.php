<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Hilfe') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 space-y-8">
            <!-- FAQ Section -->
            <div class="bg-white dark:bg-gray-800 shadow-xl rounded-lg p-8">
                <h3 class="text-3xl font-bold text-gray-800 dark:text-gray-200 mb-6">Häufig gestellte Fragen</h3>
                <div class="space-y-6">
                    <!-- FAQ Entry 1 -->
                    <div>
                        <h4 class="text-xl font-semibold text-gray-800 dark:text-gray-200">Wie erstelle ich ein Unternehmen?</h4>
                        <p class="mt-2 text-gray-600 dark:text-gray-300">
                            Um ein Unternehmen zu erstellen, klicke auf "Unternehmen gründen" in deinem Dashboard und folge den Anweisungen. Du kannst einen Firmennamen, eine Beschreibung und ein Logo auswählen.
                        </p>
                    </div>
                    <!-- FAQ Entry 2 -->
                    <div>
                        <h4 class="text-xl font-semibold text-gray-800 dark:text-gray-200">Wie trete ich einem Unternehmen bei?</h4>
                        <p class="mt-2 text-gray-600 dark:text-gray-300">
                            Wenn du aktuell keinem Unternehmen zugeordnet bist, kannst du über die Schaltfläche "Unternehmen beitreten" in deinem Dashboard einem bestehenden Unternehmen beitreten.
                        </p>
                    </div>
                    <!-- FAQ Entry 3 -->
                    <div>
                        <h4 class="text-xl font-semibold text-gray-800 dark:text-gray-200">Was ist das Unternehmensplanspiel?</h4>
                        <p class="mt-2 text-gray-600 dark:text-gray-300">
                            Das Unternehmensplanspiel simuliert die Gründung und Führung eines fiktiven IT-Unternehmens. Du triffst Entscheidungen in Bereichen wie Einkauf, Produktion, Lager, Vertrieb, Personal, Marketing und Finanzen.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Contact Section -->
            <div class="bg-white dark:bg-gray-800 shadow-xl rounded-lg p-8">
                <h3 class="text-3xl font-bold text-gray-800 dark:text-gray-200 mb-6">Kontakt</h3>
                <p class="text-gray-600 dark:text-gray-300">
                    Falls du weitere Fragen hast oder Unterstützung benötigst, wende dich bitte an unseren Support: 
                    <a href="mailto:support@example.com" class="text-blue-500 dark:text-blue-400 underline">support@example.com</a>.
                </p>
            </div>
        </div>
    </div>
</x-app-layout>
