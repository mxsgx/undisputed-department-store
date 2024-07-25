@extends("layouts.base")

@section("title", $product->name)

@section("body")
    <div class="flex flex-col items-center justify-center gap-10 px-4 py-8">
        <div class="container grid grid-cols-1 gap-6 md:grid-cols-2">
            <div class="flex flex-col items-center md:items-end">
                <div class="max-w-[420px]">
                    <img
                        src="{{ $product->image->url }}"
                        alt="{{ $product->name }}"
                    />
                </div>
            </div>
            <div class="flex flex-col gap-6">
                <div class="flex flex-col gap-4">
                    <h2 class="text-4xl font-medium uppercase tracking-wide">
                        {{ $product->name }}
                    </h2>
                    <p class="text-2xl">
                        {{ $product->formatted_price }}
                    </p>
                </div>
                <div class="flex flex-col gap-2">
                    <b class="text-xl font-medium uppercase">
                        {{ __("Product Description") }}
                    </b>
                    <p class="max-w-[36rem] text-lg font-light">
                        {{ fake()->paragraph(6) }}
                    </p>
                </div>
                <livewire:forms.product-form :$product />
            </div>
        </div>
        <div class="container">
            <h2 class="text-3xl font-bold uppercase tracking-wide">
                {{ __("Related Products") }}
            </h2>
        </div>
        <div
            class="container grid grid-cols-2 md:col-span-8 md:grid-cols-3 lg:col-span-9 lg:grid-cols-4"
        >
            @foreach ($relatedProducts as $product)
                <x-product-card-shop :$product />
            @endforeach
        </div>
    </div>
@endsection
