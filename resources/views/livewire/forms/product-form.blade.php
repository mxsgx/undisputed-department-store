<form class="flex flex-col gap-6" wire:submit="submit">
    @if ($product->is_in_stock)
        <div class="flex flex-col gap-2">
            <label class="text-xl font-medium uppercase" for="quantity">
                {{ __("Quantity") }}
            </label>
            <div class="flex">
                <button
                    class="-mr-[1px] border-2 border-black px-3 py-2 outline-none disabled:opacity-50"
                    type="button"
                    wire:click.prevent="decrement"
                    @disabled($quantity <= 1)
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
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M5 12l14 0" />
                    </svg>
                </button>
                <input
                    class="w-36 border-2 border-black px-3 py-2 text-center font-medium outline-none"
                    id="quantity"
                    name="quantity"
                    type="number"
                    min="1"
                    max="{{ $product->managed_stock ? $product->stock_quantity : "" }}"
                    wire:model.change="quantity"
                    @disabled($product->managed_stock && ! $product->is_in_stock)
                />
                <button
                    class="-ml-[1px] border-2 border-black px-3 py-2 outline-none disabled:opacity-50"
                    type="button"
                    wire:click.prevent="increment"
                    @disabled($product->managed_stock && $quantity >= $product->stock_quantity)
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
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 5l0 14" />
                        <path d="M5 12l14 0" />
                    </svg>
                </button>
            </div>
        </div>
        <div>
            <button
                class="border-2 border-black bg-black px-6 py-3 font-medium uppercase tracking-wide text-white duration-100 ease-linear hover:bg-white hover:text-black"
                type="submit"
                wire:loading.attr="disabled"
                wire:loading.class="opacity-50"
                @disabled($product->managed_stock && ! $product->is_in_stock)
            >
                {{ __("Add To Cart") }}
            </button>
        </div>
    @else
        <p class="font-handwriting text-2xl text-red-600">
            {{ __("Sorry, this product is out of stock.") }}
        </p>
    @endif
</form>
