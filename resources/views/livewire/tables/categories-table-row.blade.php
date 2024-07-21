<tr class="border border-black">
    <td class="whitespace-nowrap px-4 py-3 font-medium">
        <a href="#" class="border-b-2 hover:border-b-black">
            {{ $category->name }}
        </a>
    </td>
    <td class="px-4 py-3 font-mono">
        {{ str($category->slug)->limit(12, "...") }}
    </td>
    <td class="px-4 py-3">
        {{ $category->parent_id ? __("Subcategory") : __("Category") }}
    </td>
    <td class="px-4 py-3 text-center">{{ 0 }}</td>
    <td
        class="flex items-center justify-center gap-2 px-4 py-3 font-medium uppercase"
        x-data="{ editModalOpen: false, deleteModalOpen: false }"
    >
        <a
            href="#"
            class="border-b-2 hover:border-b-black"
            @click="editModalOpen = !editModalOpen"
        >
            {{ __("Edit") }}
        </a>
        <a
            href="#"
            class="border-b-2 text-red-600 hover:border-b-red-600"
            @click="deleteModalOpen = !deleteModalOpen"
        >
            {{ __("Delete") }}
        </a>
        @teleport("body")
            <div
                x-show="editModalOpen"
                class="fixed inset-0 z-40 flex items-center justify-center"
                x-transition
            >
                <form
                    wire:submit="update"
                    class="z-50 flex min-w-96 flex-col gap-4 border-2 border-black bg-white p-8"
                >
                    <h2 class="text-2xl">
                        {{ __('Edit Category ":name"', ["name" => $category->name]) }}
                    </h2>

                    <div class="flex flex-col gap-2">
                        <label
                            for="name-{{ $category->id }}"
                            class="font-medium"
                        >
                            {{ __("Category name") }}
                        </label>
                        <input
                            type="text"
                            name="name"
                            id="name-{{ $category->id }}"
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
                        <label
                            for="slug-{{ $category->id }}"
                            class="font-medium"
                        >
                            {{ __("Category slug") }}
                        </label>
                        <input
                            type="text"
                            name="slug"
                            id="slug-{{ $category->id }}"
                            wire:model.blur="slug"
                            placeholder="{{ __("e.g: long-pants") }}"
                            class="border-2 border-black px-4 py-2 font-medium outline-none"
                            value="{{ old("slug") }}"
                        />
                        @error("slug")
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>

                    <button
                        type="submit"
                        wire:loading.attr="disabled"
                        wire:loading.class="opacity-50"
                        class="border-2 border-black bg-black px-4 py-2 font-medium uppercase tracking-wide text-white duration-100 ease-linear hover:bg-white hover:text-black"
                    >
                        {{ __("Update") }}
                    </button>
                    <button
                        @click="editModalOpen = false"
                        class="border-2 border-red-600 bg-red-600 px-4 py-2 font-medium uppercase tracking-wide text-white duration-100 ease-linear hover:bg-white hover:text-red-600"
                    >
                        {{ __("Cancel") }}
                    </button>
                </form>
                <div
                    @click="editModalOpen = false"
                    class="fixed inset-0 bg-black opacity-50"
                ></div>
            </div>
        @endteleport

        @teleport("body")
            <div
                x-show="deleteModalOpen"
                class="fixed inset-0 z-40 flex items-center justify-center"
                x-transition
            >
                <form
                    wire:submit="delete"
                    class="z-50 flex min-w-96 flex-col gap-4 border-2 border-black bg-white p-8"
                >
                    <h2 class="text-2xl">
                        {{ __('Delete Category ":name"?', ["name" => $category->name]) }}
                    </h2>
                    <p class="text-xl">
                        {{ __('This will delete category ":name" immediately. You can\'t undo this action.', ["name" => $category->name]) }}
                    </p>
                    <button
                        type="submit"
                        wire:loading.attr="disabled"
                        wire:loading.class="opacity-50"
                        class="border-2 border-red-600 bg-red-600 px-4 py-2 font-medium uppercase tracking-wide text-white duration-100 ease-linear hover:bg-white hover:text-red-600"
                    >
                        {{ __("Yes, Delete") }}
                    </button>
                    <button
                        @click="deleteModalOpen = false"
                        class="border-2 border-black bg-black px-4 py-2 font-medium uppercase tracking-wide text-white duration-100 ease-linear hover:bg-white hover:text-black"
                    >
                        {{ __("Cancel") }}
                    </button>
                </form>
                <div
                    @click="deleteModalOpen = false"
                    class="fixed inset-0 bg-black opacity-50"
                ></div>
            </div>
        @endteleport
    </td>
</tr>
