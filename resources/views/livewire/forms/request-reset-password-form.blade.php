<form class="min-w-full sm:min-w-[512px] md:min-w-[640px] flex flex-col gap-4" method="post" action="{{ route('lost-password') }}">
    <p class="text-lg">{{ __('Please enter your email address below. You will receive a link to create a new password via email.') }}</p>
    <div class="flex flex-col gap-2">
        <label for="email" class="hidden font-medium">{{ __('Email address') }}</label>
        <input type="email" name="email" id="email" wire:model.blur="email" placeholder="{{ __('Email address') }}" class="border-2 border-black outline-none px-6 py-4 font-medium" required>
        @error('email')
        <span class="text-red-600">{{ $message }}</span>
        @enderror
    </div>
    <div class="flex items-center">
        @csrf

        <button type="submit" class="uppercase tracking-wide font-medium border-2 border-black px-6 py-4 bg-black hover:bg-white text-white hover:text-black ease-linear duration-100">{{ __('Request Reset Password') }}</button>
    </div>
</form>
