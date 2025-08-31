<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Icon --}}
    <link rel="icon" type="image/png" href="{{ asset('assets/img/icon.png') }}" sizes="64x64">
    <link rel="apple-touch-icon" href="{{ asset('assets/img/icon.png') }}">
    <link rel="shortcut icon" href="{{ asset('assets/img/icon.png') }}" type="image/x-icon">
    <title>WEBSITE ORGANISASI</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="h-full">

    <x-header />

    <main id="main" class="main">
        {{ $slot }}
    </main>

    <x-footer />

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.8/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            function showToast(icon, title) {
                Swal.fire({
                    toast: true,
                    position: "top-end",
                    icon: icon,
                    title: title,
                    showConfirmButton: false,
                    width: '450px',
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.onmouseenter = Swal.stopTimer;
                        toast.onmouseleave = Swal.resumeTimer;
                    }
                });
            }

            @if (session('success'))
                showToast("success", "{{ session('success') }}");
            @elseif (session('error'))
                showToast("error", "{{ session('error') }}");
            @elseif ($errors->any())
                showToast("warning", "{!! implode('<br>', $errors->all()) !!}");
            @endif
        });
    </script>
</body>

</html>
