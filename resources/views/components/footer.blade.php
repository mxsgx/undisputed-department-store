<footer class="bg-black text-white w-full flex justify-center py-12 px-6 mt-auto">
    <div class="container flex flex-col gap-8">
        <div class="flex flex-col gap-4 md:gap-0 md:flex-row justify-between items-center uppercase">
            <div class="flex flex-col gap-8">
                <img src="{{ asset('images/logo-full-no-background.png') }}" alt="{{ config('app.name') }}" class="w-96">
                <p class="text-md tracking-wide">Jejeran II, Wonokromo, Pleret, Bantul, Yogyakarta</p>
            </div>
            <div class="flex flex-col gap-4">
                <nav class="flex gap-4 font-medium tracking-wide">
                    <a href="{{ route('how-to-order') }}" title="{{ __('How to Order') }}">{{ __('How to Order') }}</a>
                </nav>
                <div class="flex gap-4 justify-end">
                    <a href="https://www.instagram.com/undsptd.dept" title="{{ __('Find us on Instagram') }}" target="_blank">
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="32"  height="32"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-brand-instagram"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" /><path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /><path d="M16.5 7.5l0 .01" /></svg>
                        <span class="sr-only">{{ __('Instagram') }}</span>
                    </a>
                    <a href="https://shopee.co.id/undsptd.dept" title="{{ __('Find us on Shopee') }}" target="_blank">
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="32"  height="32"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-brand-shopee"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7l.867 12.143a2 2 0 0 0 2 1.857h10.276a2 2 0 0 0 2 -1.857l.867 -12.143h-16z" /><path d="M8.5 7c0 -1.653 1.5 -4 3.5 -4s3.5 2.347 3.5 4" /><path d="M9.5 17c.413 .462 1 1 2.5 1s2.5 -.897 2.5 -2s-1 -1.5 -2.5 -2s-2 -1.47 -2 -2c0 -1.104 1 -2 2 -2s1.5 0 2.5 1" /></svg>
                        <span class="sr-only">{{ __('Shopee') }}</span>
                    </a>
                    <a href="https://tiktok.com/@undsptd.dept" title="{{ __('Find us on TikTok') }}" target="_blank">
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="32"  height="32"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-brand-tiktok"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M21 7.917v4.034a9.948 9.948 0 0 1 -5 -1.951v4.5a6.5 6.5 0 1 1 -8 -6.326v4.326a2.5 2.5 0 1 0 4 2v-11.5h4.083a6.005 6.005 0 0 0 4.917 4.917z" /></svg>
                        <span class="sr-only">{{ __('Shopee') }}</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="flex justify-center">
            <p>&copy; {{ __('Copyright :year :name. All right reserved.', ['year' => date('Y'), 'name' => config('app.name')]) }}</p>
        </div>
    </div>
</footer>
