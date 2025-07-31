@extends('tenant.admin.layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">Add Author</h1>
        <form action="{{ route('tenant.admin.authors.store') }}" method="POST"
            class="space-y-6 bg-white p-6 rounded-xl shadow-md">
            @csrf
            @include('tenant.admin.authors.partials._form', ['author' => null])
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Save</button>
            <a href="{{ route('tenant.admin.authors.index') }}" class="text-gray-600 hover:underline ml-3">Cancel</a>
        </form>
    </div>
@endsection
