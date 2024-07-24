<form
    class="flex min-w-full flex-col gap-4 sm:min-w-[512px] md:min-w-[640px]"
    method="post"
    action="{{ route("reset-password", ["token" => $token]) }}"
>
    <p class="text-lg">
        {{ __("Don’t forget to save your password in safe place and don’t share your password to other.") }}
    </p>
    <div class="flex flex-col gap-2">
        <label class="hidden font-medium" for="email">
            {{ __("Email address") }}
        </label>
        <input
            class="border-2 border-black px-6 py-4 font-medium outline-none"
            id="email"
            name="email"
            type="email"
            placeholder="{{ __("Your email address") }}"
            required
            wire:model.blur="email"
        />
        @error("email")
            <span class="text-red-600">{{ $message }}</span>
        @enderror
    </div>
    <div class="flex flex-col gap-2">
        <label class="hidden font-medium" for="password">
            {{ __("New password") }}
        </label>
        <input
            class="border-2 border-black px-6 py-4 font-medium outline-none"
            id="password"
            name="password"
            type="password"
            placeholder="{{ __("New password") }}"
            required
            wire:model.blur="password"
        />
        @error("password")
            <span class="text-red-600">{{ $message }}</span>
        @enderror
    </div>
    <div class="flex flex-col gap-2">
        <label class="hidden font-medium" for="password-confirmation">
            {{ __("Re-type new password") }}
        </label>
        <input
            class="border-2 border-black px-6 py-4 font-medium outline-none"
            id="password-confirmation"
            name="password_confirmation"
            type="password"
            placeholder="{{ __("Re-type new password") }}"
            required
        />
    </div>
    <div class="flex items-center">
        @csrf

        <button
            class="border-2 border-black bg-black px-6 py-4 font-medium uppercase tracking-wide text-white duration-100 ease-linear hover:bg-white hover:text-black"
            type="submit"
        >
            {{ __("Reset Password") }}
        </button>
    </div>
</form>
