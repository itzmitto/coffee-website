<nav class="bg-white border-b border-gray-200">
    <div class="max-w-[1500px] mx-auto px-8 py-4 flex items-center justify-between">


        <a href="/" class="text-2xl font-bold text-amber-800">
            CoffeeHouse
        </a>


        <ul class="hidden md:flex items-center gap-8 text-gray-700 font-medium">

            <li>
                <a href="/"
                    class="{{ request()->is('/') ? 'text-amber-700 border-b-2 border-yellow-400 pb-1' : 'hover:text-amber-700' }}">
                    Home</a>
            </li>

            <li>
                <a href="/listings"
                    class="{{ request()->is('listings') ? 'text-amber-700 border-b-2 border-yellow-400 pb-1' : 'hover:text-amber-700' }}">
                    Listings</a>
            </li>

            <li>
                <a href="/product"
                    class="{{ request()->is('product') ? 'text-amber-700 border-b-2 border-yellow-400 pb-1' : 'hover:text-amber-700' }}">
                    Product</a>
            </li>

            <li>
                <a href="/bag"
                    class="{{ request()->is('bag') ? 'text-amber-700 border-b-2 border-yellow-400 pb-1' : 'hover:text-amber-700' }}">
                    Bag</a>
            </li>

            <li>
                <a href="/checkout"
                    class="{{ request()->is('checkout') ? 'text-amber-700 border-b-2 border-yellow-400 pb-1' : 'hover:text-amber-700' }}">
                    Checkout</a>
            </li>

            <li>
                <a href="/confirmation"
                    class="{{ request()->is('confirmation') ? 'text-amber-700 border-b-2 border-yellow-400 pb-1' : 'hover:text-amber-700' }}">
                    Confirmation</a>
            </li>

        </ul>



        <div class="flex items-center gap-3">
            <button
                class="w-10 h-10 rounded-full border border-gray-300 flex items-center justify-center hover:bg-gray-100 transition">
                <i class="fa-solid fa-magnifying-glass text-gray-700"></i>
            </button>

            <a href="/bag"
                class="w-10 h-10 rounded-full border border-gray-300 flex items-center justify-center hover:bg-gray-100 transition">
                <i class="fa-solid fa-shopping-cart text-gray-700"></i>
            </a>

            <a href="/checkout"
                class="bg-amber-400 hover:bg-amber-500 text-black font-semibold px-5 py-2 rounded-full transition">
                Sign In
            </a>

        </div>

    </div>
</nav>