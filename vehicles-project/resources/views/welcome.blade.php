<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Livewire Counter Example</title>

        <!-- Include Livewire Styles -->
        <livewire:styles/>
    </head>
    <body>
    <!-- Display the Counter Component -->
    <livewire:counter/>

    <!-- Include Livewire Scripts -->
    <livewire:scripts/>
    </body>
</html>
