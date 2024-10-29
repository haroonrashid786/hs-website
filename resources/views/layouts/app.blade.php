<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Hashed System | @yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="icon" href="{{ asset('assets/images/Logo.png') }}">
        <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
        <!-- Scripts -->
        <script src="{{ asset('js/script.js') }}"></script>
       @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <script type="text/javascript"
            src="https://cdn.jsdelivr.net/npm/node-snackbar@latest/src/js/snackbar.min.js"></script>
    <link rel="stylesheet" type="text/css"
          href="https://cdn.jsdelivr.net/npm/node-snackbar@latest/dist/snackbar.min.css" />
    <script>
        let Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            //timer: 6100,
            showCloseButton: true,
            //timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })
        @if(session()->has('success'))
        Snackbar.show({
            pos: 'bottom-center',
            text: `{{ session()->get('success') }}`,
            textColor: "#fff",
            backgroundColor: '#110928',
            actionTextColor: '#E1C844',
            duration: '2000',
            fontFamily: 'Poppins',
        });
        @endif

        @if(session()->has('status'))
        Snackbar.show({
            pos: 'bottom-center',
            text: `{{ session()->get('status') }}`,
            textColor: "#fff",
            backgroundColor: '#110928',
            actionTextColor: '#E1C844',
            duration: '2000',
            fontFamily: 'Poppins',
        });
        @endif
    </script>
</html>
