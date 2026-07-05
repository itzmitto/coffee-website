@extends('layouts.app')
@section('content')
    <section class="max-w-3xl mx-auto px-6 py-16">
        <h1 class="text-5xl font-bold mb-12">Checkout</h1>
        <form action="/confirmation" method="GET">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label class="block text-sm font-semibold mb-2">Email</label>
                    <input type="email" placeholder="you@example.com"
                        class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-yellow-400">
                </div>
                <div>
                    <label class="block text-sm font-semibold mb-2">Full name</label>
                    <input type="text" placeholder="Jane Doe"
                        class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-yellow-400">
                </div>
            </div>
            <div class="mb-6">
                <label class="block text-sm font-semibold mb-2">Address</label>
                <input type="text" placeholder="Street & number"
                    class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-yellow-400">
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label class="block text-sm font-semibold mb-2">City</label>
                    <input type="text" placeholder="Amsterdam"
                        class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-yellow-400">
                </div>
                <div>
                    <label class="block text-sm font-semibold mb-2">Postal code</label>
                    <input type="text" placeholder="1000 AA"
                        class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-yellow-400">
                </div>
            </div>
            <div class="mb-6">
                <label class="block text-sm font-semibold mb-2">Card number</label>
                <input type="text" placeholder="4242 4242 4242 4242"
                    class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-yellow-400">
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">
                <div>
                    <label class="block text-sm font-semibold mb-2">Expiry</label>
                    <input type="text" placeholder="MM/YY"
                        class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-yellow-400">
                </div>
                <div>
                    <label class="block text-sm font-semibold mb-2">CVC</label>
                    <input type="text" placeholder="123"
                        class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-yellow-400">
                </div>
            </div>
            <div class="flex items-center justify-between">
                <a href="/bag" class="text-sm underline hover:text-gray-600">Back to bag</a>
                <button type="submit"
                    class="bg-yellow-400 hover:bg-yellow-500 transition px-8 py-3 rounded-full font-semibold">
                    Place order</button>
            </div>
        </form>
    </section>
@endsection