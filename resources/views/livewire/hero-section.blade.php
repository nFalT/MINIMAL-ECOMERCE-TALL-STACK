<section class="bg-gray-50">

    <div class="mx-auto max-w-screen-xl px-4 py-10 lg:flex lg:items-center">
        <div class="mx-auto max-w-xl text-center">
            <h1 class="text-3xl font-extrabold sm:text-5xl">
                Online MarketPlace.
                <strong class="font-extrabold text-blue-700 sm:block text-3xl"> Discover Quality Products Online Now.
                </strong>

            </h1>

            <p class="mt-8 flex flex-wrap justify-center gap-4">
                Browse our collection of high-quality products and enjoy seamless online shopping.
            </p>

            <div class="mt-4 flex justify-center gap-4 sm:mt-6">
                @if (auth()->check())
                <a class="inline-block rounded border border-indigo-600 bg-indigo-600 px-5 py-3 font-medium text-white shadow-sm transition-colors hover:bg-indigo-700"
                    href="/offer">
                    Redeem your offer now!
                </a>
                @else
                    <a class="inline-block rounded border border-indigo-600 bg-indigo-600 px-5 py-3 font-medium text-white shadow-sm transition-colors hover:bg-indigo-700"
                        href="/auth/login">
                        Get Started
                    </a>
                @endif

                <a class="inline-block rounded border border-gray-200 px-5 py-3 font-medium text-gray-700 shadow-sm transition-colors hover:bg-gray-50 hover:text-gray-900"
                    href="#">
                    Learn More
                </a>
            </div>
        </div>
    </div>
</section>
