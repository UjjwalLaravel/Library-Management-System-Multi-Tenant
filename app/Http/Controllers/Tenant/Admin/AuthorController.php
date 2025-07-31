<?php

namespace App\Http\Controllers\Tenant\Admin;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAuthorRequest;
use App\Http\Requests\UpdateAuthorRequest;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::latest()->paginate(10);
        return view('tenant.admin.authors.index', compact('authors'));
    }

    public function create()
    {
        return view('tenant.admin.authors.create');
    }

    public function store(StoreAuthorRequest $request)
    {
        Author::create($request->validated());
        return redirect()->route('tenant.admin.authors.index')->with('success', 'Author created successfully.');
    }

    public function show(Author $author)
    {
        return view('tenant.admin.authors.show', compact('author'));
    }

    public function edit(Author $author)
    {
        return view('tenant.admin.authors.edit', compact('author'));
    }

    public function update(UpdateAuthorRequest $request, Author $author)
    {
        $author->update($request->validated());
        return redirect()->route('tenant.admin.authors.index')->with('success', 'Author updated successfully.');
    }

    public function destroy(Author $author)
    {
        $author->delete();
        return redirect()->route('tenant.admin.authors.index')->with('success', 'Author deleted successfully.');
    }
}
