<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="{{Vite::asset('resources/css/app.css')}}" rel="stylesheet">
</head>
<body class="antialiased text-gray-800 dark:text-white">
<div class="min-h-screen bg-gray-100 dark:bg-slate-800 pt-24">
    <x-layout.navbar></x-layout.navbar>
    {{$slot}}
    <x-layout.footer></x-layout.footer>
</div>
<script src="{{ Vite::asset('resources/js/app.js') }}"></script>
</body>
</html>
