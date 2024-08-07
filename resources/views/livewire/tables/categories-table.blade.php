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
                placeholder="{{ __("Search category...") }}"
                wire:model.live.debounce.500ms="search"
            />
        </div>
    </div>
    <table>
        <thead
            class="border border-black bg-black text-sm font-bold uppercase tracking-wide text-white"
        >
            <tr>
                <th class="px-4 py-3 text-left" scope="col">
                    {{ __("Name") }}
                </th>
                <th class="px-4 py-3 text-left" scope="col">
                    {{ __("Slug") }}
                </th>
                <th class="px-4 py-3 text-left" scope="col">
                    {{ __("Type") }}
                </th>
                <th class="px-4 py-3 text-center" scope="col">
                    {{ __("Product Count") }}
                </th>
                <th class="px-4 py-3 text-center" scope="col">
                    {{ __("Action") }}
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($categories as $category)
                <livewire:tables.categories-table-row
                    :$category
                    :key="'category-'.$category->id"
                />
            @empty
                <tr class="border border-black">
                    <td class="px-4 py-3 text-center" colspan="5">
                        {{ __("Empty category") }}
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{ $categories->links("livewire::tailwind") }}
</div>
