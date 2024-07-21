<form
    class="flex min-w-full flex-col gap-4 sm:min-w-[512px] md:min-w-[640px]"
    method="post"
    action="{{ route("login") }}"
>
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
            value="{{ old("email") }}"
            autofocus
        />
        @error("email")
            <span class="text-red-600">{{ $message }}</span>
        @enderror
    </div>
    <div class="flex flex-col gap-2">
        <label for="password" class="hidden font-medium">
            {{ __("Password") }}
        </label>
        <input
            type="password"
            name="password"
            wire:model.blur="password"
            id="password"
            placeholder="{{ __("Password") }}"
            class="border-2 border-black px-6 py-4 font-medium outline-none"
            required
        />
        @error("password")
            <span class="text-red-600">{{ $message }}</span>
        @enderror
    </div>
    <div class="flex items-center justify-between">
        <div class="flex items-center gap-2">
            <input
                type="checkbox"
                name="remember_me"
                id="remember-me"
                value="1"
                class="h-6 w-6 appearance-none border-2 border-black ring-2 ring-white checked:border-white checked:bg-black checked:ring-black"
            />
            <label for="remember-me" class="font-medium">
                {{ __("Remember me") }}
            </label>
        </div>
        <div class="flex items-center">
            <a
                href="{{ route("lost-password") }}"
                class="text-right font-medium underline underline-offset-4"
            >
                {{ __("Lost your password?") }}
            </a>
        </div>
    </div>
    <div class="flex items-center">
        @csrf

        <button
            type="submit"
            class="border-2 border-black bg-black px-6 py-4 font-medium uppercase tracking-wide text-white duration-100 ease-linear hover:bg-white hover:text-black"
        >
            {{ __("Login") }}
        </button>
    </div>
</form>
