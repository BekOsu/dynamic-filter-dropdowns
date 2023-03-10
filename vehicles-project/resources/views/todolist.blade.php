<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Livewire Counter Example</title>

        @vite(['resources/css/app.css', 'resources/css/app.css'])
        <!-- Include Livewire Styles -->
        <livewire:styles/>
    </head>
    <body>
    <!-- Display the Counter Component -->

    <livewire:todo-list/>

    <!-- Include Livewire Scripts -->
    <livewire:scripts/>
    </body>
</html>
