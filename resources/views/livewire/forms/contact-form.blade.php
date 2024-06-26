<div class="w-full flex flex-col gap-4">
    <div class="flex flex-col md:flex-row justify-between gap-4">
        <div class="flex flex-col gap-2 w-full">
            <label for="name" class="hidden font-medium">{{ __('Email address') }}</label>
            <input type="text" name="name" id="name" wire:model.blur="name" placeholder="{{ __('Your name') }}" class="border-2 border-black outline-none px-6 py-4 font-medium" required value="{{ old('name') }}" autofocus>
            @error('name')
            <span class="text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-col gap-2 w-full">
            <label for="email" class="hidden font-medium">{{ __('Email address') }}</label>
            <input type="email" name="email" id="email" wire:model.blur="email" placeholder="{{ __('Email address') }}" class="border-2 border-black outline-none px-6 py-4 font-medium" required value="{{ old('email') }}">
            @error('email')
            <span class="text-red-600">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="flex flex-col gap-2 w-full">
        <label for="message" class="hidden font-medium">{{ __('Email address') }}</label>
        <textarea name="message" id="message" rows="6" wire:model.blur="message" placeholder="{{ __('Message') }}" class="border-2 border-black outline-none px-6 py-4 font-medium min-h-48" required>{{ old('message') }}</textarea>
        @error('message')
        <span class="text-red-600">{{ $message }}</span>
        @enderror
    </div>
    <div class="flex">
        <button type="button" disabled class="uppercase tracking-wide font-medium border-2 border-black px-6 py-4 bg-black hover:bg-white text-white hover:text-black ease-linear duration-100">{{ __('Submit') }}</button>
    </div>
</div>
