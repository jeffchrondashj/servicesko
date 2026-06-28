<footer class="bg-slate-900 text-white mt-20">

    <div class="max-w-7xl mx-auto px-6 py-12">

        <div class="grid md:grid-cols-3 gap-10">

            <!-- Company -->
            <div>
                <h2 class="text-2xl font-bold mb-4">
                    Services-Ko
                </h2>

                <p class="text-gray-300">
                    We build modern websites, business systems,
                    and Laravel applications for startups and
                    established companies.
                </p>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-xl font-semibold mb-4">
                    Quick Links
                </h3>

                <ul class="space-y-2">

                    <li>
                        <a href="{{ route('home') }}" class="hover:text-blue-400">
                            Home
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('services') }}" class="hover:text-blue-400">
                            Services
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('portfolio') }}" class="hover:text-blue-400">
                            Portfolio
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('contact') }}" class="hover:text-blue-400">
                            Contact
                        </a>
                    </li>

                </ul>
            </div>

            <!-- Contact -->
            <div>
                <h3 class="text-xl font-semibold mb-4">
                    Contact
                </h3>

                <p>Email: hello@services-ko.com</p>
                <p>Phone: +63 900 000 0000</p>
                <p>Philippines</p>
            </div>

        </div>

        <hr class="border-slate-700 my-8">

        <div class="text-center text-gray-400">
            © {{ date('Y') }} Services-Ko. All Rights Reserved.
        </div>

    </div>

</footer>
