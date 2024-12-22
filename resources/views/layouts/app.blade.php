<!DOCTYPE html>
<html data-theme="juno" lang="{{ str_replace('_', '-', app()->getLocale()) }}"
      dir="{{ app()->getLocale() == 'en' ? 'ltr' : 'rtl' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- MINIFIED -->
    {!! SEO::generate(true) !!}
    @filamentPWA
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
<livewire:components.navbar/>
<main>
    {{ $slot }}
</main>
<livewire:components.footer/>

</body>

</html>
