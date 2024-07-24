<div class="flex min-w-full flex-col gap-4 sm:min-w-[512px] md:min-w-[640px]">
    <p class="text-lg">
        {{ __("Please enter Order ID to track your order.") }}
    </p>
    <div class="flex flex-col gap-2">
        <label class="hidden font-medium" for="order">
            {{ __("Order ID") }}
        </label>
        <input
            class="border-2 border-black px-6 py-4 font-medium outline-none"
            id="order-id"
            name="order_id"
            type="text"
            placeholder="{{ __("#") }}"
            required
            wire:model.blur="order_id"
        />
        @error("order_id")
            <span class="text-red-600">{{ $message }}</span>
        @enderror
    </div>
    <div class="flex items-center">
        <button
            class="border-2 border-black bg-black px-6 py-4 font-medium uppercase tracking-wide text-white duration-100 ease-linear hover:bg-white hover:text-black"
            type="button"
            disabled
        >
            {{ __("Track") }}
        </button>
    </div>
</div>
