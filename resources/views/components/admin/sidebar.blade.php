<aside
    class="group fixed z-50 flex h-full flex-col justify-between gap-4 overflow-y-auto border-r-2 border-r-[#111111] bg-black text-white"
    id="sidebar"
>
    <div class="flex flex-col gap-4 px-4">
        <a
            class="flex items-center justify-center gap-2 py-8"
            href="{{ route("home") }}"
        >
            <img
                class="h-16 w-16"
                src="{{ asset("images/logo-icon.png") }}"
                alt="{{ config("app.name") }}"
            />
        </a>
        <nav class="flex flex-col">
            <a
                href="{{ route("dashboard") }}"
                title="{{ __("Dashboard") }}"
                @class(["flex items-center gap-4 border-2 p-4 duration-150 ease-linear", "border-white bg-white text-black hover:bg-black hover:text-white" => request()->routeIs("dashboard"), "border-black hover:border-white hover:bg-white hover:text-black" => ! request()->routeIs("dashboard")])
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="32"
                    height="32"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                >
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path
                        d="M5 4h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1"
                    />
                    <path
                        d="M5 16h4a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-2a1 1 0 0 1 1 -1"
                    />
                    <path
                        d="M15 12h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1"
                    />
                    <path
                        d="M15 4h4a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-2a1 1 0 0 1 1 -1"
                    />
                </svg>
                <span
                    class="sidebar-menu-text hidden min-w-48 text-lg font-medium uppercase tracking-wider group-hover:block"
                >
                    {{ __("Dashboard") }}
                </span>
            </a>
            <a
                href="{{ route("categories.index") }}"
                title="{{ __("Categories") }}"
                @class(["flex items-center gap-4 border-2 p-4 duration-150 ease-linear", "border-white bg-white text-black hover:bg-black hover:text-white" => request()->routeIs("categories.*"), "border-black hover:border-white hover:bg-white hover:text-black" => ! request()->routeIs("categories.*")])
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="32"
                    height="32"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                >
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path
                        d="M3 8v4.172a2 2 0 0 0 .586 1.414l5.71 5.71a2.41 2.41 0 0 0 3.408 0l3.592 -3.592a2.41 2.41 0 0 0 0 -3.408l-5.71 -5.71a2 2 0 0 0 -1.414 -.586h-4.172a2 2 0 0 0 -2 2z"
                    />
                    <path
                        d="M18 19l1.592 -1.592a4.82 4.82 0 0 0 0 -6.816l-4.592 -4.592"
                    />
                    <path d="M7 10h-.01" />
                </svg>
                <span
                    class="sidebar-menu-text hidden min-w-48 text-lg font-medium uppercase tracking-wider group-hover:block"
                >
                    {{ __("Categories") }}
                </span>
            </a>
            <a
                href="{{ route("products.index") }}"
                title="{{ __("Products") }}"
                @class(["flex items-center gap-4 border-2 p-4 duration-150 ease-linear", "border-white bg-white text-black hover:bg-black hover:text-white" => request()->routeIs("products.*"), "border-black hover:border-white hover:bg-white hover:text-black" => ! request()->routeIs("products.*")])
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="32"
                    height="32"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                >
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path
                        d="M15 4l6 2v5h-3v8a1 1 0 0 1 -1 1h-10a1 1 0 0 1 -1 -1v-8h-3v-5l6 -2a3 3 0 0 0 6 0"
                    />
                </svg>
                <span
                    class="sidebar-menu-text hidden min-w-48 text-lg font-medium uppercase tracking-wider group-hover:block"
                >
                    {{ __("Products") }}
                </span>
            </a>
            <a
                href="{{ route("orders.index") }}"
                title="{{ __("Orders") }}"
                @class(["flex items-center gap-4 border-2 p-4 duration-150 ease-linear", "border-white bg-white text-black hover:bg-black hover:text-white" => request()->routeIs("orders.*"), "border-black hover:border-white hover:bg-white hover:text-black" => ! request()->routeIs("orders.*")])
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="32"
                    height="32"
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
                <span
                    class="sidebar-menu-text hidden min-w-48 text-lg font-medium uppercase tracking-wider group-hover:block"
                >
                    {{ __("Orders") }}
                </span>
            </a>
            <a
                href="{{ route("customers.index") }}"
                title="{{ __("Customers") }}"
                @class(["flex items-center gap-4 border-2 p-4 duration-150 ease-linear", "border-white bg-white text-black hover:bg-black hover:text-white" => request()->routeIs("customers.*"), "border-black hover:border-white hover:bg-white hover:text-black" => ! request()->routeIs("customers.*")])
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="32"
                    height="32"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                >
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                    <path d="M6 21v-2a4 4 0 0 1 4 -4h3" />
                    <path
                        d="M21 15h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5"
                    />
                    <path d="M19 21v1m0 -8v1" />
                </svg>
                <span
                    class="sidebar-menu-text hidden min-w-48 text-lg font-medium uppercase tracking-wider group-hover:block"
                >
                    {{ __("Customers") }}
                </span>
            </a>
            <a
                href="{{ route("users.index") }}"
                title="{{ __("Users") }}"
                @class(["flex items-center gap-4 border-2 p-4 duration-150 ease-linear", "border-white bg-white text-black hover:bg-black hover:text-white" => request()->routeIs("users.*"), "border-black hover:border-white hover:bg-white hover:text-black" => ! request()->routeIs("users.*")])
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="32"
                    height="32"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                >
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                    <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                    <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                    <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                </svg>
                <span
                    class="sidebar-menu-text hidden min-w-48 text-lg font-medium uppercase tracking-wider group-hover:block"
                >
                    {{ __("Users") }}
                </span>
            </a>
        </nav>
    </div>
    <div class="flex items-center justify-center py-8">
        <a
            class="flex rotate-90 border-2 border-white p-4 duration-150 ease-linear hover:bg-white hover:text-black group-hover:rotate-0"
            id="menu"
            href="#"
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
                <path d="M15 6l-6 6l6 6" />
            </svg>
        </a>
    </div>
</aside>
