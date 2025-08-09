<nav class="bg-white border-b border-gray-200 fixed w-full">
    <!-- Primary Navigation Menu -->
    <div class="w-full mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center mr-36">
                    <a href="{{ route('dashboard') }}">
                        <h1 class="text-xl font-bold">NamaApp</h1>
                    </a>
                </div>

                <!-- Hamburger -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <div class="-me-2 flex items-center">
                        <button @click="open = ! open"
                            class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16" />
                                <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div class="flex items-center gap-2">
                                <i class="fa-solid fa-circle-user text-xl"></i>
                                <h5>
                                    {{ Auth::user()->name }}
                                </h5>
                            </div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <h5 class="px-4 py-2 border-b text-center w-3/4 mx-auto border-gray-300">
                            {{ Auth::user()->name }}</h5>

                        <x-dropdown-link :href="route('profile.edit')">
                            <i class="fa-regular fa-circle-user"></i>
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
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
    <div class="w-72 h-screen fixed bg-white border border-gray-200 shadow-md p-8 transition-all ease-in-out"
        :class="{ '-translate-x-72': open, 'translate-x-0': !open }">
        <ul class="">
            <li class="mb-4">
                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="flex gap-2 items-center">
                    <i class="fa-solid fa-table-cells-large"></i>
                    <h5>
                        Dashboard
                    </h5>
                </x-nav-link>
            </li>

            <li x-data="{ dropdownOpen: false }" class="mb-4">
                {{-- Tombol untuk Buka/Tutup Dropdown --}}
                <x-nav-link @click="dropdownOpen = !dropdownOpen"
                    class="w-full flex cursor-pointer justify-between items-center p-2 rounded-md" :active="request()->routeIs('companies.*')">
                    <div class="flex items-center gap-2">
                        <i class="fa-regular fa-building"></i>
                        <span>Perusahaan</span>
                    </div>
                    {{-- Ikon Panah yang akan Berputar --}}
                    <i class="fa-solid fa-chevron-down transition-transform duration-200"
                        :class="{ 'rotate-180': dropdownOpen }"></i>
                </x-nav-link>

                {{-- Submenu yang akan Muncul/Hilang --}}
                <ul x-show="dropdownOpen" x-transition class="mt-2 ml-4 space-y-2">
                    <li>
                        <x-nav-link :href="route('companies.index')" :active="request()->routeIs('companies.index')" class="block">Profil Perusahaan</x-nav-link>
                    </li>
                    <li>
                        <x-nav-link :href="route('companies.leader')" :active="request()->routeIs('companies.leader')" class="block">Pemimpin Perusahaan</x-nav-link>
                    </li>
                    <li>
                        <x-nav-link :href="route('companies.bank')" :active="request()->routeIs('companies.bank')" class="block">Rekening Bank</x-nav-link>
                    </li>
                </ul>
            </li>
            <li x-data="{ dropdownOpen: false }" class="mb-4">
                {{-- Tombol untuk Buka/Tutup Dropdown --}}
                <x-nav-link @click="dropdownOpen = !dropdownOpen"
                    class="w-full flex cursor-pointer justify-between items-center p-2 rounded-md" :active="request()->routeIs('medias.*')">
                    <div class="flex items-center gap-2">
                        <i class="fa-regular fa-newspaper"></i>
                        <span>Media</span>
                    </div>
                    {{-- Ikon Panah yang akan Berputar --}}
                    <i class="fa-solid fa-chevron-down transition-transform duration-200"
                        :class="{ 'rotate-180': dropdownOpen }"></i>
                </x-nav-link>

                {{-- Submenu yang akan Muncul/Hilang --}}
                <ul x-show="dropdownOpen" x-transition class="mt-2 ml-4 space-y-2">
                    <li>
                        <x-nav-link :href="route('medias.index')" :active="request()->routeIs('medias.index')" class="block">Data Media</x-nav-link>
                    </li>
                    <li>
                        <x-nav-link :href="route('medias.add')" :active="request()->routeIs('medias.add')" class="block">Tambah Media</x-nav-link>
                    </li>
                </ul>
            </li>
            <li x-data="{ dropdownOpen: false }" class="mb-4">
                {{-- Tombol untuk Buka/Tutup Dropdown --}}
                <x-nav-link @click="dropdownOpen = !dropdownOpen"
                    class="w-full flex cursor-pointer justify-between items-center p-2 rounded-md" :active="request()->routeIs('reporters.*')">
                    <div class="flex items-center gap-2">
                        <i class="fa-regular fa-id-badge"></i>
                        <span>Wartawan</span>
                    </div>
                    {{-- Ikon Panah yang akan Berputar --}}
                    <i class="fa-solid fa-chevron-down transition-transform duration-200"
                        :class="{ 'rotate-180': dropdownOpen }"></i>
                </x-nav-link>

                {{-- Submenu yang akan Muncul/Hilang --}}
                <ul x-show="dropdownOpen" x-transition class="mt-2 ml-4 space-y-2">
                    <li>
                        <x-nav-link :href="route('reporters.index')" :active="request()->routeIs('reporters.index')" class="block">Data Wartawan</x-nav-link>
                    </li>
                    <li>
                        <x-nav-link :href="route('reporters.add')" :active="request()->routeIs('reporters.add')" class="block">Tambah Wartawan</x-nav-link>
                    </li>

                </ul>
            </li>
            <li class="mb-4">
                <x-nav-link :href="route('news.index')" :active="request()->routeIs('news.*')" class="flex gap-2 items-center">
                    <i class="fa-solid fa-box-archive"></i>
                    <h5>
                        Berita
                    </h5>
                </x-nav-link>
            </li>
        </ul>
    </div>
</nav>
