<x-guest-layout>
  <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-green-600 to-green-900">
    <div class="w-full max-w-md p-8 bg-white dark:bg-gray-800 rounded-xl shadow-2xl">
      <!-- Logo & Title -->
      <div class="text-center mb-6">
        <!-- SIT Strategy Lab Logo (replace with your actual logo SVG if needed) -->
        <div class="mx-auto mb-4">
          <svg width="50px" height="50px" viewBox="0 -0.5 1025 1025" class="mx-auto" xmlns="http://www.w3.org/2000/svg">
            <path d="M447.427363 576.572637m-431.447814 0a431.447814 431.447814 0 1 0 862.895628 0 431.447814 431.447814 0 1 0-862.895628 0Z" fill="#FFFFFF"/>
            <path d="M447.427363 1024c-246.884027 0-447.427363-200.543336-447.427363-447.427363s200.543336-447.427363 447.427363-447.427363 447.427363 200.543336 447.427363 447.427363-200.543336 447.427363-447.427363 447.427363z m0-862.895628c-229.306523 0-415.468266 186.161742-415.468266 415.468265s186.161742 415.468266 415.468266 415.468266 415.468266-186.161742 415.468265-415.468266-186.161742-415.468266-415.468265-415.468265z" fill="#191919"/>
            <path d="M447.427363 576.572637m-324.384838 0a324.384838 324.384838 0 1 0 648.769676 0 324.384838 324.384838 0 1 0-648.769676 0Z" fill="#A0E8AF"/>
            <path d="M447.427363 917.736001c-187.759697 0-340.364387-152.60469-340.364387-340.364386S259.667666 237.007228 447.427363 237.007228s340.364387 152.60469 340.364387 340.364387-152.60469 340.364387-340.364387 340.364386z m0-649.568653c-170.182193 0-308.405289 138.223096-308.40529 308.405289s138.223096 308.405289 308.40529 308.40529 308.405289-138.223096 308.405289-308.40529S617.609556 268.167348 447.427363 268.167348z" fill="#191919"/>
            <path d="M447.427363 576.572637m-101.470134 0a101.470134 101.470134 0 1 0 202.940268 0 101.470134 101.470134 0 1 0-202.940268 0Z" fill="#A0E8AF"/>
          </svg>
        </div>
        <h1 class="text-3xl md:text-4xl font-bold text-gray-800 dark:text-gray-200">
          SIT Strategy Lab
        </h1>
        <p class="mt-2 text-lg text-gray-600 dark:text-gray-400">
          Melde dich an, um fortzufahren.
        </p>
      </div>

      <!-- Session Status -->
      <x-auth-session-status class="mb-4" :status="session('status')" />

      <!-- Login Form -->
      <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email -->
        <div class="mb-4">
          <x-input-label for="email" :value="__('Email')" />
          <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
          <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mb-4">
          <x-input-label for="password" :value="__('Password')" />
          <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
          <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="flex items-center mb-4">
          <label for="remember_me" class="inline-flex items-center">
            <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
            <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
          </label>
        </div>

        <div class="flex items-center justify-between">
          @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
              {{ __('Forgot your password?') }}
            </a>
          @endif
          <x-primary-button class="ml-3">
            {{ __('Log in') }}
          </x-primary-button>
        </div>
      </form>
    </div>
  </div>
</x-guest-layout>
