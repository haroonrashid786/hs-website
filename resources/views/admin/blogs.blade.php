@section('title', 'Blogs')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Blogs') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <!-- Search Bar -->
                    <form method="GET" action="{{ route('admin-blogs') }}" class="mb-4">
                        <div class="flex items-center">
                            <x-input-label for="search"/>
                            <x-text-input id="search" name="search" type="text" class="mt-1 block w-full" :value="request('search')" />
                            <div class="ml-4">
                                <x-primary-button>
                                    {{ __('Search') }}
                                </x-primary-button>
                            </div>

                            <div class="ml-4">
                                <a href="{{ route('blog-create') }}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded text-nowrap">
                                    {{ __('Add Blog') }}
                                </a>
                            </div>
                        </div>
                    </form>

                    <!-- Blogs Table -->
                    <x-table :headers="['ID', 'Name', 'Type', 'Author', 'Banner Image', 'Second Image',  'Third Image', 'Created At','Edit']">
                        @forelse ($blogs as $blog)
                            <x-table-row>
                                <td class="px-4 py-2 message_col">{{ $blog->id }}</td>
                                <td class="px-4 py-2 message_col">{{ $blog->name ?? 'N/A' }}</td>
{{--                                <td class="px-4 py-2 message_col">{!! $blog->description ? strip_tags($blog->description) : 'N/A' !!}</td>--}}
                                <td class="px-4 py-2 message_col">{{ $blog->type ?? 'N/A' }}</td>
                                <td class="px-4 py-2 message_col">{{ $blog->author ?? 'N/A' }}</td>
                                <td class="px-4 py-2 message_col">
                                    @if($blog->banner_image)
                                        <img src="{{ asset('storage/' . $blog->banner_image) }}" alt="Banner Image" style="max-width: 100px;">
                                    @else
                                        N/A
                                    @endif
                                </td>
                                <td class="px-4 py-2 message_col">
                                    @if($blog->second_image)
                                        <img src="{{ asset('storage/' . $blog->second_image) }}" alt="Second Image" style="max-width: 100px;">
                                    @else
                                        N/A
                                    @endif
                                </td>
                                <td class="px-4 py-2 message_col">
                                    @if($blog->third_image)
                                        <img src="{{ asset('storage/' . $blog->third_image) }}" alt="Third Image" style="max-width: 100px;">
                                    @else
                                        N/A
                                    @endif
                                </td>
                                <td class="px-4 py-2 message_col">{{ $blog->created_at }}</td>
                                <td class="px-4 py-2 message_col">
                                    <a href="{{ route('blogs.edit', $blog->id) }}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded text-nowrap">
                                        {{ __('Edit') }}
                                    </a>
                                    <a href="{{ route('blogs.show', $blog->id) }}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded text-nowrap">
                                        {{ __('Show') }}
                                    </a>
                                    <form action="{{ route('blogs.delete', $blog->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this blog?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded text-nowrap">
                                            {{ __('Delete') }}
                                        </button>
                                    </form>
                                </td>

                            </x-table-row>
                        @empty
                            <x-table-row>
                                <td colspan="7" class="px-4 py-2">
                                    {{ __('No blogs found.') }}
                                </td>
                            </x-table-row>
                        @endforelse
                    </x-table>

                    <div class="mt-4">
                        {{ $blogs->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
