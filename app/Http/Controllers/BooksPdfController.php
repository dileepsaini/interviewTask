<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;
use Validator;
use PDF;
class BooksPdfController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pdf = Books::find(3);
        return view('admin.books.index',compact('pdf'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $book = Books::find(3);
        return view('admin.books.create', compact('book'));
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
        $frontImgPath = $request->file('frontImg')->store('images', 'public');
        $backImgPath = $request->file('backImg')->store('images', 'public');
        $book = new Books;
        $book->book_name = $request->name;
        $book->author_name = $request->author;
        $book->front_img = $frontImgPath;
        $book->back_img = $backImgPath;
        $book->content = $request->editordata;
        $book->save();

       
        return redirect()->route('book.index')->with('success', 'Book added successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function generatePDF()
    {
        $book = Books::orderBy('id', 'desc')->first();
        $firstPage = view('admin.books.first_page', ['frontimg' => $book])->render();

        $lastPage = view('admin.books.last_page', ['backimg' => $book])->render();
        
        $middlePages = view('admin.books.middle_page', ['content' => $book->content])->render();
        
        

        $pdf = PDF::loadView('admin.books.pdf_template', [
            'firstPage' => $firstPage,
            'middlePages' => $middlePages,
            'lastPage' => $lastPage,
            'book' => $book
        ]);

        // Download the PDF
        return $pdf->download('book_pdf.pdf');
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
