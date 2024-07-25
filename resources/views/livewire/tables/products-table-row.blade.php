<tr class="border border-black">
    <td class="px-4 py-3 text-center">
        @if ($product->image)
            <img
                class="mx-auto w-32"
                src="{{ $product->image->url }}"
                alt="{{ $product->name }}"
            />
        @endif
    </td>
    <td class="whitespace-nowrap px-4 py-3 font-medium">
        <a class="border-b-2 hover:border-b-black" href="#">
            {{ $product->name }}
        </a>
    </td>
    <td class="px-4 py-3 font-mono">
        {{ str($product->slug)->limit(12, "...") }}
    </td>
    <td class="px-4 py-3">
        {{ $product->sku }}
    </td>
    <td class="px-4 py-3 text-center">{{ $product->stock_status_name }}</td>
    <td class="px-4 py-3 text-center">{{ $product->formatted_price }}</td>
    <td
        class="px-4 py-3 font-medium uppercase"
        x-data="{ deleteModalOpen: false }"
    >
        <div class="flex items-center justify-center gap-2">
            <a
                class="border-b-2 hover:border-b-black"
                href="{{ route("products.edit", compact("product")) }}"
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
                    x-show="deleteModalOpen"
                    x-transition
                >
                    <form
                        class="z-50 flex min-w-96 flex-col gap-4 border-2 border-black bg-white p-8"
                        wire:submit="delete"
                    >
                        <h2 class="text-2xl">
                            {{ __('Delete Product ":name"?', ["name" => $product->name]) }}
                        </h2>
                        <p class="text-xl">
                            {{ __('This will delete product ":name" immediately. You can\'t undo this action.', ["name" => $product->name]) }}
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
                            type="button"
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
        </div>
    </td>
</tr>
