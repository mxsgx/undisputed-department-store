<form class="min-w-full sm:min-w-[512px] md:min-w-[640px] flex flex-col gap-4" method="post" action="{{ route('reset-password', ['token' => $token]) }}">
    <p class="text-lg">{{ __('Don’t forget to save your password in safe place and don’t share your password to other.') }}</p>
    <div class="flex flex-col gap-2">
        <label for="email" class="hidden font-medium">{{ __('Email address') }}</label>
        <input type="email" name="email" id="email" wire:model.blur="email" placeholder="{{ __('Your email address') }}" class="border-2 border-black outline-none px-6 py-4 font-medium" required>
        @error('email')
        <span class="text-red-600">{{ $message }}</span>
        @enderror
    </div>
    <div class="flex flex-col gap-2">
        <label for="password" class="hidden font-medium">{{ __('New password') }}</label>
        <input type="password" name="password" id="password" wire:model.blur="password" placeholder="{{ __('New password') }}" class="border-2 border-black outline-none px-6 py-4 font-medium" required>
        @error('password')
        <span class="text-red-600">{{ $message }}</span>
        @enderror
    </div>
    <div class="flex flex-col gap-2">
        <label for="password-confirmation" class="hidden font-medium">{{ __('Re-type new password') }}</label>
        <input type="password" name="password_confirmation" id="password-confirmation" placeholder="{{ __('Re-type new password') }}" class="border-2 border-black outline-none px-6 py-4 font-medium" required>
    </div>
    <div class="flex items-center">
        @csrf

        <button type="submit" class="uppercase tracking-wide font-medium border-2 border-black px-6 py-4 bg-black hover:bg-white text-white hover:text-black ease-linear duration-100">{{ __('Reset Password') }}</button>
    </div>
</form>
