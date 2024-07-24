<div class="flex w-full flex-col gap-4">
    <div class="flex flex-col justify-between gap-4 md:flex-row">
        <div class="flex w-full flex-col gap-2">
            <label class="hidden font-medium" for="name">
                {{ __("Email address") }}
            </label>
            <input
                class="border-2 border-black px-6 py-4 font-medium outline-none"
                id="name"
                name="name"
                type="text"
                value="{{ old("name") }}"
                placeholder="{{ __("Your name") }}"
                required
                autofocus
                wire:model.blur="name"
            />
            @error("name")
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex w-full flex-col gap-2">
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
                wire:model.blur="email"
            />
            @error("email")
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="flex w-full flex-col gap-2">
        <label class="hidden font-medium" for="message">
            {{ __("Email address") }}
        </label>
        <textarea
            class="min-h-48 border-2 border-black px-6 py-4 font-medium outline-none"
            id="message"
            name="message"
            placeholder="{{ __("Message") }}"
            required
            rows="6"
            wire:model.blur="message"
        >
{{ old("message") }}</textarea
        >
        @error("message")
            <span class="text-red-600">{{ $message }}</span>
        @enderror
    </div>
    <div class="flex">
        <button
            class="border-2 border-black bg-black px-6 py-4 font-medium uppercase tracking-wide text-white duration-100 ease-linear hover:bg-white hover:text-black"
            type="button"
            disabled
        >
            {{ __("Submit") }}
        </button>
    </div>
</div>
