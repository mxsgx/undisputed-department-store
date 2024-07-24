<form
    class="flex flex-col gap-4 md:min-w-96"
    wire:submit="submit"
    method="post"
>
    <div class="flex flex-col gap-2">
        <label class="font-medium" for="name">{{ __("Category name") }}</label>
        <input
            class="border-2 border-black px-4 py-2 font-medium outline-none"
            id="name"
            name="name"
            type="text"
            value="{{ old("name") }}"
            placeholder="{{ __("e.g: Long Pants") }}"
            required
            wire:model.blur="name"
        />
        @error("name")
            <span class="text-red-600">{{ $message }}</span>
        @enderror
    </div>

    <div class="flex flex-col gap-2">
        <label class="font-medium" for="slug">{{ __("Category slug") }}</label>
        <input
            class="border-2 border-black px-4 py-2 font-medium outline-none"
            id="slug"
            name="slug"
            type="text"
            value="{{ old("slug") }}"
            placeholder="{{ __("e.g: long-pants") }}"
            wire:model.blur="slug"
        />
        @error("slug")
            <span class="text-red-600">{{ $message }}</span>
        @enderror
    </div>

    <div class="flex flex-col gap-2">
        <label class="sr-only font-medium" for="parent_id">
            {{ __("Parent Category") }}
        </label>
        <select
            class="border-2 border-black px-4 py-2 font-medium outline-none"
            name="parent_id"
            wire:model.blur="parent_id"
        >
            <option value="">{{ __("Select Parent Category") }}</option>
            @foreach ($parent_categories as $parent_category)
                <option
                    value="{{ $parent_category->id }}"
                    wire:key="parent-category-{{ $parent_category->id }}"
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
        class="border-2 border-black bg-black px-4 py-2 font-medium uppercase tracking-wide text-white duration-100 ease-linear hover:bg-white hover:text-black"
        type="submit"
        wire:loading.attr="disabled"
        wire:loading.class="opacity-50"
    >
        {{ __("Create") }}
    </button>
</form>
