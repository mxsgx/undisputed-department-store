<form
    class="flex min-w-full flex-col gap-4 sm:min-w-[512px] md:min-w-[640px]"
    method="post"
    action="{{ route("login") }}"
>
    <div class="flex flex-col gap-2">
        <label class="hidden font-medium" for="email">
            {{ __("Email address") }}
        </label>
        <input
            class="border-2 border-black px-6 py-4 font-medium outline-none"
            id="email"
            name="email"
            type="email"
            value="{{ old("email") }}"
            placeholder="{{ __("Email address") }}"
            required
            autofocus
            wire:model.blur="email"
        />
        @error("email")
            <span class="text-red-600">{{ $message }}</span>
        @enderror
    </div>
    <div class="flex flex-col gap-2">
        <label class="hidden font-medium" for="password">
            {{ __("Password") }}
        </label>
        <input
            class="border-2 border-black px-6 py-4 font-medium outline-none"
            id="password"
            name="password"
            type="password"
            placeholder="{{ __("Password") }}"
            required
            wire:model.blur="password"
        />
        @error("password")
            <span class="text-red-600">{{ $message }}</span>
        @enderror
    </div>
    <div class="flex items-center justify-between">
        <div class="flex items-center gap-2">
            <input
                class="h-6 w-6 appearance-none border-2 border-black ring-2 ring-white checked:border-white checked:bg-black checked:ring-black"
                id="remember-me"
                name="remember_me"
                type="checkbox"
                value="1"
            />
            <label class="font-medium" for="remember-me">
                {{ __("Remember me") }}
            </label>
        </div>
        <div class="flex items-center">
            <a
                class="text-right font-medium underline underline-offset-4"
                href="{{ route("lost-password") }}"
            >
                {{ __("Lost your password?") }}
            </a>
        </div>
    </div>
    <div class="flex items-center">
        @csrf

        <button
            class="border-2 border-black bg-black px-6 py-4 font-medium uppercase tracking-wide text-white duration-100 ease-linear hover:bg-white hover:text-black"
            type="submit"
        >
            {{ __("Login") }}
        </button>
    </div>
</form>
