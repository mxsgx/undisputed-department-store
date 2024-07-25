@extends("layouts.admin")

@section("body")
    <div class="flex flex-col gap-4 p-4">
        <div class="flex justify-between py-2">
            <div class="flex flex-col">
                <p class="text-sm uppercase">{{ __("Manage") }}</p>
                <h3 class="text-2xl font-bold uppercase tracking-tighter">
                    {{ __("Orders") }}
                </h3>
            </div>
        </div>
        <div class="flex flex-col gap-4 md:flex-row">
            <div class="flex flex-1 flex-col gap-4">
                <table>
                    <thead
                        class="border border-black bg-black text-sm font-bold uppercase tracking-wide text-white"
                    >
                        <tr>
                            <th class="px-4 py-3 text-center">
                                {{ __("Status") }}
                            </th>
                            <th class="px-4 py-3 text-left" scope="col">
                                {{ __("Customer Name") }}
                            </th>
                            <th class="px-4 py-3 text-left" scope="col">
                                {{ __("Email") }}
                            </th>
                            <th class="px-4 py-3 text-left" scope="col">
                                {{ __("Phone Number") }}
                            </th>
                            <th class="px-4 py-3 text-center" scope="col">
                                {{ __("Address") }}
                            </th>
                            <th class="px-4 py-3 text-center" scope="col">
                                {{ __("Total Items") }}
                            </th>
                            <th class="px-4 py-3 text-center" scope="col">
                                {{ __("Action") }}
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($orders as $order)
                            <x-admin.order-table-row
                                :$order
                                :key="'order-'.$order->id"
                            />
                        @empty
                            <tr class="border border-black">
                                <td class="px-4 py-3 text-center" colspan="7">
                                    {{ __("Empty orders") }}
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
