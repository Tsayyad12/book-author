<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index() {
        return Author::all();
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:authors',
        ]);

        return response()->json(Author::create($request->all()), 201);
    }

    public function show(Author $author) {
        return $author;
    }

    public function update(Request $request, Author $author) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:authors,email,' . $author->id,
        ]);

        $author->update($request->all());
        return $author;
    }

    public function destroy(Author $author) {
        $author->delete();
        return response()->json(['message' => 'Author deleted']);
    }
}
