<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite('resources/css/app.css')
    <title>{{ config('RWIS') }}</title>

</head>

<body class="h-screen flex flex-col">
    <div class="flex flex-grow">
        <aside class="h-full">
            @include('admin-layout.sidebar')
        </aside>

        <main class="flex-grow bg-base p-4">
            @yield('content')
            @include('admin-layout.footer')
        </main>
    </div>

    <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay lg:hidden"></label>

    <input id="my-drawer-2" type="checkbox" class="drawer-toggle hidden" />

</body>

</html>
