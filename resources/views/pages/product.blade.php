@extends('layouts.app')
@section('content')
    <section class="max-w-[1500px] mx-auto px-6 py-16">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
            <div class="bg-gray-50 rounded-3xl p-12">
                <img src="{{ asset('images/beija-flor.png') }}" alt="Beija Flor" class="w-full object-contain">
            </div>
            <div>
                <p class="uppercase tracking-wide text-gray-500 text-sm mb-2">Brazil</p>
                <h1 class="text-5xl font-bold mb-3">Beija Flor</h1>
                <p class="text-3xl font-semibold mb-10">$5.50</p>
                <div class="border-b border-gray-200 py-4 flex justify-between">
                    <span class="font-semibold">Tasting Notes</span>
                    <span class="text-gray-500">Hazelnut, Grape, Milk Chocolate</span>
                </div>
                <div class="border-b border-gray-200 py-4 flex justify-between">
                    <span class="font-semibold">Process</span>
                    <span class="text-gray-500">Pulped Natural</span>
                </div>
                <div class="border-b border-gray-200 py-4 flex justify-between">
                    <span class="font-semibold">Variety</span>
                    <span class="text-gray-500">Yellow Bourbon, Red Catuai</span>
                </div>
                <div class="flex gap-4 mt-10">
                    <a href="/bag"
                        class="bg-yellow-400 hover:bg-yellow-500 transition px-8 py-3 rounded-full font-semibold">
                        Add to bag</a>
                    <a href="/listings"
                        class="border border-gray-300 hover:bg-gray-100 transition px-8 py-3 rounded-full font-semibold">
                        Back to listings</a>
                </div>
            </div>
        </div>
    </section>
@endsection