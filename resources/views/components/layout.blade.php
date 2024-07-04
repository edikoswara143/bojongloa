<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>{{ $title ?? 'Selamat Datang' }}</title>
</head>

<body class="bg-slate-200 antialiased scroll-smooth">
    <div class="mx-0 w-full md:mx-auto md:w-96 bg-slate-50 shadow-md min-h-screen">
        {{-- BODY --}}
        <div class="pt-24 pb-20 flex">
            {{ $slot }}
        </div>
    </div>
</body>

</html>
