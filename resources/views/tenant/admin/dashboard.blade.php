@extends('tenant.admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="text-2xl font-bold mb-4">📊 "{{ app('tenant')->name }}" Admin Dashboard</div>
    <p class="text-gray-600">Here you can manage books, students, librarians, and reports for your school.</p>
@endsection
