@extends('tenant.admin.layouts.app')

@section('content')
    <div class="max-w-6xl mx-auto p-6">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">Authors</h1>
            <a href="{{ route('tenant.admin.authors.create') }}"
                class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Add Author</a>
        </div>

        @if (session('success'))
            <div class="bg-green-100 text-green-800 p-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white shadow rounded">
            <table class="min-w-full text-sm text-left">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="p-3">Name</th>
                        <th class="p-3">Birthdate</th>
                        <th class="p-3">Nationality</th>
                        <th class="p-3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($authors as $author)
                        <tr class="border-b">
                            <td class="p-3">{{ $author?->name }}</td>
                            <td class="p-3">{{ $author?->birthdate ?? '-' }}</td>
                            <td class="p-3">{{ $author?->nationality ?? '-' }}</td>
                            <td class="p-3 flex space-x-2">
                                <a href="{{ route('tenant.admin.authors.edit', $author) }}"
                                    class="text-blue-500 hover:underline">Edit</a>
                                <form method="POST" action="{{ route('tenant.admin.authors.destroy', $author) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:underline"
                                        onclick="return confirm('Delete this author?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="p-3" colspan="4">No authors found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            {{ $authors->links() }}
        </div>
    </div>
@endsection
