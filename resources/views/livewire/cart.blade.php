<a
    class="flex w-full gap-2 p-4 md:w-auto md:p-0"
    href="{{ route("cart") }}"
    title="{{ __("Cart") }}"
>
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
    >
        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
        <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
        <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
        <path d="M17 17h-11v-14h-2" />
        <path d="M6 5l14 1l-1 7h-13" />
    </svg>
    <span class="align-middle font-medium uppercase tracking-wide">
        {{ __("Cart") }} ({{ $count }})
    </span>
</a>
