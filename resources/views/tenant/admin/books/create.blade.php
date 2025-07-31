@extends('tenant.admin.layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto p-6">
        <h2 class="text-xl font-semibold text-gray-800 border-b pb-2">📘 Book Details</h2>
        <form action="{{ route('tenant.admin.books.store') }}" method="POST"
            class="space-y-6 bg-white p-6 rounded-xl shadow-md">
            @csrf

            @include('tenant.admin.books.partials._form', ['book' => null])
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Save</button>
            <a href="{{ route('tenant.admin.books.index') }}" class="text-gray-600 hover:underline ml-3">Cancel</a>
        </form>
    </div>
@endsection
