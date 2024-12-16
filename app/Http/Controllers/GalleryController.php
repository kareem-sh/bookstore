<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(){
        $books = Book::paginate(12);
        $title = 'Books Gallery';
        return view('gallery',compact('books','title'));
    }
    
    public function search(Request $request){
        $books = Book::where('name','like',"%{$request->term}%")->paginate(12);
        $title = 'The search result of :'.$request->term;
        return view('gallery',compact('books','title'));
    }
}
