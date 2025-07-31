@extends('tenant.admin.layouts.app')

@section('content')
    <div class="max-w-6xl mx-auto p-6">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">Books</h1>
            <a href="{{ route('tenant.admin.books.create') }}"
                class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Add
                Book</a>
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
                        <th class="p-3">Title</th>
                        <th class="p-3">Author</th>
                        <th class="p-3">Year</th>
                        <th class="p-3">Quantity</th>
                        <th class="p-3">Status</th>
                        <th class="p-3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($books as $book)
                        <tr class="border-b">
                            <td class="p-3">{{ $book->title }}</td>
                            <td class="p-3">{{ $book->author->name ?? '-' }}</td>
                            <td class="p-3">{{ $book->year ?? '-' }}</td>
                            <td class="p-3">{{ $book->quantity }}</td>
                            <td class="p-3 capitalize">{{ $book->status }}</td>
                            <td class="p-3 flex space-x-2">
                                <a href="{{ route('tenant.admin.books.edit', $book) }}"
                                    class="text-blue-500 hover:underline">Edit</a>
                                <form method="POST" action="{{ route('tenant.admin.books.destroy', $book) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:underline"
                                        onclick="return confirm('Delete this book?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="p-3" colspan="6">No books found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            {{ $books->links() }}
        </div>
    </div>
@endsection
