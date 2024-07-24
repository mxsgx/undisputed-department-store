@extends("layouts.admin")

@section("title", __("Oops! This feature is under development"))

@section("body")
    <div class="flex grow flex-col items-center justify-center p-4">
        <div class="flex flex-col items-center justify-center gap-8">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                width="256"
                height="256"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
            >
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path
                    d="M4 7m0 1a1 1 0 0 1 1 -1h14a1 1 0 0 1 1 1v7a1 1 0 0 1 -1 1h-14a1 1 0 0 1 -1 -1z"
                />
                <path d="M7 16v4" />
                <path d="M7.5 16l9 -9" />
                <path d="M13.5 16l6.5 -6.5" />
                <path d="M4 13.5l6.5 -6.5" />
                <path d="M17 16v4" />
                <path d="M5 20h4" />
                <path d="M15 20h4" />
                <path d="M17 7v-2" />
                <path d="M7 7v-2" />
            </svg>
            <p class="text-5xl font-medium">{{ __("Oops!") }}</p>
            <h3
                class="text-center text-6xl font-medium tracking-wide text-gray-500"
            >
                {{ __("This feature is under development") }}
            </h3>
        </div>
    </div>
@endsection
