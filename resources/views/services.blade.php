
@extends('layouts.app')

@section('title', 'Our Services')

@section('content')

<!-- Hero -->
<section class="bg-gradient-to-r from-blue-600 to-indigo-700 text-white py-20">
    <div class="max-w-7xl mx-auto px-6 text-center">

        <h1 class="text-5xl font-bold mb-6">
            Our Services
        </h1>

        <p class="text-xl max-w-3xl mx-auto text-blue-100">
            We provide modern web development solutions to help your business
            establish a strong online presence and achieve long-term growth.
        </p>

    </div>
</section>

<!-- Services -->
<section class="py-20 bg-gray-50">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">

            <!-- Business Website -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition">

                <img src="{{ asset('images/services/business-website.webp') }}"
                    class="w-full h-56 object-cover"
                    alt="Business Website">

                <div class="p-6">

                    <h3 class="text-2xl font-bold mb-4">
                        Business Website
                    </h3>

                    <p class="text-gray-600">
                        Professional websites designed to build trust and
                        showcase your company's products and services.
                    </p>

                </div>

            </div>

            <!-- Landing Page -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition">

                <img src="{{ asset('images/services/landing-page.webp') }}"
                    class="w-full h-56 object-cover"
                    alt="Landing Page">

                <div class="p-6">

                    <h3 class="text-2xl font-bold mb-4">
                        Landing Pages
                    </h3>

                    <p class="text-gray-600">
                        High-converting landing pages for marketing campaigns,
                        lead generation, and product promotions.
                    </p>

                </div>

            </div>

            <!-- Laravel -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition">

                <img src="{{ asset('images/services/laravel.webp') }}"
                    class="w-full h-56 object-cover"
                    alt="Laravel Development">

                <div class="p-6">

                    <h3 class="text-2xl font-bold mb-4">
                        Laravel Development
                    </h3>

                    <p class="text-gray-600">
                        Custom web applications, admin dashboards,
                        customer portals, and management systems.
                    </p>

                </div>

            </div>

            <!-- E-commerce -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition">

                <img src="{{ asset('images/services/ecommerce.webp') }}"
                    class="w-full h-56 object-cover"
                    alt="E-Commerce">

                <div class="p-6">

                    <h3 class="text-2xl font-bold mb-4">
                        E-Commerce Website
                    </h3>

                    <p class="text-gray-600">
                        Sell products online with secure checkout,
                        inventory management, and payment integration.
                    </p>

                </div>

            </div>

            <!-- SEO -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition">

                <img src="{{ asset('images/services/seo.webp') }}"
                    class="w-full h-56 object-cover"
                    alt="SEO">

                <div class="p-6">

                    <h3 class="text-2xl font-bold mb-4">
                        SEO Optimization
                    </h3>

                    <p class="text-gray-600">
                        Improve your visibility on Google with technical SEO,
                        keyword optimization, and faster websites.
                    </p>

                </div>

            </div>

            <!-- Maintenance -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition">

                <img src="{{ asset('images/services/maintenance.webp') }}"
                    class="w-full h-56 object-cover"
                    alt="Website Maintenance">

                <div class="p-6">

                    <h3 class="text-2xl font-bold mb-4">
                        Website Maintenance
                    </h3>

                    <p class="text-gray-600">
                        Keep your website updated, secure, backed up,
                        and performing at its best.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- Why Choose Us -->
<section class="py-20">

    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-12">

            <h2 class="text-4xl font-bold">
                Why Choose Services-Ko?
            </h2>

        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 text-center">

            <div class="bg-white p-8 rounded-xl shadow">
                <h3 class="font-bold text-xl mb-3">Modern Design</h3>
                <p>Beautiful and professional user interfaces.</p>
            </div>

            <div class="bg-white p-8 rounded-xl shadow">
                <h3 class="font-bold text-xl mb-3">Responsive</h3>
                <p>Looks great on desktop, tablet, and mobile devices.</p>
            </div>

            <div class="bg-white p-8 rounded-xl shadow">
                <h3 class="font-bold text-xl mb-3">SEO Friendly</h3>
                <p>Built with search engine optimization in mind.</p>
            </div>

            <div class="bg-white p-8 rounded-xl shadow">
                <h3 class="font-bold text-xl mb-3">Fast Support</h3>
                <p>Reliable maintenance and technical assistance.</p>
            </div>

        </div>

    </div>

</section>

<!-- CTA -->
<section class="bg-blue-600 py-20">

    <div class="max-w-4xl mx-auto px-6 text-center text-white">

        <h2 class="text-4xl font-bold mb-6">
            Ready to Build Your Next Website?
        </h2>

        <p class="text-lg mb-8">
            Let's discuss your project and create a website that helps your
            business grow.
        </p>

        <a href="{{ route('contact') }}"
            class="inline-block bg-white text-blue-600 font-semibold px-8 py-4 rounded-lg hover:bg-gray-100 transition">
            Get a Free Consultation
        </a>

    </div>

</section>

@endsection

