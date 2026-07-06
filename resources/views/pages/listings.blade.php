@extends('layouts.app')
@section('content')
<section class="max-w-[1500px] mx-auto px-6 py-16 animate-fade-up-delay-1">
    <div class="mb-12">
        <h1 class="text-5xl font-bold text-gray-900">All coffees</h1>
        <p class="text-gray-500 mt-3">Every bean we're roasting this season.</p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
        <a href="/product/beija-flor" class="group">
            <div class="bg-gray-50 rounded-2xl p-8">
                <img
                    src="{{ asset('images/beija-flor.png') }}"
                    alt="Beija Flor"
                    class="w-full transition duration-300 group-hover:scale-105">
            </div>
            <div class="flex justify-between mt-5">
                <div>
                    <h2 class="font-semibold text-lg">Beija Flor</h2>
                    <p class="text-gray-500">Brazil</p>
                </div>
                <span class="font-bold">$5.50</span>
            </div>
        </a>

        <a href="/product/el-mirador" class="group">

            <div class="bg-gray-50 rounded-2xl p-8">
                <img
                    src="{{ asset('images/el-mirador.png') }}"
                    alt="El Mirador"
                    class="w-full transition duration-300 group-hover:scale-105">
            </div>

            <div class="flex justify-between mt-5">
                <div>
                    <h2 class="font-semibold text-lg">El Mirador</h2>
                    <p class="text-gray-500">Colombia</p>
                </div>
                <span class="font-bold">$7.50</span>
            </div>
        </a>
        <a href="/product/pedra-branca" class="group">

            <div class="bg-gray-50 rounded-2xl p-8">
                <img
                    src="{{ asset('images/pedra-branca.png') }}"
                    alt="Pedra Branca"
                    class="w-full transition duration-300 group-hover:scale-105">
            </div>
            <div class="flex justify-between mt-5">
                <div>
                    <h2 class="font-semibold text-lg">Pedra Branca</h2>
                    <p class="text-gray-500">Brazil</p>
                </div>
                <span class="font-bold">$4.10</span>
            </div>
        </a>
    </div>
</section>
@endsection