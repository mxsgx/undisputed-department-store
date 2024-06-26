@extends('layouts.admin')

@section('title', __('Dashboard'))

@section('body')
    <div class="p-4 flex flex-col gap-4">
        <div class="flex justify-between py-2">
            <div class="flex flex-col">
                <p class="text-sm uppercase">{{ __('Overview') }}</p>
                <h3 class="font-bold uppercase tracking-tighter text-2xl">{{ __('Dashboard') }}</h3>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-4">
            <section class="flex flex-col p-4 bg-black text-white gap-4 ring-2 ring-black border-2 border-white">
                <div>
                    <p class="font-medium uppercase">{{ __('Products') }}</p>
                </div>
                <div class="flex gap-4">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-shirt"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M15 4l6 2v5h-3v8a1 1 0 0 1 -1 1h-10a1 1 0 0 1 -1 -1v-8h-3v-5l6 -2a3 3 0 0 0 6 0" /></svg>
                    </div>
                    <div class="text-6xl grow">∞</div>
                </div>
            </section>
            <section class="flex flex-col p-4 bg-black text-white gap-4 ring-2 ring-black border-2 border-white">
                <div>
                    <p class="font-medium uppercase">{{ __('Categories') }}</p>
                </div>
                <div class="flex gap-4">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-tags"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M3 8v4.172a2 2 0 0 0 .586 1.414l5.71 5.71a2.41 2.41 0 0 0 3.408 0l3.592 -3.592a2.41 2.41 0 0 0 0 -3.408l-5.71 -5.71a2 2 0 0 0 -1.414 -.586h-4.172a2 2 0 0 0 -2 2z" /><path d="M18 19l1.592 -1.592a4.82 4.82 0 0 0 0 -6.816l-4.592 -4.592" /><path d="M7 10h-.01" /></svg>
                    </div>
                    <div class="text-6xl grow">∞</div>
                </div>
            </section>
            <section class="flex flex-col p-4 bg-black text-white gap-4 ring-2 ring-black border-2 border-white">
                <div>
                    <p class="font-medium uppercase">{{ __('Orders') }}</p>
                </div>
                <div class="flex gap-4">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 17h-11v-14h-2" /><path d="M6 5l14 1l-1 7h-13" /></svg>
                    </div>
                    <div class="text-6xl grow">∞</div>
                </div>
            </section>
            <section class="flex flex-col p-4 bg-black text-white gap-4 ring-2 ring-black border-2 border-white">
                <div>
                    <p class="font-medium uppercase">{{ __('Customers') }}</p>
                </div>
                <div class="flex gap-4">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user-dollar"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" /><path d="M6 21v-2a4 4 0 0 1 4 -4h3" /><path d="M21 15h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5" /><path d="M19 21v1m0 -8v1" /></svg>
                    </div>
                    <div class="text-6xl grow">∞</div>
                </div>
            </section>
        </div>
    </div>
@endsection
