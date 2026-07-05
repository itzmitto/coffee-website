@extends('layouts.app')
@section('content')
    <section class="max-w-4xl mx-auto px-6 py-28">
        <div class="flex flex-col items-center text-center">
            <div class="w-20 h-20 rounded-full bg-yellow-400 flex items-center justify-center mb-8">
                <i class="fa-solid fa-check text-4xl text-black"></i>
            </div>
            <h1 class="text-5xl font-bold text-gray-900 mb-4">Thanks for your order</h1>
            <p class="text-gray-500 text-lg max-w-lg leading-relaxed mb-10">We're roasting your beans now. You'll get a
                shipping email within 24 hours.</p>
            <a href="/listings" class="bg-yellow-400 hover:bg-yellow-500 transition px-10 py-4 rounded-full font-semibold">
                Continue shopping</a>
        </div>
    </section>
@endsection