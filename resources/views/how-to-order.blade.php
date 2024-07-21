@extends("layouts.base")

@section("title", __("How to Order"))

@section("body")
    <section class="flex justify-center px-4">
        <div class="container flex flex-col items-center pb-8">
            <div class="flex items-center justify-center py-8">
                <h2 class="text-3xl font-bold uppercase tracking-wide">
                    {{ __("How to Order") }}
                </h2>
            </div>
            <div class="flex w-full flex-col gap-4 text-justify text-lg">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                    sed dolor sed purus malesuada porttitor. Aenean condimentum
                    ornare justo non euismod. Maecenas finibus fermentum erat,
                    eu auctor ante pharetra sed. Ut quis urna cursus,
                    ullamcorper dolor in, mattis metus. Nam et augue vel odio
                    dictum lacinia. Fusce tempor rhoncus augue. Proin a quam
                    tincidunt, suscipit nunc laoreet, posuere justo. Proin id
                    odio nec est vestibulum pharetra at id elit. Nulla vel
                    lectus dignissim, porttitor turpis in, molestie odio.
                    Phasellus a sapien consequat sem rhoncus gravida. Aenean
                    nisl velit, pulvinar vitae tristique non, porttitor nec
                    nisl.
                </p>
                <ol class="list-decimal pl-4">
                    <li>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </li>
                    <li>Sed sed dolor sed purus malesuada porttitor.</li>
                    <li>Aenean condimentum ornare justo non euismod.</li>
                    <li>
                        Maecenas finibus fermentum erat, eu auctor ante pharetra
                        sed.
                    </li>
                    <li>
                        Ut quis urna cursus, ullamcorper dolor in, mattis metus.
                    </li>
                    <li>Nam et augue vel odio dictum lacinia.</li>
                    <li>
                        Fusce tempor rhoncus augue. Proin a quam tincidunt,
                        suscipit nunc laoreet, posuere justo.
                    </li>
                </ol>
                <p>
                    Vestibulum ante ipsum primis in faucibus orci luctus et
                    ultrices posuere cubilia curae; Interdum et malesuada fames
                    ac ante ipsum primis in faucibus. Nullam erat nulla,
                    vehicula eu sodales id, aliquam non lorem. Duis ut ipsum
                    vehicula, consequat enim sed, ultrices mi. Fusce ante elit,
                    tempor id scelerisque a, tempus at quam. Morbi eget semper
                    ex, et tempor magna. Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit. In facilisis maximus mi, ac rutrum quam
                    varius in. Orci varius natoque penatibus et magnis dis
                    parturient montes, nascetur ridiculus mus. Class aptent
                    taciti sociosqu ad litora torquent per conubia nostra, per
                    inceptos himenaeos. Fusce sed sagittis tortor.
                </p>
                <p>
                    Aenean finibus in erat ac interdum. Nunc eleifend felis
                    vestibulum nisl eleifend, ac varius leo dictum. Pellentesque
                    eu varius justo, eget sagittis arcu. Ut eu dignissim lectus,
                    euismod ultrices risus. Duis id porttitor lacus. Nulla
                    congue fringilla purus, eget sagittis lectus tincidunt vel.
                    Donec feugiat placerat eros vel dapibus. In hac habitasse
                    platea dictumst. Maecenas vestibulum, dui in commodo
                    egestas, elit lectus molestie dolor, sit amet consequat
                    ligula dolor in nunc. Sed in dui elit. Morbi laoreet arcu
                    nisl, non suscipit risus dictum ac.
                </p>
            </div>
        </div>
    </section>
@endsection
