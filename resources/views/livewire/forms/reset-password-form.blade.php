<form
    class="flex min-w-full flex-col gap-4 sm:min-w-[512px] md:min-w-[640px]"
    method="post"
    action="{{ route("reset-password", ["token" => $token]) }}"
>
    <p class="text-lg">
        {{ __("Don’t forget to save your password in safe place and don’t share your password to other.") }}
    </p>
    <div class="flex flex-col gap-2">
        <label for="email" class="hidden font-medium">
            {{ __("Email address") }}
        </label>
        <input
            type="email"
            name="email"
            id="email"
            wire:model.blur="email"
            placeholder="{{ __("Your email address") }}"
            class="border-2 border-black px-6 py-4 font-medium outline-none"
            required
        />
        @error("email")
            <span class="text-red-600">{{ $message }}</span>
        @enderror
    </div>
    <div class="flex flex-col gap-2">
        <label for="password" class="hidden font-medium">
            {{ __("New password") }}
        </label>
        <input
            type="password"
            name="password"
            id="password"
            wire:model.blur="password"
            placeholder="{{ __("New password") }}"
            class="border-2 border-black px-6 py-4 font-medium outline-none"
            required
        />
        @error("password")
            <span class="text-red-600">{{ $message }}</span>
        @enderror
    </div>
    <div class="flex flex-col gap-2">
        <label for="password-confirmation" class="hidden font-medium">
            {{ __("Re-type new password") }}
        </label>
        <input
            type="password"
            name="password_confirmation"
            id="password-confirmation"
            placeholder="{{ __("Re-type new password") }}"
            class="border-2 border-black px-6 py-4 font-medium outline-none"
            required
        />
    </div>
    <div class="flex items-center">
        @csrf

        <button
            type="submit"
            class="border-2 border-black bg-black px-6 py-4 font-medium uppercase tracking-wide text-white duration-100 ease-linear hover:bg-white hover:text-black"
        >
            {{ __("Reset Password") }}
        </button>
    </div>
</form>
