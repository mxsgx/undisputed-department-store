<header
    class="z-50 flex w-full items-center justify-center bg-black px-6 py-4 text-white"
    id="header"
>
    <div class="container">
        <div
            class="flex flex-col items-center justify-between gap-4 md:flex-row"
        >
            <div class="flex w-full items-center justify-between md:w-auto">
                <a class="h-16" href="{{ route("home") }}">
                    <img
                        class="h-full"
                        id="logo-icon"
                        src="{{ asset("images/logo-icon.png") }}"
                        alt="{{ config("app.name") }}"
                    />
                    <img
                        class="hidden h-full"
                        id="logo-text"
                        src="{{ asset("images/logo-text.png") }}"
                        alt="{{ config("app.name") }}"
                    />
                </a>
                <a class="text-right md:hidden" id="menu" href="#">
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
                        <path d="M4 6l16 0" />
                        <path d="M4 12l16 0" />
                        <path d="M4 18l16 0" />
                    </svg>
                </a>
            </div>
            <div
                class="hidden w-full flex-col items-start justify-start border-2 font-medium ring-white md:flex md:w-auto md:flex-row md:items-center md:justify-end md:gap-4 md:border-0"
                id="navigation"
            >
                <nav
                    class="flex w-full flex-col items-center uppercase tracking-wide md:w-auto md:flex-row md:gap-4"
                >
                    <a
                        class="w-full border-b-2 border-b-white p-4 duration-150 ease-linear hover:border-b-white md:w-auto md:border-y-2 md:border-transparent md:p-0"
                        href="{{ route("home") }}"
                        title="{{ __("Home") }}"
                    >
                        {{ __("Home") }}
                    </a>
                    <a
                        class="w-full border-b-2 border-b-white p-4 duration-150 ease-linear hover:border-b-white md:w-auto md:border-y-2 md:border-transparent md:p-0"
                        href="{{ route("shop") }}"
                        title="{{ __("Shop") }}"
                    >
                        {{ __("Shop") }}
                    </a>
                    <a
                        class="w-full border-b-2 border-b-white p-4 duration-150 ease-linear hover:border-b-white md:w-auto md:border-y-2 md:border-transparent md:p-0"
                        href="{{ route("about") }}"
                        title="{{ __("About") }}"
                    >
                        {{ __("About") }}
                    </a>
                    <a
                        class="w-full border-b-2 border-b-white p-4 duration-150 ease-linear hover:border-b-white md:w-auto md:border-y-2 md:border-transparent md:p-0"
                        href="{{ route("contact") }}"
                        title="{{ __("Contact") }}"
                    >
                        {{ __("Contact") }}
                    </a>
                </nav>
                <div
                    class="flex w-full flex-col items-center md:w-auto md:flex-row md:gap-4 md:pl-8"
                >
                    <livewire:cart />

                    @auth
                        @if (auth()->user()->role === \App\Enums\UserRole::ADMIN)
                            <a
                                class="flex w-full gap-2 p-4 md:w-auto md:p-0"
                                href="{{ route("dashboard") }}"
                                title="{{ __("Visit Dashboard") }}"
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
                                    <path
                                        stroke="none"
                                        d="M0 0h24v24H0z"
                                        fill="none"
                                    />
                                    <path
                                        d="M12 13m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"
                                    />
                                    <path d="M13.45 11.55l2.05 -2.05" />
                                    <path d="M6.4 20a9 9 0 1 1 11.2 0z" />
                                </svg>
                                <span
                                    class="align-middle font-medium uppercase tracking-wide"
                                >
                                    {{ __("Dashboard") }}
                                </span>
                            </a>
                        @endif

                        <a
                            class="flex w-full gap-2 p-4 md:w-auto md:p-0"
                            href="{{ route("logout") }}"
                            title="{{ __("Logout") }}"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();"
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
                                <path
                                    stroke="none"
                                    d="M0 0h24v24H0z"
                                    fill="none"
                                />
                                <path
                                    d="M10 8v-2a2 2 0 0 1 2 -2h7a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-2"
                                />
                                <path d="M15 12h-12l3 -3" />
                                <path d="M6 15l-3 -3" />
                            </svg>
                            <span
                                class="align-middle font-medium uppercase tracking-wide"
                            >
                                {{ __("Logout") }}
                            </span>
                        </a>
                    @endauth

                    @guest
                        <a
                            class="flex w-full gap-2 p-4 md:w-auto md:p-0"
                            href="{{ route("login") }}"
                            title="{{ __("Login as Member") }}"
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
                                <path
                                    stroke="none"
                                    d="M0 0h24v24H0z"
                                    fill="none"
                                />
                                <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                <path
                                    d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"
                                />
                            </svg>
                            <span
                                class="align-middle font-medium uppercase tracking-wide"
                            >
                                {{ __("Guest") }}
                            </span>
                        </a>
                    @endguest
                </div>
            </div>
        </div>
    </div>
</header>
