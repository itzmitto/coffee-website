@extends('layouts.app')
@section('content')
<section class="max-w-7xl mx-auto px-6 py-16 animate-fade-up-delay-1">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-start">
        <div class="bg-gray-50 rounded-3xl p-10 flex justify-center">
            <img
                src="{{ asset('images/beija-flor.png') }}"
                alt="Beija Flor Coffee"
                class="w-[320px] object-contain">
        </div>
        <div>
            <p class="uppercase tracking-widest text-sm text-gray-400 font-medium mb-2">Brazil</p>
            <h1 class="text-5xl font-bold text-gray-900 mb-4">Beija Flor</h1>
            <p class="text-3xl font-semibold mb-10">$5.50</p>
            <div class="space-y-5">
                <div class="flex justify-between border-b pb-4">
                    <span class="font-semibold text-gray-900">Tasting Notes</span>
                    <span class="text-gray-500">Hazelnut, Grape, Milk Chocolate</span>
                </div>
                <div class="flex justify-between border-b pb-4">
                    <span class="font-semibold text-gray-900">Process</span>
                    <span class="text-gray-500">Pulped Natural</span>
                </div>
                <div class="flex justify-between border-b pb-4">
                    <span class="font-semibold text-gray-900">Variety</span>
                    <span class="text-gray-500">Yellow Bourbon, Red Catuai</span>
                </div>
            </div>
            <div class="flex gap-4 mt-12">
                <a href="/bag" class="bg-yellow-400 hover:bg-yellow-500 transition px-8 py-4 rounded-full font-semibold">Add to bag</a>
                <a href="/listings"
                   class="border border-gray-300 hover:bg-gray-100 transition px-8 py-4 rounded-full font-semibold">Back to listings</a>
            </div>
        </div>
    </div>
</section>
@endsection