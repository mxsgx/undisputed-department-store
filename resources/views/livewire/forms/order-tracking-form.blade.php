<div class="min-w-full sm:min-w-[512px] md:min-w-[640px] flex flex-col gap-4">
    <p class="text-lg">{{ __('Please enter Order ID to track your order.') }}</p>
    <div class="flex flex-col gap-2">
        <label for="order" class="hidden font-medium">{{ __('Order ID') }}</label>
        <input type="text" name="order_id" id="order-id" wire:model.blur="order_id" placeholder="{{ __('#') }}" class="border-2 border-black outline-none px-6 py-4 font-medium" required>
        @error('order_id')
        <span class="text-red-600">{{ $message }}</span>
        @enderror
    </div>
    <div class="flex items-center">
        <button type="button" disabled class="uppercase tracking-wide font-medium border-2 border-black px-6 py-4 bg-black hover:bg-white text-white hover:text-black ease-linear duration-100">{{ __('Track') }}</button>
    </div>
</div>
