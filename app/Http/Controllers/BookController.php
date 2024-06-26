<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
    $request->validate([
        'title' => 'required',
        'author' => 'required',
        'year' => 'required|integer',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
    ]);

    $input = $request->all();

    if ($image = $request->file('image')) {
        $destinationPath = 'images/';
        $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        $image->move($destinationPath, $profileImage);
        $input['image'] = "$profileImage";

        //dd($input['image']);
    }

    Book::create($input);

    return redirect()->route('books.index')
                     ->with('success', 'Book created successfully.');
    }

    
    public function destroy(Book $book)
    {
    $book->delete();
    return redirect()->route('books.index')
                     ->with('success', 'Book deleted successfully.');
    }

}

