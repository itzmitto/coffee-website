@extends('layouts.app')

@section('content')

    <section class="max-w-[1500px] mx-auto px-6 py-16">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <div class="lg:col-span-2">
                <h1 class="text-5xl font-bold mb-10">Your bag</h1>

                <div class="flex justify-between border-b border-gray-200 pb-8 mb-8">
                    <div class="flex gap-6">
                        <img src="{{ asset('images/beija-flor.png') }}" alt="Beija Flor" class="w-20 h-20 object-contain">
                        <div>
                            <h2 class="font-semibold text-lg">Beija Flor</h2>
                            <p class="text-gray-500">Brazil</p>
                            <p class="mt-2">Qty: 1</p>
                        </div>
                    </div>
                        <span class="font-semibold text-lg">$5.50</span>
                </div>
                <div class="flex justify-between border-b border-gray-200 pb-8">
                    <div class="flex gap-6">
                        <img src="{{ asset('images/el-mirador.png') }}" alt="El Mirador" class="w-20 h-20 object-contain">
                        <div>
                            <h2 class="font-semibold text-lg">El Mirador</h2>
                            <p class="text-gray-500">Colombia</p>
                            <p class="mt-2">Qty: 1</p>
                        </div>
                    </div>
                    <span class="font-semibold text-lg">$7.50</span>
                </div>
            </div>
            <div>
                <div class="bg-gray-100 rounded-3xl p-8">
                    <h2 class="font-bold text-xl mb-8">Summary</h2>
                    <div class="flex justify-between mb-4">
                        <span>Subtotal</span>
                        <span>$13.00</span>
                    </div>
                    <div class="flex justify-between mb-8">
                        <span>Shipping</span>
                        <span>Free</span>
                    </div>
                    <hr class="mb-8">
                    <div class="flex justify-between font-bold text-lg mb-8">
                        <span>Total</span>
                        <span>$13.00</span>
                    </div>
                    <button class="w-full bg-yellow-400 hover:bg-yellow-500 transition rounded-full py-4 font-semibold">Checkout</button>
                </div>
            </div>
        </div>
    </section>
@endsection