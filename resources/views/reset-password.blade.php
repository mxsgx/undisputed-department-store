@extends('layouts.base')

@section('title', __('Create a New Password'))

@section('body')
    <section class="flex justify-center px-6">
        <div class="container flex flex-col items-center pb-8">
            <div class="flex justify-center items-center py-8">
                <h2 class="text-3xl font-bold uppercase tracking-wide">{{ __('Create a New Password') }}</h2>
            </div>
            <livewire:forms.reset-password-form :token="$token" />
        </div>
    </section>
@endsection
