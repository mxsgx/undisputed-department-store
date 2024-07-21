<header
    class="flex w-full justify-end border-b-2 border-b-[#111111] bg-black px-4 py-6 text-white"
>
    <a
        href="{{ route("logout") }}"
        title="{{ __("Logout") }}"
        class="flex items-center justify-center gap-2 p-2"
        onclick="event.preventDefault();document.getElementById('logout-form').submit();"
    >
        <span class="text-left align-middle font-medium uppercase">
            {{ __("Logout") }}
        </span>
        <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="icon icon-tabler icons-tabler-outline icon-tabler-logout"
        >
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path
                d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"
            />
            <path d="M9 12h12l-3 -3" />
            <path d="M18 15l3 -3" />
        </svg>
    </a>
</header>
