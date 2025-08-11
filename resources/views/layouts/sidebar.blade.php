<aside class="bg-gray-900 w-72 h-screen fixed shadow-md p-8 transition-all ease-in-out"
    :class="{ '-translate-x-72': open, 'translate-x-0': !open }">
    {{-- Hamburger --}}
    <div class="lg:hidden">
        <div class="-me-2 flex items-center">
            <button @click="open = ! open"
                class="inline-flex items-center justify-center p-2 rounded-md text-gray-600 hover:text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path class="" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>
    <div class="flex items-center gap-8 justify-center">
        <h1 class="text-2xl font-bold text-center text-[#e0e1dd] mb-8">NamaApp</h1>
    </div>
    <ul x-data="{ openDropdown: '' }" class="">
        <li class="mb-4">
            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="flex gap-2 items-center w-full">
                <i class="fa-solid fa-table-cells-large"></i>
                <h5>
                    Dashboard
                </h5>
            </x-nav-link>
        </li>

        <li class="mb-4">
            {{-- Tombol untuk Buka/Tutup Dropdown --}}
            <x-nav-link @click="openDropdown = (openDropdown === 'perusahaan' ? '' : 'perusahaan')"
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
            <ul x-show="openDropdown === 'perusahaan'" x-transition class="mt-2 ml-4 space-y-2">
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
        <li class="mb-4">
            {{-- Tombol untuk Buka/Tutup Dropdown --}}
            <x-nav-link @click="openDropdown = (openDropdown === 'media' ? '' : 'media')"
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
            <ul x-show="openDropdown === 'media'" x-transition class="mt-2 ml-4 space-y-2">
                <li>
                    <x-nav-link :href="route('medias.index')" :active="request()->routeIs('medias.index')" class="block">Data Media</x-nav-link>
                </li>
                <li>
                    <x-nav-link :href="route('medias.add')" :active="request()->routeIs('medias.add')" class="block">Tambah Media</x-nav-link>
                </li>
            </ul>
        </li>
        <li class="mb-4">
            {{-- Tombol untuk Buka/Tutup Dropdown --}}
            <x-nav-link @click="openDropdown = (openDropdown === 'wartawan' ? '' : 'wartawan')"
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
            <ul x-show="openDropdown === 'wartawan'" x-transition class="mt-2 ml-4 space-y-2">
                <li>
                    <x-nav-link :href="route('reporters.index')" :active="request()->routeIs('reporters.index')" class="block">Data Wartawan</x-nav-link>
                </li>
                <li>
                    <x-nav-link :href="route('reporters.add')" :active="request()->routeIs('reporters.add')" class="block">Tambah Wartawan</x-nav-link>
                </li>

            </ul>
        </li>
        <li class="mb-4">
            <x-nav-link :href="route('news.index')" :active="request()->routeIs('news.*')" class="flex gap-2 items-center w-full">
                <i class="fa-solid fa-box-archive"></i>
                <h5>
                    Berita
                </h5>
            </x-nav-link>
        </li>
    </ul>
</aside>
