<form
    wire:submit="submit"
    class="flex flex-col gap-4 md:min-w-96"
    method="post"
>
    <div class="flex flex-col gap-2">
        <label for="name" class="font-medium">{{ __("Category name") }}</label>
        <input
            type="text"
            name="name"
            id="name"
            wire:model.blur="name"
            placeholder="{{ __("e.g: Long Pants") }}"
            class="border-2 border-black px-4 py-2 font-medium outline-none"
            required
            value="{{ old("name") }}"
        />
        @error("name")
            <span class="text-red-600">{{ $message }}</span>
        @enderror
    </div>

    <div class="flex flex-col gap-2">
        <label for="slug" class="font-medium">{{ __("Category slug") }}</label>
        <input
            type="text"
            name="slug"
            id="slug"
            wire:model.blur="slug"
            placeholder="{{ __("e.g: long-pants") }}"
            class="border-2 border-black px-4 py-2 font-medium outline-none"
            value="{{ old("slug") }}"
        />
        @error("slug")
            <span class="text-red-600">{{ $message }}</span>
        @enderror
    </div>

    <div class="flex flex-col gap-2">
        <label for="parent_id" class="sr-only font-medium">
            {{ __("Parent Category") }}
        </label>
        <select
            name="parent_id"
            wire:model.blur="parent_id"
            class="border-2 border-black px-4 py-2 font-medium outline-none"
        >
            <option value="">{{ __("Select Parent Category") }}</option>
            @foreach ($parent_categories as $parent_category)
                <option
                    wire:key="parent-category-{{ $parent_category->id }}"
                    value="{{ $parent_category->id }}"
                    @selected(old("parent_id") == $parent_category->id)
                >
                    {{ $parent_category->name }}
                    ({{ $parent_category->slug }})
                </option>
            @endforeach
        </select>
        @error("parent_id")
            <span class="text-red-600">{{ $message }}</span>
        @enderror
    </div>

    <button
        type="submit"
        wire:loading.attr="disabled"
        wire:loading.class="opacity-50"
        class="border-2 border-black bg-black px-4 py-2 font-medium uppercase tracking-wide text-white duration-100 ease-linear hover:bg-white hover:text-black"
    >
        {{ __("Create") }}
    </button>
</form>
