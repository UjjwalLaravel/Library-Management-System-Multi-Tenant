<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tenant Admin - @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <div class="flex">
        @include('tenant.admin.partials.sidebar')
        <div class="flex-1 flex flex-col">
            @include('tenant.admin.partials.header')
            <main class="p-6">
                @yield('content')
            </main>
        </div>
    </div>
</body>

</html>
