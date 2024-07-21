<form
    class="flex min-w-full flex-col gap-4 sm:min-w-[512px] md:min-w-[640px]"
    method="post"
    action="{{ route("lost-password") }}"
>
    <p class="text-lg">
        {{ __("Please enter your email address below. You will receive a link to create a new password via email.") }}
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
            placeholder="{{ __("Email address") }}"
            class="border-2 border-black px-6 py-4 font-medium outline-none"
            required
        />
        @error("email")
            <span class="text-red-600">{{ $message }}</span>
        @enderror
    </div>
    <div class="flex items-center">
        @csrf

        <button
            type="submit"
            class="border-2 border-black bg-black px-6 py-4 font-medium uppercase tracking-wide text-white duration-100 ease-linear hover:bg-white hover:text-black"
        >
            {{ __("Request Reset Password") }}
        </button>
    </div>
</form>
