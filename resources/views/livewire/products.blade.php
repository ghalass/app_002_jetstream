<x-slot name="header">
    <h1 class="text-center">CRUD on LARAVEL and LIVEWIRE</h1>
</x-slot>

<div class="py-2">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">

            <button wire:click='create()'
                class="border border-green-500 text-green-500 hover:bg-green-600 hover:text-white  font-bold py-1 px-3 mb-2 rounded-md">
                New
            </button>

            @if ($modal)
                @include('livewire.create')
            @endif

            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-gray-500 text-white">
                        <th class="px-4 py-1">ID</th>
                        <th class="px-4 py-1">DESCRIPTION</th>
                        <th class="px-4 py-1">QUANTITY</th>
                        <th class="px-4 py-1">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td class="border px-4 py-1">{{ $product->id }}</td>
                            <td class="border px-4 py-1">{{ $product->description }}</td>
                            <td class="border px-4 py-1">{{ $product->quantity }}</td>
                            <td class="border px-4 py-1 text-center">
                                <button wire:click='edit({{ $product->id }})'
                                    class="border border-blue-500 text-blue-500 hover:bg-blue-600 hover:text-white py-1 px-2 rounded-md">
                                    Edit
                                </button>
                                <button wire:click='delete({{ $product->id }})'
                                    class="border border-red-500 text-red-500 hover:bg-red-600 hover:text-white py-1 px-2 rounded-md">
                                    Delete
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>
