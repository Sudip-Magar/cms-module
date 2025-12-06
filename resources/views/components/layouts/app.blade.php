<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, viewport-fit=cover">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ isset($title) ? $title . ' - ' . config('app.name') : config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen font-sans antialiased bg-base-200">
    <div>
        {{-- <x-theme-toggle class="btn btn-circle fixed top-4 right-4 z-50" /> --}}
    </div>

    {{-- MAIN --}}
    <x-main>
        <x-slot:content>
            <div class="flex justify-between items-center py-0 my-0">
                <div class="flex gap-2">
                    <img class="w-10 h-10 object-cover rounded-md" src="{{ asset('logo/milton.jpg') }}" alt="">
                    <div>
                        <p class="text-sm">Milton International College</p>
                        <p class="text-[12px]">New Baneshwor, Kathmandu</p>
                    </div>
                </div>
                <div>
                   <p class="text-sm">   <x-button icon="o-power" label="{{ Auth::user()->name }}" class="btn-circle btn-ghost btn-xs" tooltip-bottom="Logout" no-wire-navigate link="/logout" /></p>
                </div>
            </div>
            {{ $slot }}
        </x-slot:content>
    </x-main>

    <x-toast />

    <script src="//unpkg.com/alpinejs" defer></script>

</body>

</html>
