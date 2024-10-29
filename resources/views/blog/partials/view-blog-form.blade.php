

<section>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Blog Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div class="mb-4">
                        <strong>{{ __('Description') }}:</strong>
                        <p>{!! $blog->description !!}</p>
                    </div>
                    <div style="display: grid; grid-template-columns: 1fr 1fr">

                    <div class="mb-4">
                        <strong>{{ __('Type') }}:</strong>
                        <p>{{ $blog->type ?? 'N/A' }}</p>
                    </div>

                    <div class="mb-4">
                        <strong>{{ __('Author') }}:</strong>
                        <p>{{ $blog->author ?? 'N/A' }}</p>
                    </div>

                    <div class="mb-4">
                        <strong>{{ __('Designation') }}:</strong>
                        <p>{{ $blog->designation ?? 'N/A' }}</p>
                    </div>

                    <div class="mb-4">
                        <strong>{{ __('Banner Image') }}:</strong>
                        @if($blog->banner_image)
                            <img src="{{ asset('storage/' . $blog->banner_image) }}" alt="Banner Image" style="max-width: 100px;">
                        @else
                            <p>N/A</p>
                        @endif
                    </div>

                    <div class="mb-4">
                        <strong>{{ __('Second Image') }}:</strong>
                        @if($blog->second_image)
                            <img src="{{ asset('storage/' . $blog->second_image) }}" alt="Second Image" style="max-width: 100px;">
                        @else
                            <p>N/A</p>
                        @endif
                    </div>

                    <div class="mb-4">
                        <strong>{{ __('Third Image') }}:</strong>
                        @if($blog->third_image)
                            <img src="{{ asset('storage/' . $blog->third_image) }}" alt="Third Image" style="max-width: 100px;">
                        @else
                            <p>N/A</p>
                        @endif
                    </div>

                    <div class="mb-4">
                        <strong>{{ __('Created At') }}:</strong>
                        <p>{{ $blog->created_at->format('d M Y, h:i A') }}</p>
                    </div>
                    </div>

                    <div class="mt-4">
                        <a href="{{ route('admin-blogs') }}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded text-nowrap">
                            {{ __('Back to Blogs') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
