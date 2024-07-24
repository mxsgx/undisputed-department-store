@extends("layouts.base")

@section("body")
    <section class="flex flex-col items-center">
        <img
            class="w-full"
            src="{{ asset("images/hero.png") }}"
            alt="{{ config("app.name") }}"
        />
    </section>
@endsection
