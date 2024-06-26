@extends('layouts.base')

@section('title', __('About'))

@section('body')
    <section class="flex justify-center py-8 px-4">
        <div class="container flex flex-col gap-4 text-lg text-justify">
            <div class="flex flex-col gap-8 items-center justify-center py-4">
                <img src="{{ asset('images/logo-full.png') }}" class="w-96" alt="{{ config('app.name') }}">
                <h1 class="text-4xl uppercase font-bold tracking-wide">{{ __('About') }}</h1>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed dolor sed purus malesuada porttitor. Aenean condimentum ornare justo non euismod. Maecenas finibus fermentum erat, eu auctor ante pharetra sed. Ut quis urna cursus, ullamcorper dolor in, mattis metus. Nam et augue vel odio dictum lacinia. Fusce tempor rhoncus augue. Proin a quam tincidunt, suscipit nunc laoreet, posuere justo. Proin id odio nec est vestibulum pharetra at id elit. Nulla vel lectus dignissim, porttitor turpis in, molestie odio. Phasellus a sapien consequat sem rhoncus gravida. Aenean nisl velit, pulvinar vitae tristique non, porttitor nec nisl.</p>
            <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam erat nulla, vehicula eu sodales id, aliquam non lorem. Duis ut ipsum vehicula, consequat enim sed, ultrices mi. Fusce ante elit, tempor id scelerisque a, tempus at quam. Morbi eget semper ex, et tempor magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In facilisis maximus mi, ac rutrum quam varius in. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sed sagittis tortor. Aenean finibus in erat ac interdum. Nunc eleifend felis vestibulum nisl eleifend, ac varius leo dictum. Pellentesque eu varius justo, eget sagittis arcu. Ut eu dignissim lectus, euismod ultrices risus. Duis id porttitor lacus. Nulla congue fringilla purus, eget sagittis lectus tincidunt vel. Donec feugiat placerat eros vel dapibus. In hac habitasse platea dictumst. Maecenas vestibulum, dui in commodo egestas, elit lectus molestie dolor, sit amet consequat ligula dolor in nunc. Sed in dui elit. Morbi laoreet arcu nisl, non suscipit risus dictum ac.</p>
            <p>Cras tristique varius elit, vel varius ligula porta at. Curabitur eleifend, libero non accumsan accumsan, lorem metus luctus ligula, sed commodo turpis magna in leo. Aliquam in risus ligula. Donec blandit lorem at iaculis ornare. Aliquam vel libero magna. Donec ac orci convallis, cursus nisl eget, fringilla lectus. Integer efficitur porta mi, at tristique lorem tempus ut. Nullam imperdiet nulla nec orci gravida, ac faucibus est mattis. Phasellus lacinia nisi eu arcu molestie, sed tincidunt ipsum tempor. Duis ut mi sit amet elit cursus sagittis.</p>
            <p>Nulla nibh enim, volutpat quis sapien et, maximus scelerisque augue. Mauris luctus vel erat eget condimentum. Maecenas dictum augue eget elit malesuada, ut dignissim tellus porttitor. Etiam vulputate quam eu lacus euismod, ac convallis orci luctus. Nulla sollicitudin facilisis neque lobortis posuere. Mauris molestie egestas ipsum eget suscipit. Ut et lorem luctus, auctor mauris vitae, hendrerit ex.</p>
            <p>Best Regards,<br><b>{{ config('app.name') }}</b></p>
        </div>
    </section>
@endsection
