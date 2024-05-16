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
    public function landing(){
        $name = "Kwamil";
        $data = ([
            "name" => $name,
        ]);

        return view("landing",$data);
    }
    public function data(Request $request){
        $books = Book::get();
        $q = NULL;

        if(isset($request->q)){
            $q = $request->q;
            $books = Book::where("title","like","%$q%")->get();
        }

        $categories = Category::orderBy("name","asc")->get();
        $bookshelves = Bookshelf::orderBy("bookshelf","asc")->get();

        $data = ([
            "books" => $books,
            "q" => $q,
            "categories" => $categories,
            "bookshelves" => $bookshelves,
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
    public function Dashboard()
    {
        return view('Admin.Dashboard');
    }
    public function chart(){
        return view("Admin.chart");
    }
    public function home(){
        return view("user.home");
    }
    public function datauser(){
        return view("user.datauser");
    }
}
