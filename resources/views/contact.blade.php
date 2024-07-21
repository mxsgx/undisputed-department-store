@extends("layouts.base")

@section("title", __("Contact"))

@section("body")
    <section class="flex justify-center px-6">
        <div class="container flex flex-col items-center pb-8">
            <div class="flex items-center justify-center py-8">
                <h2 class="text-3xl font-bold uppercase tracking-wide">
                    {{ __("Contact") }}
                </h2>
            </div>
            <livewire:forms.contact-form />
            <div class="flex w-full flex-col gap-2 py-4 text-lg">
                <h3 class="text-2xl font-medium">{{ __("Find us on") }}</h3>
                <p>
                    <b>Instagram</b>
                    :
                    <a
                        href="https://instagram.com/undsptd.dept"
                        target="_blank"
                    >
                        https://instagram.com/undsptd.dept
                    </a>
                </p>
                <p>
                    <b>TikTok</b>
                    :
                    <a href="https://tiktok.com/@undsptd.dept" target="_blank">
                        https://tiktok.com/@undsptd.dept
                    </a>
                </p>
                <p>
                    <b>Shopee</b>
                    :
                    <a href="https://shopee.co.id/undsptd.dept" target="_blank">
                        https://shopee.co.id/undsptd.dept
                    </a>
                </p>
            </div>
        </div>
    </section>
@endsection
