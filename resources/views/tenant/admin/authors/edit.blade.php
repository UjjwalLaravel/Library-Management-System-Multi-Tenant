@extends('tenant.admin.layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">Edit Author</h1>
        <form action="{{ route('tenant.admin.authors.update', $author) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')
            @include('tenant.admin.authors.partials._form', ['author' => $author])
            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Update</button>
            <a href="{{ route('tenant.admin.authors.index') }}" class="text-gray-600 hover:underline ml-3">Cancel</a>
        </form>
    </div>
@endsection
