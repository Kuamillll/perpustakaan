<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Str;
use Auth;
use App\Models\book;
use App\Models\category;
use App\Models\bookshelf;

class AppController extends Controller
{
    //
    public function home(){
        $name = "Kwamil";
        $data = ([
            "name" => $name,
        ]);

        return view("user.home",$data);
    }
    public function data(Request $request){
        $books = Book::get();

        $data = ([
            "books" => $books,
        ]);
        return view("Admin.data",$data);
    }
    public function category(Request $request){
        $categories = Category::get();

        $data = ([
            "categories" => $categories,
        ]);
        return view("Admin.category",$data);
    }
    public function bookshelf(Request $request){
        $bookshelves = Bookshelf::get();

        $data = ([
            "bookshelves" => $bookshelves,
        ]);
        return view("Admin.bookshelf",$data);
    }
    public function login(){
        return view("Auth.login");
    }
    public function register(){
        return view("Auth.register");
    }
    public function Dashboard(){
        $name = "Kwamil";
        $data = ([
            "name" => $name,
        ]);
        return view("Admin.Dashboard",$data);
    }
}
