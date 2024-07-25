<form
    class="mb-8 flex flex-col items-center justify-center"
    wire:submit.prevent="placeOrder"
>
    <div class="container py-8 text-center">
        <h2 class="text-3xl font-bold uppercase tracking-wide">
            {{ __("Checkout") }}
        </h2>
    </div>
    <div class="container grid grid-cols-2 gap-8">
        <div
            @class(["flex flex-col gap-4", "col-span-full" => $items->isEmpty()])
        >
            @if ($items->isNotEmpty())
                <div class="flex flex-col gap-4 p-4">
                    <div class="border-b-2 border-black pb-2">
                        <h4 class="text-2xl font-bold uppercase tracking-wide">
                            {{ __("Billing Details") }}
                        </h4>
                    </div>
                    <div
                        class="flex flex-col justify-between gap-4 md:flex-row"
                    >
                        <div class="flex w-full flex-col gap-2">
                            <label class="font-medium" for="first-name">
                                {{ __("First Name") }}
                            </label>
                            <input
                                class="border-2 border-black px-4 py-2 font-medium outline-none"
                                id="first-name"
                                name="first_name"
                                type="text"
                                value="{{ old("first_name") }}"
                                required
                                autofocus
                                wire:model.change="first_name"
                            />
                            @error("first_name")
                                <span class="text-red-600">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="flex w-full flex-col gap-2">
                            <label class="font-medium" for="last-name">
                                {{ __("Last Name") }}
                            </label>
                            <input
                                class="border-2 border-black px-4 py-2 font-medium outline-none"
                                id="last-name"
                                name="last_name"
                                type="text"
                                value="{{ old("last_name") }}"
                                required
                                wire:model.change="last_name"
                            />
                            @error("last_name")
                                <span class="text-red-600">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div
                        class="flex flex-col justify-between gap-4 md:flex-row"
                    >
                        <div class="flex w-full flex-col gap-2">
                            <label class="font-medium" for="phone-number">
                                {{ __("Phone Number") }}
                            </label>
                            <input
                                class="border-2 border-black px-4 py-2 font-medium outline-none"
                                id="phone-number"
                                name="phone_number"
                                type="text"
                                value="{{ old("phone_number") }}"
                                required
                                wire:model.change="phone_number"
                            />
                            @error("phone_number")
                                <span class="text-red-600">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="flex w-full flex-col gap-2">
                            <label class="font-medium" for="email">
                                {{ __("Email") }}
                            </label>
                            <input
                                class="border-2 border-black px-4 py-2 font-medium outline-none"
                                id="email"
                                name="email"
                                type="email"
                                value="{{ old("email") }}"
                                required
                                wire:model.change="email"
                            />
                            @error("email")
                                <span class="text-red-600">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="flex w-full flex-col gap-2">
                        <label class="font-medium" for="country">
                            {{ __("Country") }}
                        </label>
                        <select
                            class="border-2 border-black px-4 py-2 font-medium outline-none"
                            id="country"
                            name="country"
                            required
                            wire:model.change="country"
                        >
                            <option value="">
                                {{ __("Not Selected") }}
                            </option>
                            <option value="Indonesia">
                                {{ __("Indonesia") }}
                            </option>
                        </select>
                        @error("country")
                            <span class="text-red-600">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="flex w-full flex-col gap-2">
                        <label class="font-medium" for="state">
                            {{ __("State / Province") }}
                        </label>
                        <select
                            class="border-2 border-black px-4 py-2 font-medium outline-none"
                            id="state"
                            name="state"
                            required
                            wire:model.change="state"
                        >
                            <option value="">
                                {{ __("Not Selected") }}
                            </option>
                            <option value="Daerah Istimewa Yogyakarta">
                                {{ __("Daerah Istimewa Yogyakarta") }}
                            </option>
                        </select>
                        @error("state")
                            <span class="text-red-600">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="flex w-full flex-col gap-2">
                        <label class="font-medium" for="city">
                            {{ __("Town / City") }}
                        </label>
                        <select
                            class="border-2 border-black px-4 py-2 font-medium outline-none"
                            id="city"
                            name="city"
                            required
                            wire:model.change="city"
                        >
                            <option value="">
                                {{ __("Not Selected") }}
                            </option>
                            <option value="Bantul">
                                {{ __("Bantul") }}
                            </option>
                        </select>
                        @error("city")
                            <span class="text-red-600">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="flex w-full flex-col gap-2">
                        <label class="font-medium" for="subdistrict">
                            {{ __("Subdistrict") }}
                        </label>
                        <select
                            class="border-2 border-black px-4 py-2 font-medium outline-none"
                            id="subdistrict"
                            name="subdistrict"
                            required
                            wire:model.change="subdistrict"
                        >
                            <option value="">
                                {{ __("Not Selected") }}
                            </option>
                            <option value="Banguntapan">
                                {{ __("Banguntapan") }}
                            </option>
                            <option value="Bantul">
                                {{ __("Bantul") }}
                            </option>
                            <option value="Sewon">
                                {{ __("Sewon") }}
                            </option>
                        </select>
                        @error("subdistrict")
                            <span class="text-red-600">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="flex w-full flex-col gap-2">
                        <label class="font-medium" for="street">
                            {{ __("Street Address") }}
                        </label>
                        <input
                            class="border-2 border-black px-4 py-2 font-medium outline-none"
                            id="street"
                            name="street"
                            type="text"
                            value="{{ old("street") }}"
                            required
                            wire:model.change="street"
                        />
                        @error("street")
                            <span class="text-red-600">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="flex w-full flex-col gap-2">
                        <label class="font-medium" for="postal-code">
                            {{ __("Postal Code") }}
                        </label>
                        <input
                            class="border-2 border-black px-4 py-2 font-medium outline-none"
                            id="postal-code"
                            name="postal_code"
                            type="text"
                            value="{{ old("postal_code") }}"
                            required
                            wire:model.change="postal_code"
                        />
                        @error("postal_code")
                            <span class="text-red-600">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                </div>
            @else
                <div
                    class="bg-black px-3 py-4 text-center font-medium text-white"
                >
                    {{ __("Empty cart") }}
                </div>
            @endif
        </div>
        @unless ($items->isEmpty())
            <div>
                <div class="flex flex-col gap-4 bg-zinc-200 p-4">
                    <div class="border-b-2 border-black pb-2">
                        <h4 class="text-2xl font-bold uppercase tracking-wide">
                            {{ __("Your order") }}
                        </h4>
                    </div>
                    <div class="flex flex-col gap-2 border-b border-black pb-4">
                        @forelse ($items as $item)
                            <div class="flex items-center justify-between">
                                <p class="text-xl font-medium">
                                    <span class="font-light">
                                        {{ $item["quantity"] }}
                                        &times;
                                    </span>
                                    {{ $item["name"] }}
                                </p>
                                <span class="text-right text-lg">
                                    {{ numfmt_format_currency(numfmt_create("id_ID", NumberFormatter::CURRENCY), $item["amount"], "IDR") }}
                                </span>
                            </div>
                        @empty
                            <div class="flex items-center justify-between">
                                <p class="text-xl font-medium">
                                    <span class="font-light">
                                        {{ __("No items in cart") }}
                                    </span>
                                </p>
                            </div>
                        @endforelse
                    </div>

                    <div
                        class="flex flex-col gap-2 border-b-2 border-black pb-2"
                    >
                        <div class="flex items-center justify-between">
                            <p class="text-xl font-medium">
                                {{ __("Subtotal") }}
                            </p>
                            <span class="text-right text-lg">
                                {{ numfmt_format_currency(numfmt_create("id_ID", NumberFormatter::CURRENCY), $items->sum("amount"), "IDR") }}
                            </span>
                        </div>
                        <div class="flex items-center justify-between">
                            <p class="text-xl font-medium">
                                {{ __("Shipping") }}
                            </p>
                            <span class="text-right text-lg">
                                {{ numfmt_format_currency(numfmt_create("id_ID", NumberFormatter::CURRENCY), 20000, "IDR") }}
                            </span>
                        </div>
                    </div>
                    <div class="flex flex-col gap-2">
                        <div class="flex items-center justify-between">
                            <p class="text-xl font-medium">
                                {{ __("Total") }}
                            </p>
                            <span class="text-right text-lg">
                                {{ numfmt_format_currency(numfmt_create("id_ID", NumberFormatter::CURRENCY), $items->sum("amount"), "IDR") }}
                            </span>
                        </div>

                        <button
                            class="border-2 border-black bg-black px-6 py-3 text-center font-medium uppercase tracking-wide text-white duration-100 ease-linear hover:bg-white hover:text-black disabled:opacity-50"
                            type="submit"
                            href="{{ route("checkout") }}"
                            wire:loading.attr="disabled"
                        >
                            {{ __("Place Order") }}
                        </button>
                    </div>
                </div>
            </div>
        @endunless
    </div>
</form>
