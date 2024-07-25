@props([
    "product",
])

<div class="group flex flex-col gap-2">
    <a
        class="overflow-hidden"
        href="{{ route("product", compact("product")) }}"
    >
        <img
            class="group-hover:scale-45 -z-10 cursor-pointer duration-150 ease-linear group-hover:rotate-1 group-hover:grayscale"
            src="{{ $product->image->url }}"
            alt="{{ $product->name }}"
        />
    </a>
    <div class="flex flex-col gap-1">
        <a href="{{ route("product", compact("product")) }}">
            <h3
                class="inline border-b-2 border-transparent text-2xl font-bold duration-150 ease-linear hover:border-black"
            >
                {{ $product->name }}
            </h3>
        </a>
        <p class="flex flex-col gap-2 text-xl">
            {{ $product->formatted_price }}
            @unless ($product->is_in_stock)
                <span class="text-red-600">{{ __("(Out of Stock)") }}</span>
            @endunless
        </p>
    </div>
</div>
