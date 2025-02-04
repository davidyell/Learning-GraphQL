<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Sets') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="px-4 sm:px-6 lg:px-8">
                <div class="mt-8 flow-root">
                    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                            <table class="min-w-full divide-y divide-gray-300">
                                <thead>
                                <tr>
                                    <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">Name</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Release</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Block</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Set size</th>
                                </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                @foreach ($sets as $set)
                                    <tr>
                                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">{{ $set->name }}</td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $set->releaseDate }}</td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $set->block }}</td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $set->totalSetSize }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                            <div class="p-4">
                                {{ $sets->links('vendor.pagination.tailwind') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
