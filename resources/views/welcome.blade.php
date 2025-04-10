<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
  <div
    class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
    <div class="p-6 mx-auto max-w-7xl lg:p-8 flex flex-col justify-center items-center">
      <x-application-logo class="w-24 h-24 fill-current text-primary" />
      {{-- @if (Route::has('login'))
        <livewire:welcome.navigation />
      @endif --}}

      <x-button primary xl href="{{ route('register') }}">Get Started</x-button>
      <p class="py-3">Already a User? <x-link secondary href="{{ route('login') }}"> Login</x-link> </p>
    </div>
  </div>
</body>

</html>
