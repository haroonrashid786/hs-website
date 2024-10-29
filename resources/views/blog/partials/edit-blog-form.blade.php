<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Edit Blog') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update the blog post information below.") }}
        </p>
    </header>

    <form method="post" action="{{ route('blogs.update', ['id' => $blog->id]) }}" enctype="multipart/form-data" class="mt-6 space-y-6">
        @csrf
        @method('PUT') {{-- This is important to override the POST method with PUT for update --}}

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="$blog->name" required autofocus />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="description" :value="__('Description')" />
            <textarea id="description" name="description" class="mt-1 block w-full" required>{{ $blog->description }}</textarea>
            <x-input-error class="mt-2" :messages="$errors->get('description')" />
        </div>

        <div>
            <x-input-label for="banner_image" :value="__('Banner Image')" />
            @if($blog->banner_image)
                <img src="{{ asset('storage/' . $blog->banner_image) }}" alt="Banner Image" style="max-width: 100px;" class="mb-2">
            @endif
            <x-text-input id="banner_image" name="banner_image" type="file" class="mt-1 block w-full" />
            <x-input-error class="mt-2" :messages="$errors->get('banner_image')" />
        </div>

        <div>
            <x-input-label for="type" :value="__('Type')" />
            <select id="type" name="type" class="mt-1 block w-full" required>
                <option value="services" {{ $blog->type == 'services' ? 'selected' : '' }}>Services</option>
                <option value="news" {{ $blog->type == 'news' ? 'selected' : '' }}>News</option>
                <option value="general" {{ $blog->type == 'general' ? 'selected' : '' }}>General</option>
                <option value="ai" {{ $blog->type == 'ai' ? 'selected' : '' }}>AI</option>
            </select>
            <x-input-error class="mt-2" :messages="$errors->get('type')" />
        </div>

        <div>
            <x-input-label for="author" :value="__('Author')" />
            <x-text-input id="author" name="author" type="text" class="mt-1 block w-full" :value="$blog->author" />
            <x-input-error class="mt-2" :messages="$errors->get('author')" />
        </div>

        <div>
            <x-input-label for="designation" :value="__('Designation')" />
            <x-text-input id="designation" name="designation" type="text" class="mt-1 block w-full" :value="$blog->designation" />
            <x-input-error class="mt-2" :messages="$errors->get('designation')" />
        </div>

        <div>
            <x-input-label for="second_image" :value="__('Second Image')" />
            @if($blog->second_image)
                <img src="{{ asset('storage/' . $blog->second_image) }}" alt="Second Image" style="max-width: 100px;" class="mb-2">
            @endif
            <x-text-input id="second_image" name="second_image" type="file" class="mt-1 block w-full" />
            <x-input-error class="mt-2" :messages="$errors->get('second_image')" />
        </div>

        <div>
            <x-input-label for="third_image" :value="__('Third Image')" />
            @if($blog->third_image)
                <img src="{{ asset('storage/' . $blog->third_image) }}" alt="Third Image" style="max-width: 100px;" class="mb-2">
            @endif
            <x-text-input id="third_image" name="third_image" type="file" class="mt-1 block w-full" />
            <x-input-error class="mt-2" :messages="$errors->get('third_image')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Update') }}</x-primary-button>
        </div>
    </form>
</section>

<script src="{{ asset('tinymce/tinymce.min.js') }}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        tinymce.init({
            selector: 'textarea#description',
            height: 500,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount'
            ],
            toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
            content_style: 'body { font-family: Arial, Helvetica, sans-serif; font-size: 14px }'
        });
    });
</script>
