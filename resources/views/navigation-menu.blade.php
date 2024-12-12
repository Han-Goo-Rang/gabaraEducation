<!-- resources/views/livewire/navigation-menu.blade.php -->
<nav class="flex items-center justify-between py-3 px-6 border-b border-gray-100 sticky top-0 z-50"" wire:ignore>
    <!-- Hamburger + Logo -->
    <div class="flex items-center">
        <button id="hamburger-btn" class="block md:hidden focus:outline-none" aria-label="Toggle navigation">
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>
        <a href="{{ route('home') }}" class="ml-4">
            <x-application-mark />
        </a>
    </div>

    <!-- Main Navigation -->
    <div id="nav-menu"
        class="hidden md:flex items-center space-x-6 flex-col md:flex-row md:space-y-0 space-y-4 absolute md:static top-16 left-0 w-full md:w-auto md:bg-transparent p-6 md:p-0 z-50 shadow-md md:shadow-none">
        <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')" class="text-lg font-semibold">
            {{ __('Home') }}
        </x-nav-link>
        <x-nav-link href="{{ route('posts.index') }}" :active="request()->routeIs('posts.index')" class="text-lg font-semibold">
            {{ __('Mata Pelajaran') }}
        </x-nav-link>
        <x-nav-link href="{{ route('tentangGabara') }}" :active="request()->routeIs('tentangGabara')" class="text-lg font-semibold">
            {{ __('Tentang Gabara') }}
        </x-nav-link>
        <x-nav-link href="{{ route('programKomunitas') }}" :active="request()->routeIs('programKomunitas')" class="text-lg font-semibold">
            {{ __('Program Komunitas') }}
        </x-nav-link>
        <x-nav-link href="{{ route('news.index') }}" :active="request()->routeIs('news.index')" class="text-lg font-semibold">
            {{ __('berita') }}
        </x-nav-link>
        <x-nav-link href="{{ route('testimoni') }}" :active="request()->routeIs('testimoni')" class="text-lg font-semibold">
            {{ __('Testimoni') }}
        </x-nav-link>
        <x-nav-link href="{{ route('kontak') }}" :active="request()->routeIs('kontak')" class="text-lg font-semibold">
            {{ __('Contact') }}
        </x-nav-link>


    </div>

    <!-- User Guest Links for Mobile -->
    <div id="nav-right" class="flex items-center">
        @auth
            @include('layouts.partials.header-right-auth')
        @else
            @include('layouts.partials.header-right-guest')
        @endauth
    </div>
</nav>

<script>
    document.addEventListener("DOMContentLoaded", function () {
    const hamburgerBtn = document.getElementById("hamburger-btn");
    const navMenu = document.getElementById("nav-menu");
    const dropdownBtn = document.getElementById("dropdown-btn"); // Bisa null
    const dropdownMenu = document.getElementById("dropdown-menu"); // Bisa null

    // Toggle Hamburger Menu
    if (hamburgerBtn && navMenu) {
        const toggleMenu = () => {
            navMenu.classList.toggle("hidden");
        };

        // Initial binding of the event listener for hamburger button
        hamburgerBtn.addEventListener("click", toggleMenu);

        // Re-attach event listener after Livewire renders
        Livewire.hook("message.processed", () => {
            hamburgerBtn.removeEventListener("click", toggleMenu);
            hamburgerBtn.addEventListener("click", toggleMenu);
        });
    }

    // Toggle Dropdown Menu
    if (dropdownBtn && dropdownMenu) {
        dropdownBtn.addEventListener("click", (e) => {
            e.stopPropagation();
            dropdownMenu.classList.toggle("hidden");
        });

        // Close dropdown when clicking outside
        document.addEventListener("click", (e) => {
            if (
                !dropdownMenu.contains(e.target) &&
                !dropdownBtn.contains(e.target)
            ) {
                dropdownMenu.classList.add("hidden");
            }
        });
    }
});
</script>


