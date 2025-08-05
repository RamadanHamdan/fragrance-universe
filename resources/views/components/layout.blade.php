<!DOCTYPE html>
<html class="class="h-full bg-gray-100 lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css"/>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>
<body class="h=full">

<div class="min-h-full">
  <x-navbar></x-navbar>

  {{-- <x-header>{{ $title }}</x-header> --}}
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <div class="title">
      <h2>Agen Travel</h2>
      </div>
      {{ $slot }}
    </div>
  </main>
</div>
<x-footer></x-footer>
</body>
</html>