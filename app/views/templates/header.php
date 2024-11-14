<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul']; ?></title>
    <link rel="icon" href="<?= BASEURL; ?>/img/LogoOnly.png">
    <link href="<?= BASEURL; ?>/css/bootstrap.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
<nav class="bg-blue-600 bg-opacity-50 backdrop-filter backdrop-blur-lg">
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-between">
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden"></div>
      <!-- Logo Navbar -->
      <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
        <div class="flex flex-shrink-0 items-center">
          <img class="h-8 w-auto" src="<?= BASEURL;?>/img/Logo.png" alt="Your Company">
        </div>
        <!-- Dashboard dan Information -->
        <div class="hidden sm:flex justify-center flex-grow">
          <div class="flex space-x-4">
            <a href="<?= BASEURL; ?>/" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-cyan-700 hover:text-white">Dashboard</a>
            <a href="<?= BASEURL; ?>/information" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-cyan-700 hover:text-white">Information</a>
            <a href="<?= BASEURL; ?>/about" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-cyan-700 hover:text-white">About</a>
          </div>
        </div>
      </div>
      <!-- Tampilan Notifikasi -->
      <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
        <button type="button" class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
          <span class="absolute -inset-1.5"></span>
          <span class="sr-only">View notifications</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
          </svg>
        </button>

        <!-- Profile -->
        <div class="relative ml-3">
          <div>
            <button type="button" class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
              <span class="absolute -inset-1.5"></span>
              <span class="sr-only">Open user menu</span>
              <img class="h-8 w-8 rounded-full" src="<?= BASEURL; ?>/img/bg-home2.jpg" alt="">
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>