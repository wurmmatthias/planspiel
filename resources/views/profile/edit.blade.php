<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Kontoinformationen') }}
        </h2>
    </x-slot>

        <!-- Hero Header -->
        <div class="py-8 bg-gradient-to-r from-green-600 to-green-800">
        <div class="max-w-7xl mx-auto text-center">
            <h1 class="text-4xl font-bold text-white">Dein Konto verwalten</h1>
            <p class="mt-2 text-lg text-white opacity-90">
                Aktualisiere deine persönlichen Daten, dein Passwort und mehr.
            </p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="py-12 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto space-y-8 sm:px-6 lg:px-8">
            <!-- Profile Information Update Card -->
            <div class="bg-white dark:bg-gray-800 shadow-2xl rounded-lg p-8">
                <h3 class="text-2xl font-bold text-gray-800 dark:text-gray-200 mb-4">
                    Kontoinformationen
                </h3>
                <div class="max-w-xl mx-auto">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <!-- Password Update Card -->
            <div class="bg-white dark:bg-gray-800 shadow-2xl rounded-lg p-8">
                <h3 class="text-2xl font-bold text-gray-800 dark:text-gray-200 mb-4">
                    Passwort aktualisieren
                </h3>
                <div class="max-w-xl mx-auto">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <!-- Account Deletion Card -->
            <div class="bg-white dark:bg-gray-800 shadow-2xl rounded-lg p-8">
                <h3 class="text-2xl font-bold text-gray-800 dark:text-gray-200 mb-4">
                    Account löschen
                </h3>
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</x-app-layout>
