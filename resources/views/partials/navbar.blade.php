<nav class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex items-center justify-between h-16">

            <!-- Logo -->
            <a href="{{ route('home') }}" class="text-2xl font-bold text-blue-600">
                Services-Ko
            </a>

            <!-- Navigation -->
            <ul class="hidden md:flex items-center gap-8 font-medium">

                <li>
                    <a href="{{ route('home') }}"
                       class="hover:text-blue-600 transition">
                        Home
                    </a>
                </li>

                <li>
                    <a href="{{ route('services') }}"
                       class="hover:text-blue-600 transition">
                        Services
                    </a>
                </li>

                <li>
                    <a href="{{ route('portfolio') }}"
                       class="hover:text-blue-600 transition">
                        Portfolio
                    </a>
                </li>

                <li>
                    <a href="{{ route('about') }}"
                       class="hover:text-blue-600 transition">
                        About
                    </a>
                </li>

                <li>
                    <a href="{{ route('contact') }}"
                       class="bg-blue-600 hover:bg-blue-65s0 text-white px-5 py-2 rounded-lg transition">
                        Contact
                    </a>
                </li>

            </ul>

        </div>
    </div>
</nav>
