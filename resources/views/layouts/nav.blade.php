<nav class=" w-full p-8 flex justify-between items-center">
    {{-- Hamburger --}}
    <div class="space-x-8 sm:flex">
        <div class="-me-2 flex items-center">
            <button @click="open = ! open"
                class="inline-flex items-center justify-center p-2 rounded-md text-gray-600 hover:text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path class="inline-flex" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </div>

    {{-- Dropdown Profile --}}
    <div class="sm:flex sm:items-center sm:ms-6">
        <x-dropdown align="right">
            <x-slot name="trigger">
                <button
                    class="inline-flex items-center px-3 py-2 border border-transparent leading-4 font-medium rounded-md text-indigo-950 hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                    <div class="flex items-center gap-2">
                        <i class="fa-solid fa-circle-user text-xl"></i>
                        <h5>
                            {{ Auth::user()->name }}
                        </h5>
                    </div>

                    <div class="ms-1">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                </button>
            </x-slot>

            <x-slot name="content">
                <div class="py-2 border-b text-center w-full mx-auto border-gray-300">
                    <h5 class="text-xl">{{ Auth::user()->name }}</h5>
                    <h5 class="text-sm text-gray-500">{{ Auth::user()->email }}</h5>
                </div>

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
</nav>
