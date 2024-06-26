<header class="w-full flex justify-center items-center bg-black text-white py-4 px-6" id="header">
    <div class="container">
        <div class="flex flex-col md:flex-row justify-between items-center gap-4">
            <div class="w-full md:w-auto flex justify-between items-center">
                <a href="{{ route('home') }}" class="h-16">
                    <img src="{{ asset('images/logo-icon.png') }}" alt="{{ config('app.name') }}" class="h-full" id="logo-icon">
                    <img src="{{ asset('images/logo-text.png') }}" alt="{{ config('app.name') }}" class="h-full hidden" id="logo-text">
                </a>
                <a href="#" class="md:hidden text-right" id="menu">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-menu-2"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M4 6l16 0" /><path d="M4 12l16 0" /><path d="M4 18l16 0" /></svg>
                </a>
            </div>
            <div class="border-2 md:border-0 ring-white hidden w-full md:w-auto md:flex flex-col md:flex-row justify-start md:justify-end md:gap-4 font-medium items-start md:items-center" id="navigation">
                <nav class="w-full md:w-auto flex gap-4 items-center uppercase tracking-wide">
                    <a href="{{ route('home') }}" title="{{ __('Home') }}" class="p-4 w-full md:p-0 md:w-auto border-b-2 md:border-b-0 border-white">{{ __('Home') }}</a>
                    <a href="{{ route('about') }}" title="{{ __('About') }}" class="p-4 w-full md:p-0 md:w-auto border-b-2 md:border-b-0 border-white">{{ __('About') }}</a>
                    <a href="{{ route('contact') }}" title="{{ __('Contact') }}" class="p-4 w-full md:p-0 md:w-auto border-b-2 md:border-b-0 border-white">{{ __('Contact') }}</a>
                </nav>
                <div class="w-full md:w-auto flex flex-col md:flex-row md:gap-4 items-center md:pl-8">
                    @auth
                        @if(auth()->user()->role === \App\Enums\UserRole::ADMIN)
                            <a href="{{ route('dashboard') }}" title="{{ __('Visit Dashboard') }}" class="flex gap-2 p-4 w-full md:p-0 md:w-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-dashboard"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M12 13m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M13.45 11.55l2.05 -2.05" /><path d="M6.4 20a9 9 0 1 1 11.2 0z" /></svg>
                                <span class="uppercase font-medium tracking-wide align-middle">{{ __('Dashboard') }}</span>
                            </a>
                        @endif
                        <a href="{{ route('logout') }}" title="{{ __('Logout') }}" class="flex gap-2 p-4 w-full md:p-0 md:w-auto" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-logout-2"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M10 8v-2a2 2 0 0 1 2 -2h7a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-2" /><path d="M15 12h-12l3 -3" /><path d="M6 15l-3 -3" /></svg>
                            <span class="uppercase font-medium tracking-wide align-middle">{{ __('Logout') }}</span>
                        </a>
                    @endauth

                    @guest
                        <a href="{{ route('login') }}" title="{{ __('Login as Member') }}" class="flex gap-2 p-4 w-full md:p-0 md:w-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" /><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /></svg>
                            <span>{{ __('Guest') }}</span>
                        </a>
                    @endguest
                </div>
            </div>
        </div>
    </div>
</header>
