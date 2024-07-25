<form class="flex flex-col gap-4 md:flex-row" wire:submit="submit">
    <div class="flex flex-1 flex-col gap-4">
        <div class="flex flex-col gap-2 md:flex-row">
            <div class="flex flex-1 flex-col gap-2">
                <label class="sr-only font-medium" for="name">
                    {{ __("Product Name") }}
                </label>
                <input
                    class="border-2 border-black px-4 py-3 font-medium outline-none"
                    id="name"
                    name="name"
                    type="text"
                    value="{{ old("name") }}"
                    placeholder="{{ __("Product Name") }}"
                    required
                    autofocus
                    wire:model.blur="name"
                />
                @error("name")
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex flex-col gap-2">
                <label class="sr-only font-medium" for="sku">
                    {{ __("SKU") }}
                </label>
                <input
                    class="border-2 border-black px-4 py-3 font-medium outline-none"
                    id="sku"
                    name="sku"
                    type="text"
                    value="{{ old("sku") }}"
                    placeholder="{{ __("SKU") }}"
                    required
                    wire:model.blur="sku"
                />
                @error("name")
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="flex flex-col gap-2">
            <label class="sr-only font-medium" for="description">
                {{ __("Description") }}
            </label>
            <textarea
                class="min-h-48 border-2 border-black px-4 py-3 font-medium outline-none"
                id="description"
                name="description"
                placeholder="{{ __("Description") }}"
                required
                wire:model.blur="description"
            ></textarea>
            @error("description")
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </div>

        <div
            class="flex flex-col items-center justify-center gap-2 md:flex-row"
        >
            <div class="h-64 w-64">
                @if ($image)
                    <img
                        class="h-full w-full object-cover"
                        src="{{ $image->temporaryUrl() }}"
                        alt="{{ __("Image preview") }}"
                    />
                @else
                    <label
                        class="flex h-full flex-1 cursor-pointer flex-col items-center justify-center rounded border-2 border-dashed border-gray-300 bg-white text-base font-semibold text-gray-500"
                        for="image"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="48"
                            height="48"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        >
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M15 8h.01" />
                            <path
                                d="M6 13l2.644 -2.644a1.21 1.21 0 0 1 1.712 0l3.644 3.644"
                            />
                            <path
                                d="M13 13l1.644 -1.644a1.21 1.21 0 0 1 1.712 0l1.644 1.644"
                            />
                            <path d="M4 8v-2a2 2 0 0 1 2 -2h2" />
                            <path d="M4 16v2a2 2 0 0 0 2 2h2" />
                            <path d="M16 4h2a2 2 0 0 1 2 2v2" />
                            <path d="M16 20h2a2 2 0 0 0 2 -2v-2" />
                        </svg>
                        <span>{{ __("Preview") }}</span>
                    </label>
                @endif
            </div>

            <label
                class="flex h-64 w-64 flex-1 cursor-pointer flex-col items-center justify-center rounded border-2 border-dashed border-gray-300 bg-white p-4 text-base font-semibold text-gray-500"
                for="image"
                x-data="{ uploading: false, progress: 0 }"
                x-on:livewire-upload-start="uploading = true"
                x-on:livewire-upload-finish="uploading = false"
                x-on:livewire-upload-cancel="uploading = false"
                x-on:livewire-upload-error="uploading = false"
                x-on:livewire-upload-progress="progress = $event.detail.progress"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="48"
                    height="48"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                >
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M15 8h.01" />
                    <path
                        d="M12.5 21h-6.5a3 3 0 0 1 -3 -3v-12a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v6.5"
                    />
                    <path d="M3 16l5 -5c.928 -.893 2.072 -.893 3 0l3.5 3.5" />
                    <path d="M14 14l1 -1c.679 -.653 1.473 -.829 2.214 -.526" />
                    <path d="M19 22v-6" />
                    <path d="M22 19l-3 -3l-3 3" />
                </svg>
                <span wire:loading.remove wire:target="image">
                    {{ __("Upload Product Image") }}
                </span>
                <span wire:loading wire:target="photo">
                    {{ __("Uploading... ") }}
                    <i x-text="progress + '%'"></i>
                </span>

                <input
                    class="hidden"
                    id="image"
                    type="file"
                    accept=".jpg,.png"
                    wire:model.blur="image"
                />
                <p
                    class="mt-2 text-center text-xs font-medium text-gray-400"
                    x-show="!uploading"
                >
                    {{ __("Allowed format are .jpg and .png and recommended dimensions is 1:1 ratio.") }}
                </p>
                @error("image")
                    <p class="text-xs text-red-600">{{ $message }}</p>
                @enderror
            </label>
        </div>
    </div>
    <div class="flex flex-col gap-4 md:min-w-96">
        <div class="flex flex-col gap-2">
            <div class="flex flex-1 flex-col gap-2">
                <label class="font-medium" for="price">
                    {{ __("Price") }}
                </label>
                <input
                    class="border-2 border-black px-4 py-2 font-medium outline-none"
                    id="price"
                    name="price"
                    type="number"
                    value="{{ old("price") }}"
                    placeholder="{{ __("Price") }}"
                    required
                    min="0"
                    wire:model.blur="price"
                />
                @error("price")
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex flex-col gap-2">
                <label class="flex min-w-48 font-medium">
                    {{ __("Managed Stock?") }}
                </label>
                <div class="flex flex-col gap-2">
                    <div class="flex flex-1">
                        <input
                            class="peer hidden"
                            id="managed-stock-true"
                            name="managed_stock"
                            type="radio"
                            value="1"
                            required
                            wire:model.change="managed_stock"
                        />
                        <label
                            class="inline-flex w-full cursor-pointer items-center justify-between border-2 border-black bg-white p-5 text-black hover:bg-black hover:text-white peer-checked:border-black peer-checked:bg-black peer-checked:text-white"
                            for="managed-stock-true"
                        >
                            <div class="block">
                                <div class="w-full text-lg font-semibold">
                                    {{ __("Yes") }}
                                </div>
                                <div class="w-full">
                                    {{ __("You can manage stock quantity.") }}
                                </div>
                            </div>
                        </label>
                    </div>
                    <div class="flex flex-1">
                        <input
                            class="peer hidden"
                            id="managed-stock-false"
                            name="managed_stock"
                            type="radio"
                            value="0"
                            required
                            wire:model.change="managed_stock"
                        />
                        <label
                            class="inline-flex w-full cursor-pointer items-center justify-between border-2 border-black bg-white p-5 text-black hover:bg-black hover:text-white peer-checked:border-black peer-checked:bg-black peer-checked:text-white"
                            for="managed-stock-false"
                        >
                            <div class="block">
                                <div class="w-full text-lg font-semibold">
                                    {{ __("No") }}
                                </div>
                                <div class="w-full">
                                    {{ __("You can only manage stock available with Stock Status.") }}
                                </div>
                            </div>
                        </label>
                    </div>
                </div>
                @error("managed_stock")
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>

            @if ($managed_stock)
                <div class="flex flex-1 flex-col gap-2" wire:transition>
                    <label class="font-medium" for="stock-quantity">
                        {{ __("Stock Quantity") }}
                    </label>
                    <input
                        class="border-2 border-black px-4 py-3 font-medium outline-none"
                        id="stock-quantity"
                        name="stock_quantity"
                        type="number"
                        value="{{ old("stock_quantity") }}"
                        placeholder="{{ __("Stock Quantity") }}"
                        required
                        autofocus
                        min="0"
                        wire:model.blur="stock_quantity"
                    />
                    @error("stock_quantity")
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
            @endif
        </div>
        <div class="flex flex-col gap-2">
            <label class="flex flex-col gap-1" for="stock-status">
                <span class="font-medium">{{ __("Stock Status") }}</span>
                @if ($managed_stock)
                    <span>
                        {{ __("Sets automatically depends on stock quantity.") }}
                    </span>
                @endif
            </label>
            <select
                class="border-2 border-black px-4 py-2 font-medium outline-none"
                id="stock-status"
                name="stock_status"
                wire:model.change="stock_status"
                @disabled($managed_stock)
            >
                @foreach ($this->productStockStatuses as $productStockStatusKey => $productStockStatusName)
                    <option
                        value="{{ $productStockStatusKey }}"
                        wire:key="product-stock-status-{{ $productStockStatusKey }}"
                        @selected(old("stock_status") == $productStockStatusKey)
                    >
                        {{ $productStockStatusName }}
                    </option>
                @endforeach
            </select>
            @error("stock_status")
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-col gap-2">
            <label class="flex flex-col gap-1" for="category">
                <span class="font-medium">{{ __("Category") }}</span>
            </label>
            <select
                class="border-2 border-black px-4 py-2 font-medium outline-none"
                id="category"
                name="category_id"
                wire:model.change="category_id"
            >
                <option value="">{{ __("No Selected") }}</option>
                @foreach ($this->categories as $category)
                    <option
                        value="{{ $category["id"] }}"
                        wire:key="category-{{ $category["id"] }}"
                        @selected(old("category_id") == $category["id"])
                    >
                        {{ $category["name"] }}
                    </option>
                @endforeach
            </select>
            @error("category_id")
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-col gap-2">
            <label class="flex flex-col gap-1" for="subcategory">
                <span class="font-medium">{{ __("Subcategory") }}</span>
            </label>
            <select
                class="border-2 border-black px-4 py-2 font-medium outline-none"
                id="subcategory"
                name="subcategory_id"
                wire:model.change="subcategory_id"
                @disabled($this->subcategories->isEmpty())
            >
                <option value="">{{ __("No Selected") }}</option>
                @foreach ($this->subcategories as $category)
                    <option
                        value="{{ $category["id"] }}"
                        wire:key="category-{{ $category["id"] }}"
                        @selected(old("category_id") == $category["id"])
                    >
                        {{ $category["name"] }}
                    </option>
                @endforeach
            </select>
            @error("subcategory_id")
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex gap-2">
            <input
                class="h-6 w-6 appearance-none border-2 border-black ring-2 ring-white checked:border-white checked:bg-black checked:ring-black"
                id="featured"
                name="featured"
                type="checkbox"
                value="1"
                wire:model.change="featured"
            />
            <label class="flex flex-col gap-1" for="featured">
                <span class="font-medium">
                    {{ __("Set as featured product") }}
                </span>
                <span>
                    {{ __("This product will displayed at featured section.") }}
                </span>
            </label>
        </div>
        <hr />
        <button
            class="border-2 border-black bg-black px-4 py-2 font-medium uppercase tracking-wide text-white duration-100 ease-linear hover:bg-white hover:text-black"
            type="submit"
            wire:loading.attr="disabled"
            wire:loading.class="opacity-50"
        >
            {{ __("Add Product") }}
        </button>
    </div>
</form>
