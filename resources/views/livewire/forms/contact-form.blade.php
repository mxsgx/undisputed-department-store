<div class="flex w-full flex-col gap-4">
    <div class="flex flex-col justify-between gap-4 md:flex-row">
        <div class="flex w-full flex-col gap-2">
            <label for="name" class="hidden font-medium">
                {{ __("Email address") }}
            </label>
            <input
                type="text"
                name="name"
                id="name"
                wire:model.blur="name"
                placeholder="{{ __("Your name") }}"
                class="border-2 border-black px-6 py-4 font-medium outline-none"
                required
                value="{{ old("name") }}"
                autofocus
            />
            @error("name")
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex w-full flex-col gap-2">
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
            />
            @error("email")
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="flex w-full flex-col gap-2">
        <label for="message" class="hidden font-medium">
            {{ __("Email address") }}
        </label>
        <textarea
            name="message"
            id="message"
            rows="6"
            wire:model.blur="message"
            placeholder="{{ __("Message") }}"
            class="min-h-48 border-2 border-black px-6 py-4 font-medium outline-none"
            required
        >
{{ old("message") }}</textarea
        >
        @error("message")
            <span class="text-red-600">{{ $message }}</span>
        @enderror
    </div>
    <div class="flex">
        <button
            type="button"
            disabled
            class="border-2 border-black bg-black px-6 py-4 font-medium uppercase tracking-wide text-white duration-100 ease-linear hover:bg-white hover:text-black"
        >
            {{ __("Submit") }}
        </button>
    </div>
</div>
