@extends('layouts.app')

@section('title', 'Services')

@section('content')

<section class="page-header">
    <div class="container">
        <h1>Our Services</h1>
        <p>Professional web solutions for businesses of all sizes.</p>
    </div>
</section>

<section class="services">
    <div class="container">

        <div class="service-card">
            <h2>Business Website</h2>
            <p>Modern and responsive websites for companies.</p>
        </div>

        <div class="service-card">
            <h2>Landing Page</h2>
            <p>High-converting landing pages for marketing campaigns.</p>
        </div>

        <div class="service-card">
            <h2>Web Application</h2>
            <p>Custom Laravel applications tailored to your business.</p>
        </div>

        <div class="service-card">
            <h2>E-Commerce</h2>
            <p>Online stores with secure payment integration.</p>
        </div>

    </div>
</section>

@endsection
