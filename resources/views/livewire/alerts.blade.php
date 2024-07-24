<div>
    @unless (empty($alerts))
        <div class="flex flex-col gap-2 px-4 pt-2">
            @foreach ($alerts as $alert)
                <div
                    class="bg-black text-white px-4 py-3 flex justify-between items-center"
                    wire:key="alert-{{ $loop->index }}"
                >
                    <p>{{ $alert["message"] }}</p>
                    <button
                        class="text-xl cursor-pointer"
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
