<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>
            @yield("title", __("Welcome")) - {{ config("app.name") }}
        </title>
        <link rel="shortcut icon" href="{{ asset("favicon.ico") }}" />
        <link
            rel="apple-touch-icon"
            sizes="180x180"
            href="{{ asset("apple-touch-icon.png") }}"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="32x32"
            href="{{ asset("favicon-32x32.png") }}"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="16x16"
            href="{{ asset("favicon-16x16.png") }}"
        />
        <link rel="manifest" href="{{ asset("site.webmanifest") }}" />
        <meta name="theme-color" content="#ffffff" />
        <meta name="color-scheme" content="light" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
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
