@extends("layouts.base")

@section("title", __("Order Tracking"))

@section("body")
    <section class="flex justify-center px-6">
        <div class="container flex flex-col items-center pb-8">
            <div class="flex items-center justify-center py-8">
                <h2 class="text-3xl font-bold uppercase tracking-wide">
                    {{ __("Order Tracking") }}
                </h2>
            </div>
            <livewire:forms.order-tracking-form />
        </div>
    </section>
@endsection
