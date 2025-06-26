<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Hilfe') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 space-y-10">

<!-- FAQ Section -->
<div class="bg-white dark:bg-gray-800 shadow-2xl rounded-xl p-8" x-data="faqData()">
    <h3 class="text-3xl font-extrabold text-gray-800 dark:text-gray-100 mb-6">
        ❓ Häufig gestellte Fragen
    </h3>

    <div class="space-y-4">
        <template x-for="(item, index) in faqs" :key="index">
            <div class="border border-gray-300 dark:border-gray-700 rounded-lg">
                <button
                    @click="selected === index ? selected = null : selected = index"
                    class="w-full text-left px-4 py-3 text-lg font-semibold text-gray-800 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 flex justify-between items-center"
                >
                    <span x-text="item.question"></span>
                    <svg x-bind:class="selected === index ? 'rotate-180' : ''" class="w-5 h-5 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="selected === index" x-collapse class="px-4 pb-4 text-gray-600 dark:text-gray-300">
                    <p x-text="item.answer"></p>
                </div>
            </div>
        </template>
    </div>
</div>


            <!-- Contact Section -->
            <div class="bg-gradient-to-r from-blue-500 to-green-500 text-white shadow-2xl rounded-xl p-8">
                <h3 class="text-3xl font-extrabold mb-4 flex items-center gap-2">
                    <i class="fas fa-envelope"></i> Kontakt
                </h3>
                <p class="text-lg">
                    Du brauchst weitere Hilfe oder Support?
                    <br>
                    Dann schreib uns jederzeit an
                    <a href="mailto:support@example.com" class="underline font-semibold hover:text-blue-100">support@example.com</a>.
                </p>
            </div>
        </div>
    </div>

    <!-- Alpine.js -->
    <script src="//unpkg.com/alpinejs" defer></script>

    <script>
    function faqData() {
        return {
            selected: null,
            faqs: [
                {
                    question: "Wie erstelle ich ein Unternehmen?",
                    answer: "Um ein Unternehmen zu erstellen, klicke auf 'Unternehmen gründen' in deinem Dashboard und folge den Anweisungen. Du kannst einen Firmennamen, eine Beschreibung und ein Logo auswählen."
                },
                {
                    question: "Wie trete ich einem Unternehmen bei?",
                    answer: "Wenn du aktuell keinem Unternehmen zugeordnet bist, kannst du über die Schaltfläche 'Unternehmen beitreten' in deinem Dashboard einem bestehenden Unternehmen beitreten."
                },
                {
                    question: "Was ist das Unternehmensplanspiel?",
                    answer: "Das Unternehmensplanspiel simuliert die Gründung und Führung eines fiktiven IT-Unternehmens. Du triffst Entscheidungen in Bereichen wie Einkauf, Produktion, Lager, Vertrieb, Personal, Marketing und Finanzen."
                }
            ]
        };
    }
</script>

</x-app-layout>
