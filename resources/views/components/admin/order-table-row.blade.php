@props([
    "order",
])

<tr class="border border-black">
    <td class="px-4 py-3 text-center">
        {{ $order->status }}
    </td>
    <td class="whitespace-nowrap px-4 py-3 font-medium">
        {{ $order->billing["first_name"] }}
    </td>
    <td class="px-4 py-3 font-mono">
        {{ $order->billing["email"] }}
    </td>
    <td class="px-4 py-3">
        {{ $order->billing["phone_number"] }}
    </td>
    <td class="px-4 py-3 text-center">
        {{ $order->billing["state"] . ", " . $order->billing["country"] }}
    </td>
    <td class="px-4 py-3 text-center">{{ count($order->items) }}</td>
    <td class="px-4 py-3 font-medium uppercase">
        <div class="flex items-center justify-center gap-2">
            <a class="border-b-2 hover:border-b-black" href="#">
                {{ __("Process") }}
            </a>
            <a class="border-b-2 text-red-600 hover:border-b-red-600" href="#">
                {{ __("Cancel") }}
            </a>
        </div>
    </td>
</tr>
