@extends("layouts.base")

@section("body")
    <section class="flex flex-col items-center">
        <img
            class="w-full md:min-h-96"
            src="{{ asset("images/hero.png") }}"
            alt="{{ config("app.name") }}"
        />
    </section>
    <section class="flex flex-col items-center py-4">
        <div class="container py-4 text-center">
            <h2 class="text-3xl font-bold uppercase tracking-wide">
                {{ __("Featured Products") }}
            </h2>
        </div>
        <div class="container grid grid-cols-2 gap-8 px-4 py-4 md:grid-cols-4">
            @forelse ($featuredProducts as $product)
                <x-product-card :$product />
            @empty

            @endforelse
        </div>
        <div class="flex w-full flex-1 items-center p-4 md:w-auto">
            <a
                class="w-full border-2 border-black bg-white px-6 py-4 font-bold uppercase tracking-wide text-black duration-100 ease-linear hover:bg-black hover:text-white"
                href="{{ route("shop") }}"
            >
                {{ __("See All Products") }} &raquo;
            </a>
        </div>
    </section>
@endsection
