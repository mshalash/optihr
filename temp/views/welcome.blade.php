<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased font-sans">
                <livewire:top-bar-navigation />
<main id="content">
    
<div class="py-12">
        <div class="bg-gray-300 py-10 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg py-10">
                <livewire:hero-section/>
                <livewire:featured-doctors/>
                <livewire:specialist-cards/>
                <livewire:featured-articles/>
            </div>
        </div>
        
    </div>
</main>
    </body>
</html>
