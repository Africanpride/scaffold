<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    {{-- <script src="./node_modules/preline/dist/preline.js" /> --}}
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- FlatPickr -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/dark.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    @livewireStyles

</head>
{{-- <body class="bg-gray-100 dark:bg-gray-900 dark:text-white text-gray-600 h-screen  overflow-hidden text-sm first-letter: grid md:grid-cols-12  scrollbar-thin scrollbar-thumb-firefly-800 scrollbar-track-gray-300 overflow-y-scroll scrollbar-thumb-rounded-full "> --}}


<body class="bg-gray-100 dark:bg-gray-900 grid md:grid-cols-12 h-full scrollbar-thin
scrollbar-thumb-firefly-800 scrollbar-track-gray-300 overflow-x-hidden overflow-y-scroll  ">
    <div class="md:col-span-2 w-full">

        <!-- Navigation -->
        <livewire:layout.navigation />
        <!-- End Navigation -->
    </div>
    <div class="md:col-span-10 w-full overflow-x-hidden">

        <!-- Content -->
        <div class="bg-gray-50 dark:bg-black w-full ">
            <!-- ========== HEADER ========== -->
            <livewire:layout.header />
            <!-- Sidebar Toggle -->
            <livewire:layout.sidebar-toggle />
            <!-- End Sidebar Toggle -->
            <!-- ========== END HEADER ========== -->
            {{ $slot }}
            <!-- Footer -->
            <livewire:layout.footer />
            <!-- End Footer -->
        </div>
        <!-- End Content -->

    </div>


    <!-- ========== MODALS ========== -->
    <livewire:layout.all-modals />

    <!-- ========== END MODALS CONTENT ========== -->
    @livewire('livewire-ui-modal')

    @stack('modals')
    @livewireScripts
    {{-- @stack('scripts') --}}
</body>
</html>
