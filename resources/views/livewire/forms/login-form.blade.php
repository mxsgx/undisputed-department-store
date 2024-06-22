<form class="min-w-full sm:min-w-[512px] md:min-w-[640px] flex flex-col gap-4" method="post" action="{{ route('login') }}">
    <div class="flex flex-col gap-2">
        <label for="email" class="hidden font-medium">{{ __('Email address') }}</label>
        <input type="email" name="email" id="email" wire:model.blur="email" placeholder="{{ __('Email address') }}" class="border-2 border-black outline-none px-6 py-4 font-medium" required value="{{ old('email') }}" autofocus>
        @error('email')
        <span class="text-red-600">{{ $message }}</span>
        @enderror
    </div>
    <div class="flex flex-col gap-2">
        <label for="password" class="hidden font-medium">{{ __('Password') }}</label>
        <input type="password" name="password" wire:model.blur="password" id="password" placeholder="{{ __('Password') }}" class="border-2 border-black outline-none px-6 py-4 font-medium" required>
        @error('password')
        <span class="text-red-600">{{ $message }}</span>
        @enderror
    </div>
    <div class="flex justify-between items-center">
        <div class="flex items-center gap-2">
            <input type="checkbox" name="remember_me" id="remember-me" value="1" class="appearance-none w-6 h-6 border-2 border-black ring-2 ring-white checked:border-white checked:ring-black checked:bg-black">
            <label for="remember-me" class="font-medium">{{ __('Remember me') }}</label>
        </div>
        <div class="flex items-center">
            <a href="{{ route('lost-password') }}" class="font-medium underline underline-offset-4 text-right">{{ __('Lost your password?') }}</a>
        </div>
    </div>
    <div class="flex items-center">
        @csrf

        <button type="submit" class="uppercase tracking-wide font-medium border-2 border-black px-6 py-4 bg-black hover:bg-white text-white hover:text-black ease-linear duration-100">{{ __('Login') }}</button>
    </div>
</form>
