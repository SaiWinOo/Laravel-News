<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> @yield('title') </title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    @vite('resources/css/app.css')


</head>

<body>

<div class="bg-[#F1F2F7]">
    <div class="max-w-[1220px] mx-auto">
        @livewire('navbar')
    </div>
    @yield('content')
</div>


@livewire('footer')
</body>

</html>
