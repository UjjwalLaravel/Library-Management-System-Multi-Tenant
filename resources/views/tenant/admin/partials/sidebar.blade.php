<div class="w-64 bg-white shadow-lg min-h-screen">
    <div class="p-6 font-bold text-xl border-b">📚 Library Admin</div>
    <nav class="mt-4">
        <a href="{{ route('tenant.admin.dashboard') }}"
            class="block px-6 py-3 hover:bg-blue-100 {{ request()->is('admin/dashboard') ? 'bg-blue-100 font-semibold' : '' }}">
            🏠 Dashboard
        </a>
        <a href="#" class="block px-6 py-3 hover:bg-blue-100">📘 Books</a>
        <a href="#" class="block px-6 py-3 hover:bg-blue-100">👨‍🎓 Students</a>
        <a href="#" class="block px-6 py-3 hover:bg-blue-100">🧑‍🏫 Librarians</a>
        <a href="#" class="block px-6 py-3 hover:bg-blue-100">📊 Reports</a>
    </nav>
</div>
