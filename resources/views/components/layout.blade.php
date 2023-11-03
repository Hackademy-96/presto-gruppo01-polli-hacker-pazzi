<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Presto</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">
  
</head>
<body>
<x-navbar></x-navbar>
    {{$slot}}
{{-- <x-header></x-header> --}}
{{-- <x-card></x-card> --}}
<x-footer></x-footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="./main.js"></script>
</body>
</html>