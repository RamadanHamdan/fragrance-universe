<!DOCTYPE html>
<html class="class="h-full bg-gray-100 lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css"/>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap');
    </style>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>
<body class="h=full">

<div class="min-h-full">
  <x-navbar></x-navbar>

  <x-header></x-header>
  <main>
    
      {{ $slot }}
    </div>
  </main>
</div>
<x-footer></x-footer>
</body>
</html>