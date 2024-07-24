<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>
            @yield("title", __("Welcome")) - {{ config("app.name") }}
        </title>
        <link href="{{ asset("favicon.ico") }}" rel="shortcut icon" />
        <link
            href="{{ asset("apple-touch-icon.png") }}"
            rel="apple-touch-icon"
            sizes="180x180"
        />
        <link
            type="image/png"
            href="{{ asset("favicon-32x32.png") }}"
            rel="icon"
            sizes="32x32"
        />
        <link
            type="image/png"
            href="{{ asset("favicon-16x16.png") }}"
            rel="icon"
            sizes="16x16"
        />
        <link href="{{ asset("site.webmanifest") }}" rel="manifest" />
        <meta name="theme-color" content="#ffffff" />
        <meta name="color-scheme" content="light" />
        <link href="https://fonts.googleapis.com" rel="preconnect" />
        <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap"
            rel="stylesheet"
        />

        @vite(["resources/css/app.css", "resources/js/admin.js"])
        @stack("head")
    </head>
    <body class="flex min-h-screen">
        <x-admin.sidebar />
        <section class="flex grow flex-col" id="content">
            <x-admin.header />
            <livewire:alerts />
            @yield("body")
            <x-admin.footer />

            @stack("body")

            @auth
                <form
                    id="logout-form"
                    action="{{ route("logout") }}"
                    method="post"
                    style="display: none"
                >
                    @csrf
                </form>
            @endauth
        </section>
    </body>
</html>
