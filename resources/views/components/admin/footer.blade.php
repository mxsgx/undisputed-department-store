<div class="mt-auto flex justify-between p-4">
    <p>
        {{ __("Created with 🖤 by :name Team.", ["name" => config("app.name")]) }}
    </p>
    <p>{{ now()->format("l, d F Y") }}</p>
</div>
