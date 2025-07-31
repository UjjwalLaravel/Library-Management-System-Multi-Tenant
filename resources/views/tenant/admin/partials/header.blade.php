<header class="bg-white shadow p-4 flex justify-between items-center">
    <h1 class="text-lg font-bold">Welcome, {{ Auth::user()->name }}</h1>
    <a href="{{ route('logout') }}" class="text-red-500 hover:underline">Logout</a>
</header>
