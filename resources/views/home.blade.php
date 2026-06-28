@extends('layouts.app')

@section('title', 'Home')

@section('content')

<section class="bg-slate-900 text-white py-24">
    <div class="max-w-7xl mx-auto px-6">

        <h1 class="text-5xl font-bold mb-6">
            Professional Website Development
        </h1>

        <p class="text-xl text-gray-300 mb-8">
            We build modern business websites,
            corporate portals, and Laravel web applications.
        </p>

        <a href="/contact"
           class="bg-blue-600 hover:bg-blue-700 px-8 py-4 rounded-lg">
            Get Started
        </a>

    </div>
</section>
<section class="py-20 bg-gray-50">

    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

        <div>
            <img src="{{ asset('images/images1.webp') }}"
                 alt="About Services-Ko"
                 class="rounded-xl shadow-lg">
        </div>

        <div>

            <h2 class="text-4xl font-bold mb-6">
                About Services-Ko
            </h2>

            <p class="text-gray-600 mb-4">
                We create modern, responsive, and SEO-friendly websites
                using Laravel and the latest web technologies.
            </p>

            <p class="text-gray-600">
                Whether you're a startup or an established company,
                we build websites that help your business grow online.
            </p>

        </div>

    </div>

</section>

<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">

        <!-- Section Heading -->
        <div class="text-center mb-14">
            <h2 class="text-4xl font-bold text-gray-900">
                Our Services
            </h2>
            <p class="mt-4 text-lg text-gray-600">
                We build modern, responsive, and SEO-friendly websites that help businesses grow online.
            </p>
        </div>

        <!-- Service Cards -->
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">

            <!-- Card 1 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition">

                <img src="{{ asset('images/services/web-development.webp') }}"
                     alt="Web Development"
                     class="w-full h-56 object-cover">

                <div class="p-6">
                    <h3 class="text-2xl font-semibold mb-3">
                        Web Development
                    </h3>

                    <p class="text-gray-600 mb-6">
                        Custom business websites and web applications built with Laravel.
                    </p>

                    <a href="{{ route('services') }}"
                       class="inline-flex items-center text-blue-600 font-medium hover:text-blue-800">
                        Learn More →
                    </a>
                </div>

            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition">

                <img src="{{ asset('images/services/seo.webp') }}"
                     alt="SEO Optimization"
                     class="w-full h-56 object-cover">

                <div class="p-6">
                    <h3 class="text-2xl font-semibold mb-3">
                        SEO Optimization
                    </h3>

                    <p class="text-gray-600 mb-6">
                        Improve your Google rankings with technical SEO and optimized content.
                    </p>

                    <a href="{{ route('services') }}"
                       class="inline-flex items-center text-blue-600 font-medium hover:text-blue-800">
                        Learn More →
                    </a>
                </div>

            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition">

                <img src="{{ asset('images/services/maintenance.webp') }}"
                     alt="Website Maintenance"
                     class="w-full h-56 object-cover">

                <div class="p-6">
                    <h3 class="text-2xl font-semibold mb-3">
                        Website Maintenance
                    </h3>

                    <p class="text-gray-600 mb-6">
                        Keep your website secure, updated, and running smoothly with ongoing support.
                    </p>

                    <a href="{{ route('services') }}"
                       class="inline-flex items-center text-blue-600 font-medium hover:text-blue-800">
                        Learn More →
                    </a>
                </div>

            </div>

        </div>

    </div>
</section>
@endsection
