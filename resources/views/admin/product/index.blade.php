@extends("layouts.admin")

@section("title", __("Manage Products"))

@section("body")
    <div class="flex flex-col gap-4 p-4">
        <div class="flex justify-between py-2">
            <div class="flex flex-col">
                <p class="text-sm uppercase">{{ __("Manage") }}</p>
                <h3 class="text-2xl font-bold uppercase tracking-tighter">
                    {{ __("Products") }}
                </h3>
            </div>
            <div class="flex items-center gap-2">
                <a
                    class="border-2 border-black bg-black px-4 py-2 font-medium uppercase tracking-wide text-white duration-100 ease-linear hover:bg-white hover:text-black md:hidden"
                    href="{{ route("products.create") }}"
                >
                    <svg
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
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 5l0 14" />
                        <path d="M5 12l14 0" />
                    </svg>
                </a>
                <a
                    class="hidden border-2 border-black bg-black px-4 py-2 font-medium uppercase tracking-wide text-white duration-100 ease-linear hover:bg-white hover:text-black md:flex"
                    href="{{ route("products.create") }}"
                >
                    {{ __("Add Product") }}
                </a>
            </div>
        </div>
        <div class="flex flex-col gap-4 md:flex-row">
            <livewire:tables.products-table />
        </div>
    </div>
@endsection
