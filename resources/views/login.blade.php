@extends("layouts.base")

@section("title", __("Member Area"))

@section("body")
    <section class="flex justify-center px-6">
        <div class="container flex flex-col items-center pb-8">
            <div class="flex items-center justify-center py-8">
                <h2 class="text-3xl font-bold uppercase tracking-wide">
                    {{ __("Member Area") }}
                </h2>
            </div>
            <livewire:forms.login-form />
        </div>
    </section>
@endsection
