<tr class="border border-black">
    <td class="whitespace-nowrap px-4 py-3 font-medium">
        <a class="border-b-2 hover:border-b-black" href="#">
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
            class="border-b-2 hover:border-b-black"
            href="#"
            @click="editModalOpen = !editModalOpen"
        >
            {{ __("Edit") }}
        </a>
        <a
            class="border-b-2 text-red-600 hover:border-b-red-600"
            href="#"
            @click="deleteModalOpen = !deleteModalOpen"
        >
            {{ __("Delete") }}
        </a>
        @teleport("body")
            <div
                class="fixed inset-0 z-40 flex items-center justify-center"
                x-show="editModalOpen"
                x-transition
            >
                <form
                    class="z-50 flex min-w-96 flex-col gap-4 border-2 border-black bg-white p-8"
                    wire:submit="update"
                >
                    <h2 class="text-2xl">
                        {{ __('Edit Category ":name"', ["name" => $category->name]) }}
                    </h2>

                    <div class="flex flex-col gap-2">
                        <label
                            class="font-medium"
                            for="name-{{ $category->id }}"
                        >
                            {{ __("Category name") }}
                        </label>
                        <input
                            class="border-2 border-black px-4 py-2 font-medium outline-none"
                            id="name-{{ $category->id }}"
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
                        <label
                            class="font-medium"
                            for="slug-{{ $category->id }}"
                        >
                            {{ __("Category slug") }}
                        </label>
                        <input
                            class="border-2 border-black px-4 py-2 font-medium outline-none"
                            id="slug-{{ $category->id }}"
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

                    <button
                        class="border-2 border-black bg-black px-4 py-2 font-medium uppercase tracking-wide text-white duration-100 ease-linear hover:bg-white hover:text-black"
                        type="submit"
                        wire:loading.attr="disabled"
                        wire:loading.class="opacity-50"
                    >
                        {{ __("Update") }}
                    </button>
                    <button
                        class="border-2 border-red-600 bg-red-600 px-4 py-2 font-medium uppercase tracking-wide text-white duration-100 ease-linear hover:bg-white hover:text-red-600"
                        @click="editModalOpen = false"
                    >
                        {{ __("Cancel") }}
                    </button>
                </form>
                <div
                    class="fixed inset-0 bg-black opacity-50"
                    @click="editModalOpen = false"
                ></div>
            </div>
        @endteleport

        @teleport("body")
            <div
                class="fixed inset-0 z-40 flex items-center justify-center"
                x-show="deleteModalOpen"
                x-transition
            >
                <form
                    class="z-50 flex min-w-96 flex-col gap-4 border-2 border-black bg-white p-8"
                    wire:submit="delete"
                >
                    <h2 class="text-2xl">
                        {{ __('Delete Category ":name"?', ["name" => $category->name]) }}
                    </h2>
                    <p class="text-xl">
                        {{ __('This will delete category ":name" immediately. You can\'t undo this action.', ["name" => $category->name]) }}
                    </p>
                    <button
                        class="border-2 border-red-600 bg-red-600 px-4 py-2 font-medium uppercase tracking-wide text-white duration-100 ease-linear hover:bg-white hover:text-red-600"
                        type="submit"
                        wire:loading.attr="disabled"
                        wire:loading.class="opacity-50"
                    >
                        {{ __("Yes, Delete") }}
                    </button>
                    <button
                        class="border-2 border-black bg-black px-4 py-2 font-medium uppercase tracking-wide text-white duration-100 ease-linear hover:bg-white hover:text-black"
                        @click="deleteModalOpen = false"
                    >
                        {{ __("Cancel") }}
                    </button>
                </form>
                <div
                    class="fixed inset-0 bg-black opacity-50"
                    @click="deleteModalOpen = false"
                ></div>
            </div>
        @endteleport
    </td>
</tr>
