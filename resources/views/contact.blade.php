@extends('layouts.app')

@section('title', 'Contact')

@section('content')

<section class="page-header">
    <div class="container">
        <h1>Contact Us</h1>
        <p>Let's discuss your next project.</p>
    </div>
</section>

<section class="contact">
    <div class="container">

        <form>

            <div>
                <label>Name</label>
                <input type="text" placeholder="Enter your name">
            </div>

            <div>
                <label>Email</label>
                <input type="email" placeholder="Enter your email">
            </div>

            <div>
                <label>Subject</label>
                <input type="text" placeholder="Subject">
            </div>

            <div>
                <label>Message</label>
                <textarea rows="6" placeholder="Your message"></textarea>
            </div>

            <button type="submit">
                Send Message
            </button>

        </form>

    </div>
</section>
<form class="max-w-xl mx-auto bg-white shadow-lg rounded-xl p-8">

<input
class="w-full border rounded-lg p-3 mb-4"
type="text"
placeholder="Your Name">

<input
class="w-full border rounded-lg p-3 mb-4"
type="email"
placeholder="Email">

<textarea
class="w-full border rounded-lg p-3 mb-4"
rows="6"
placeholder="Message"></textarea>

<button
class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">
Send Message
</button>

</form>

@endsection
