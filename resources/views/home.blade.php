@extends("layouts.base")

@section("body")
    <section class="flex flex-col items-center">
        <img
            src="{{ asset("images/hero.png") }}"
            alt="{{ config("app.name") }}"
            class="w-full"
        />
    </section>
@endsection
