<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;
use Validator;
class BooksPdfController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.books.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'author' => 'required',
            'editordata' => 'required',
            'frontImg' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'backImg' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $frontImgPath = $request->file('frontImg')->store('images');
        $backImgPath = $request->file('backImg')->store('images');
        $book = new Books;
        $book->book_name = $request->name;
        $book->author_name = $request->author;
        $book->front_img = $frontImgPath;
        $book->back_img = $backImgPath;
        $book->content = $request->editordata;
        $book->save();
DD('yes');
        return redirect()->route('book.index')->with('success', 'Book added successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
