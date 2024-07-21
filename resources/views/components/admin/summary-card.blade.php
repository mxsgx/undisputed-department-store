@props([
    "title" => __("Summary Title"),
    "count" => "-",
])

<section
    class="flex flex-col gap-4 border-2 border-white bg-black p-4 text-white ring-2 ring-black"
>
    <div>
        <p class="font-medium uppercase">{{ $title }}</p>
    </div>
    <div class="flex items-center gap-4">
        <div>
            {{ $slot }}
        </div>
        <div class="grow text-5xl">{{ $count }}</div>
    </div>
</section>
