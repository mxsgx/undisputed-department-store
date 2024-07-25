<div class="flex justify-center p-4">
    <div class="container grid grid-cols-12 gap-6">
        <form
            class="col-span-12 flex flex-col gap-6 md:col-span-4 lg:col-span-3"
            method="get"
            wire:submit.prevent
        >
            <div class="flex flex-col gap-4">
                <h3 class="text-3xl font-medium">
                    {{ __("Shop") }}
                </h3>
                <input
                    class="border-2 border-black px-3 py-2 outline-none"
                    id="search"
                    name="search"
                    type="search"
                    placeholder="{{ __("Search products...") }}"
                    wire:model.change="search"
                />
            </div>
            <ul class="flex flex-col gap-1">
                @foreach ($categories as $category)
                    <li
                        class="flex flex-col"
                        x-data="{ isOpen: true }"
                        wire:key="category-{{ $category->id }}"
                    >
                        <a
                            class="flex flex-1 items-center justify-between py-2 text-xl font-medium"
                            href="javascript:void(0)"
                            x-on:click="isOpen = !isOpen"
                        >
                            <span>{{ $category->name }}</span>
                            <svg
                                :class="{'rotate-180': isOpen}"
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            >
                                <path
                                    stroke="none"
                                    d="M0 0h24v24H0z"
                                    fill="none"
                                />
                                <path d="M6 9l6 6l6 -6" />
                            </svg>
                        </a>

                        <div
                            class="flex flex-col gap-1 text-lg font-light"
                            x-transition.scale.origin.top
                            x-show="isOpen"
                        >
                            <div>
                                <input
                                    class="peer hidden"
                                    id="category-{{ $category->id }}"
                                    name="category[]"
                                    type="checkbox"
                                    value="{{ $category->id }}"
                                    wire:model.change="selectedCategories"
                                />
                                <label
                                    class="block cursor-pointer text-right font-light hover:underline peer-checked:font-medium"
                                    for="category-{{ $category->id }}"
                                >
                                    {{ __("All :name", ["name" => $category->name]) }}
                                </label>
                            </div>
                            @foreach ($category->children as $subcategory)
                                <div
                                    wire:key="category-{{ $subcategory->id }}"
                                >
                                    <input
                                        class="peer hidden"
                                        id="category-{{ $subcategory->id }}"
                                        name="category[]"
                                        type="checkbox"
                                        value="{{ $subcategory->id }}"
                                        wire:model.change="selectedSubcategories"
                                    />
                                    <label
                                        class="block cursor-pointer text-right font-light hover:underline peer-checked:font-medium"
                                        for="category-{{ $subcategory->id }}"
                                    >
                                        {{ $subcategory->name }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </li>
                @endforeach
            </ul>
        </form>
        <div
            class="col-span-12 grid grid-cols-2 md:col-span-8 md:grid-cols-3 lg:col-span-9 lg:grid-cols-4"
        >
            @foreach ($products as $product)
                <x-product-card-shop :$product />
            @endforeach

            @if ($products->onLastPage())
                <div class="col-span-full py-4 text-center font-light italic">
                    <p class="font-handwriting text-3xl text-gray-300">
                        {{ __('That\'s all folks!') }}
                    </p>
                </div>
            @endif

            <div class="col-span-full py-4">
                {{ $products->links() }}
            </div>
        </div>
    </div>
</div>
