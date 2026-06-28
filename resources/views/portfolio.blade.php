@extends('layouts.app')

@section('title', 'Portfolio')

@section('content')

<section class="page-header">
    <div class="container">
        <h1>Our Portfolio</h1>
        <p>Projects we've successfully delivered.</p>
    </div>
</section>

<section class="portfolio">
    <div class="container">

        <div class="project">
            <h2>Corporate Website</h2>
            <p>Professional company website.</p>
        </div>

        <div class="project">
            <h2>School Management System</h2>
            <p>Laravel-based information system.</p>
        </div>

        <div class="project">
            <h2>Gym Management System</h2>
            <p>Membership and attendance management.</p>
        </div>

    </div>
</section>

@endsection
