@extends("layouts.admin")

@section("title", __("Manage Categories"))

@section("body")
    <div class="flex flex-col gap-4 p-4">
        <div class="flex justify-between py-2">
            <div class="flex flex-col">
                <p class="text-sm uppercase">{{ __("Manage") }}</p>
                <h3 class="text-2xl font-bold uppercase tracking-tighter">
                    {{ __("Categories") }}
                </h3>
            </div>
        </div>
        <div class="flex flex-col gap-4 md:flex-row">
            <livewire:tables.categories-table />
            <livewire:forms.create-category-form />
        </div>
    </div>
@endsection
