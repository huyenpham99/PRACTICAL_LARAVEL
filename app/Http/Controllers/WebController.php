<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home()
    {
        $books = Book::all();
        return view("home", [
            "books" => $books,
        ]);
    }
 public function search(Request $request){
     $book1 = Book::where("title", $request->search2)->get();
     return view("search", [
         "book1"=>$book1,
     ]);
 }

}
