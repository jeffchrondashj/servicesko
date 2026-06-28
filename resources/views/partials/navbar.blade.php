<nav x-data="{ open: false }" class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="flex items-center justify-between h-16">

            <!-- Logo -->
            <a href="{{ route('home') }}" class="text-2xl font-bold text-blue-600">
                Services-Ko
            </a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ route('home') }}" class="hover:text-blue-600 transition">
                    Home
                </a>

                <a href="{{ route('services') }}" class="hover:text-blue-600 transition">
                    Services
                </a>

                <a href="{{ route('portfolio') }}" class="hover:text-blue-600 transition">
                    Portfolio
                </a>

                <a href="{{ route('about') }}" class="hover:text-blue-600 transition">
                    About
                </a>

                <a href="{{ route('contact') }}"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg transition">
                    Contact
                </a>
            </div>

            <!-- Mobile Button -->
            <button @click="open = !open"
                class="md:hidden text-gray-700 focus:outline-none">

                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg"
                    class="w-7 h-7" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16"/>
                </svg>

                <svg x-show="open" xmlns="http://www.w3.org/2000/svg"
                    class="w-7 h-7" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2"
                        d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>

        </div>

        <!-- Mobile Menu -->
        <div x-show="open"
            x-transition
            class="md:hidden py-4 space-y-3 border-t">

            <a href="{{ route('home') }}" class="block hover:text-blue-600">
                Home
            </a>

            <a href="{{ route('services') }}" class="block hover:text-blue-600">
                Services
            </a>

            <a href="{{ route('portfolio') }}" class="block hover:text-blue-600">
                Portfolio
            </a>

            <a href="{{ route('about') }}" class="block hover:text-blue-600">
                About
            </a>

            <a href="{{ route('contact') }}"
                class="block bg-blue-600 text-white text-center py-2 rounded-lg hover:bg-blue-700">
                Contact
            </a>

        </div>

    </div>
</nav>
