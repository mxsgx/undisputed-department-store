<div class="w-full">
    @unless (empty($alerts))
        <div class="flex flex-col gap-2 px-4 pt-2">
            @foreach ($alerts as $alert)
                <div
                    class="flex items-center justify-between bg-black px-4 py-3 text-white"
                    wire:key="alert-{{ $loop->index }}"
                >
                    <p>{{ $alert["message"] }}</p>
                    <button
                        class="cursor-pointer text-xl"
                        type="button"
                        wire:click="dismiss({{ $loop->index }})"
                    >
                        &times;
                    </button>
                </div>
            @endforeach
        </div>
    @endunless
</div>
