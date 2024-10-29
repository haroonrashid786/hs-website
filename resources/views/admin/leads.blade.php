@section('title', 'Leads')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Leads') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <!-- Search Bar -->
                    <form method="GET" action="{{ route('leads') }}" class="mb-4">
                        <div class="flex items-center">
                            <x-input-label for="search"/>
                            <x-text-input id="search" name="search" type="text" class="mt-1 block w-full" :value="request('search')" />
                            <div class="ml-4 mt-1">
                            <x-primary-button>
                            {{ __('Search') }}
                            </x-primary-button>
                            </div>
                        </div>
                    </form>

                    <!-- Leads Table -->
                    <x-table :headers="['ID', 'Name', 'Email','Service','Industry', 'Mobile', 'Company', 'Hear About', 'Type',  'Message', 'Created At']">
                        @forelse ($leads as $lead)
                            <x-table-row>
                                <td class="px-4 py-2 message_col">{{ $lead->id }}</td>
                                <td class="px-4 py-2 message_col">{{ $lead->name ?? 'N/A' }}</td>
                                <td class="px-4 py-2 message_col">{{ $lead->email ?? 'N/A' }}</td>
                                <td class="px-4 py-2 message_col">{{ $lead->service ?? 'N/A' }}</td>
                                <td class="px-4 py-2 message_col">{{ $lead->industry ?? 'N/A' }}</td>
                                <td class="px-4 py-2 message_col">{{ $lead->mobile ?? 'N/A' }}</td>
                                <td class="px-4 py-2 message_col">{{ $lead->company ?? 'N/A' }}</td>
                                <td class="px-4 py-2 message_col">{{ $lead->hear_about ?? 'N/A' }}</td>
                                <td class="px-4 py-2 message_col">{{ ucfirst($lead->type) ?? 'N/A' }}</td>
                                <td class="px-4 py-2 message_col">{{ $lead->message ?? 'N/A' }}</td>
                                <td class="px-4 py-2 message_col">{{ $lead->created_at }}</td>
                            </x-table-row>
                        @empty
                            <x-table-row>
                                <td colspan="7" class="px-4 py-2">
                                    {{ __('No leads found.') }}
                                </td>
                            </x-table-row>
                        @endforelse
                    </x-table>

                    <div class="mt-4">
                        {{ $leads->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
