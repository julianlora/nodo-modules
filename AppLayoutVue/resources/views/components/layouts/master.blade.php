<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>AppLayoutVue Module - {{ config('app.name', 'Laravel') }}</title>

        <meta name="description" content="{{ $description ?? '' }}">
        <meta name="keywords" content="{{ $keywords ?? '' }}">
        <meta name="author" content="{{ $author ?? '' }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        @vite('Modules/AppLayoutVue/resources/assets/js/app.js')
    </head>

    <body>
        <div class="applayoutvue-shell">
            <div class="applayoutvue-frame">
                <div
                    class="applayoutvue-banner"
                    data-applayoutvue-layout
                    data-title="{{ config('app.name', 'Laravel') }}"
                    data-subtitle="Layout servido desde el modulo AppLayoutVue"
                ></div>

                <main class="applayoutvue-content">
                    {{ $slot }}
                </main>
            </div>
        </div>
    </body>
</html>
