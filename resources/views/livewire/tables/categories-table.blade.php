<div class="flex flex-1 flex-col gap-4">
    <div class="flex flex-col gap-4 md:flex-row">
        <div class="flex flex-grow flex-col gap-2">
            <label for="search" class="sr-only font-medium">
                {{ __("Search") }}
            </label>
            <input
                type="text"
                name="search"
                id="search"
                wire:model.live.debounce.500ms="search"
                placeholder="{{ __("Search category...") }}"
                class="border-2 border-black px-4 py-2 font-medium outline-none"
            />
        </div>
    </div>
    <table>
        <thead
            class="border border-black bg-black text-sm font-bold uppercase tracking-wide text-white"
        >
            <tr>
                <th scope="col" class="px-4 py-3 text-left">
                    {{ __("Name") }}
                </th>
                <th scope="col" class="px-4 py-3 text-left">
                    {{ __("Slug") }}
                </th>
                <th scope="col" class="px-4 py-3 text-left">
                    {{ __("Type") }}
                </th>
                <th scope="col" class="px-4 py-3 text-center">
                    {{ __("Product Count") }}
                </th>
                <th scope="col" class="px-4 py-3 text-center">
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
                    <td colspan="5" class="px-4 py-3 text-center">
                        {{ __("Empty category") }}
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{ $categories->links("livewire::tailwind") }}
</div>
