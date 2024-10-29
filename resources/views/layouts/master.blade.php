<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="{{ asset('assets/images/newDarkLogo.png') }}">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="theme-color" content="#000000">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <link rel="apple-touch-icon" href="logo192.png">
    <!-- <link rel="manifest" href="/manifest.json"> -->
    <!-- <link href="{{ asset('static/css/main.fdb7a0e7.css') }}" rel="stylesheet">
    <script defer="defer" src="{{ asset('static/js/main.34b75a15.js') }}"></script> -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        html{
            scroll-behavior: smooth !important;
        }
    </style>
    <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-FVF8901QL2"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-FVF8901QL2');
        </script>
</head>

<body class="overflow-x-hidden">

    <div id="root">
        <div class="app">

            @include('partials.notice')
            @if (in_array(Route::currentRouteName(), ['about-us', 'portfolio' , 'contact']))
            @include('partials.header-dark')
            @else
            @include('partials.header')
            @endif

            @yield('content')

            @if (!in_array(Route::currentRouteName(), ['terms','contact']) && empty($isErrorPage))
            @include('partials.contact')
            @endif

            @include('partials.footer')
        </div>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
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
    @stack('scripts')

</body>

</html>
