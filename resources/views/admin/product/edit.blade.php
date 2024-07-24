@extends("layouts.admin")

@section("title", __("Edit \":name\" Product - Manage Product", ["name" => $product->name]))

@section("body")
    <div class="flex flex-col gap-4 p-4">
        <div class="flex justify-between py-2">
            <div class="flex flex-col">
                <p class="text-sm uppercase">{{ __("Manage Product") }}</p>
                <h3 class="text-2xl font-bold uppercase tracking-tighter">
                    {{ __("Edit \":name\" Product", ["name" => $product->name]) }}
                </h3>
            </div>
        </div>
        <livewire:forms.edit-product-form :$product />
    </div>
@endsection
