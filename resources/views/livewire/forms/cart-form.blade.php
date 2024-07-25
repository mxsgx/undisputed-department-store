<div class="mb-8 flex flex-col items-center justify-center">
    <div class="container py-8 text-center">
        <h2 class="text-3xl font-bold uppercase tracking-wide">
            {{ __("Cart") }}
        </h2>
    </div>
    <div class="container grid grid-cols-2 gap-8">
        <div
            @class(["flex flex-col gap-4", "col-span-full" => $items->isEmpty()])
        >
            @forelse ($items as $item)
                <div class="grid grid-cols-4 gap-4">
                    <div class="col-span-1">
                        <img
                            src="{{ $item["image"] }}"
                            alt="{{ $item["name"] }}"
                            loading="lazy"
                        />
                    </div>
                    <div class="col-span-3 flex flex-col justify-between py-2">
                        <div class="flex justify-between">
                            <h4 class="flex flex-col text-3xl font-medium">
                                <a
                                    href="{{ route("product", ["product" => $item["slug"]]) }}"
                                >
                                    {{ $item["name"] }}
                                </a>
                                <span class="text-base font-light">
                                    &times;
                                    {{ __(":quantity items", ["quantity" => $item["quantity"]]) }}
                                </span>
                            </h4>
                            <button
                                class="text-red-600"
                                type="button"
                                wire:click.prevent="remove({{ $item["productId"] }})"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <path
                                        stroke="none"
                                        d="M0 0h24v24H0z"
                                        fill="none"
                                    />
                                    <path d="M4 7l16 0" />
                                    <path d="M10 11l0 6" />
                                    <path d="M14 11l0 6" />
                                    <path
                                        d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"
                                    />
                                    <path
                                        d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"
                                    />
                                </svg>
                            </button>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-2xl">
                                {{ numfmt_format_currency(numfmt_create("id_ID", NumberFormatter::CURRENCY), $item["price"], "IDR") }}
                            </span>
                        </div>
                    </div>
                </div>
            @empty
                <div
                    class="bg-black px-3 py-4 text-center font-medium text-white"
                >
                    {{ __("Empty cart") }}
                </div>
            @endforelse
        </div>
        @unless ($items->isEmpty())
            <div>
                <div class="flex flex-col gap-4 bg-zinc-200 p-4">
                    <div class="border-b-2 border-black pb-2">
                        <h4 class="text-2xl font-bold uppercase tracking-wide">
                            {{ __("Summary") }}
                        </h4>
                    </div>
                    <div class="flex flex-col gap-2 border-b border-black pb-4">
                        @forelse ($items as $item)
                            <div class="flex items-center justify-between">
                                <p class="text-xl font-medium">
                                    <span class="font-light">
                                        {{ $item["quantity"] }}
                                        &times;
                                    </span>
                                    {{ $item["name"] }}
                                </p>
                                <span class="text-right text-lg">
                                    {{ numfmt_format_currency(numfmt_create("id_ID", NumberFormatter::CURRENCY), $item["amount"], "IDR") }}
                                </span>
                            </div>
                        @empty
                            <div class="flex items-center justify-between">
                                <p class="text-xl font-medium">
                                    <span class="font-light">
                                        {{ __("No items in cart") }}
                                    </span>
                                </p>
                            </div>
                        @endforelse
                    </div>

                    <div
                        class="flex flex-col gap-2 border-b-2 border-black pb-2"
                    >
                        <div class="flex items-center justify-between">
                            <p class="text-xl font-medium">
                                {{ __("Subtotal") }}
                            </p>
                            <span class="text-right text-lg">
                                {{ numfmt_format_currency(numfmt_create("id_ID", NumberFormatter::CURRENCY), $items->sum("amount"), "IDR") }}
                            </span>
                        </div>
                        <div class="flex items-center justify-between">
                            <p class="text-xl font-medium">
                                {{ __("Shipping") }}
                            </p>
                            <span class="text-right text-lg font-light italic">
                                {{ __("Enter your address to view shipping options.") }}
                            </span>
                        </div>
                    </div>
                    <div class="flex flex-col gap-2">
                        <div class="flex items-center justify-between">
                            <p class="text-xl font-medium">
                                {{ __("Total") }}
                            </p>
                            <span class="text-right text-lg">
                                {{ numfmt_format_currency(numfmt_create("id_ID", NumberFormatter::CURRENCY), $items->sum("amount"), "IDR") }}
                            </span>
                        </div>

                        <a
                            class="border-2 border-black bg-black px-6 py-3 text-center font-medium uppercase tracking-wide text-white duration-100 ease-linear hover:bg-white hover:text-black disabled:opacity-50"
                            href="{{ route("checkout") }}"
                        >
                            {{ __("Checkout") }}
                        </a>
                    </div>
                </div>
            </div>
        @endunless
    </div>
</div>
