@extends("layouts.admin")

@section("title", __("Add Product - Manage Product"))

@section("body")
    <div class="flex flex-col gap-4 p-4">
        <div class="flex justify-between py-2">
            <div class="flex flex-col">
                <p class="text-sm uppercase">{{ __("Manage Product") }}</p>
                <h3 class="text-2xl font-bold uppercase tracking-tighter">
                    {{ __("Add Product") }}
                </h3>
            </div>
        </div>
        <livewire:forms.create-product-form />
    </div>
@endsection
