<div class="flex flex-1 flex-col gap-4">
    <div class="flex flex-col gap-4 md:flex-row">
        <div class="flex flex-grow flex-col gap-2">
            <label class="sr-only font-medium" for="search">
                {{ __("Search") }}
            </label>
            <input
                class="border-2 border-black px-4 py-2 font-medium outline-none"
                id="search"
                name="search"
                type="text"
                placeholder="{{ __("Search products...") }}"
                wire:model.live.debounce.500ms="search"
                wire:loading.attr="disabled"
                wire:loading.class="opacity-50"
            />
        </div>
    </div>
    <table>
        <thead
            class="border border-black bg-black text-sm font-bold uppercase tracking-wide text-white"
        >
            <tr>
                <th class="px-4 py-3 text-center">
                    <span class="sr-only">{{ __("Image") }}</span>
                </th>
                <th class="px-4 py-3 text-left" scope="col">
                    {{ __("Name") }}
                </th>
                <th class="px-4 py-3 text-left" scope="col">
                    {{ __("Slug") }}
                </th>
                <th class="px-4 py-3 text-left" scope="col">
                    {{ __("SKU") }}
                </th>
                <th class="px-4 py-3 text-center" scope="col">
                    {{ __("Stock Status") }}
                </th>
                <th class="px-4 py-3 text-center" scope="col">
                    {{ __("Price") }}
                </th>
                <th class="px-4 py-3 text-center" scope="col">
                    {{ __("Action") }}
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $product)
                <livewire:tables.products-table-row
                    :$product
                    :key="'product-'.$product->id"
                />
            @empty
                <tr class="border border-black">
                    <td class="px-4 py-3 text-center" colspan="7">
                        {{ __("Empty products") }}
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{ $products->links("livewire::tailwind") }}
</div>
