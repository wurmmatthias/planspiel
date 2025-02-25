<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}" class="flex items-center">
                        <!-- SVG Logo (customize this SVG as needed) -->
                        <svg width="50px" height="50px" viewBox="0 -0.5 1025 1025" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg">
                            <path d="M447.427363 576.572637m-431.447814 0a431.447814 431.447814 0 1 0 862.895628 0 431.447814 431.447814 0 1 0-862.895628 0Z" fill="#FFFFFF"/>
                            <path d="M447.427363 1024c-246.884027 0-447.427363-200.543336-447.427363-447.427363s200.543336-447.427363 447.427363-447.427363 447.427363 200.543336 447.427363 447.427363-200.543336 447.427363-447.427363 447.427363z m0-862.895628c-229.306523 0-415.468266 186.161742-415.468266 415.468265s186.161742 415.468266 415.468266 415.468266 415.468266-186.161742 415.468265-415.468266-186.161742-415.468266-415.468265-415.468265z" fill="#191919"/>
                            <path d="M447.427363 576.572637m-324.384838 0a324.384838 324.384838 0 1 0 648.769676 0 324.384838 324.384838 0 1 0-648.769676 0Z" fill="#A0E8AF"/>
                            <path d="M447.427363 917.736001c-187.759697 0-340.364387-152.60469-340.364387-340.364386S259.667666 237.007228 447.427363 237.007228s340.364387 152.60469 340.364387 340.364387-152.60469 340.364387-340.364387 340.364386z m0-649.568653c-170.182193 0-308.405289 138.223096-308.40529 308.405289s138.223096 308.405289 308.40529 308.40529 308.405289-138.223096 308.405289-308.40529S617.609556 268.167348 447.427363 268.167348z" fill="#191919"/>
                            <path d="M447.427363 576.572637m-208.53311 0a208.53311 208.53311 0 1 0 417.06622 0 208.53311 208.53311 0 1 0-417.06622 0Z" fill="#FFFFFF"/>
                            <path d="M447.427363 801.884273c-123.841502 0-224.512659-100.671157-224.512659-224.512658S323.585861 352.059978 447.427363 352.059978s224.512659 100.671157 224.512659 224.512659-100.671157 225.311636-224.512659 225.311636zM447.427363 384.019076c-106.263999 0-192.553562 86.289563-192.553562 192.553561S341.163364 769.126199 447.427363 769.126199s192.553562-86.289563 192.553561-192.553562S553.691362 384.019076 447.427363 384.019076z" fill="#191919"/>
                            <path d="M447.427363 576.572637m-101.470134 0a101.470134 101.470134 0 1 0 202.940268 0 101.470134 101.470134 0 1 0-202.940268 0Z" fill="#A0E8AF"/>
                            <path d="M447.427363 694.02232c-64.717172 0-117.449683-52.732511-117.449683-117.449683S382.710191 459.122954 447.427363 459.122954 564.877046 511.855465 564.877046 576.572637c0 65.51615-52.732511 117.449683-117.449683 117.449683z m0-202.141291c-47.139669 0-85.490585 38.350917-85.490586 85.490586S400.287694 662.063223 447.427363 662.063223 532.917948 623.712306 532.917948 576.572637 494.567031 491.881029 447.427363 491.881029z" fill="#191919"/>
                            <path d="M1008.309521 114.76368L878.875177 243.399047l-100.671157 2.396933 2.396933-100.671157L910.035297 16.489456l-3.994887 102.269112z" fill="#C2CDDC"/>
                            <path d="M779.002998 261.775528c-3.994887 0-7.989774-1.597955-11.185684-4.793864-3.19591-3.19591-4.793865-7.190797-4.793865-11.984662l2.396933-100.671157c0-3.994887 1.597955-7.989774 4.793864-11.185684L899.64859 4.504795c4.793865-4.793865 11.984662-5.592842 17.577504-3.19591 6.391819 2.396932 9.587729 8.788752 9.587729 15.180571l-3.19591 84.691608 84.691608-3.19591c6.391819 0 12.783639 3.19591 15.180572 9.58773s1.597955 12.783639-3.19591 17.577503l-129.434344 128.635367c-3.19591 3.19591-7.190797 4.793865-11.185684 4.793864l-100.671157 3.19591zM796.580501 152.31562l-1.597954 77.500811 77.500811-1.597955 95.877292-95.877292-61.521263 2.396932c-4.793865 0-8.788752-1.597955-11.984661-4.793864s-4.793865-7.190797-4.793865-11.984662l2.396932-61.521262-95.877292 95.877292z" fill="#191919"/>
                            <path d="M455.417137 580.567524c-3.994887 0-7.989774-1.597955-11.185684-4.793864-6.391819-6.391819-6.391819-15.979549 0-22.371368l525.727152-525.727152c6.391819-6.391819 15.979549-6.391819 22.371368 0s6.391819 15.979549 0 22.371368L466.602821 575.77366c-3.19591 3.19591-7.190797 4.793865-11.185684 4.793864z" fill="#191919"/>
                            <path d="M942.793372 188.269604h-95.078315c-8.788752 0-15.979549-7.190797-15.979548-15.979548V78.809696c0-8.788752 7.190797-15.979549 15.979548-15.979549s15.979549 7.190797 15.979549 15.979549v77.500811h79.098766c8.788752 0 15.979549 7.190797 15.979548 15.979549s-7.190797 15.979549-15.979548 15.979548z" fill="#191919"/>
                        </svg>

                        <!-- Text Logo -->
                        <span class="ml-2 text-lg font-bold text-gray-800 dark:text-gray-200">SIT Strategy Lab</span>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    <x-nav-link :href="route('reports')" :active="request()->routeIs('reports')">
                        {{ __('Ergebnisse') }}
                    </x-nav-link>
                    <x-nav-link :href="route('learn')" :active="request()->routeIs('learn')">
                        {{ __('Lernmaterialien') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                    @if(Auth::user()->role === 'admin')
                        <x-dropdown-link :href="route('admin.dashboard')" :active="request()->routeIs('admin.dashboard')">
                            {{ __('Admin Area') }}
                        </x-dropdown-link>
                    @endif
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Kontoinformationen') }}
                        </x-dropdown-link>

                        <x-dropdown-link :href="route('help')">
                            {{ __('Hilfe') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Abmelden') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('reports')" :active="request()->routeIs('reports')">
                {{ __('Ergebnisse') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('learn')" :active="request()->routeIs('learn')">
                {{ __('Lernmaterialien') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
