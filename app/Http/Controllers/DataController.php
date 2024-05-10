<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Str;
use Auth;
use App\Models\book;
use App\Models\category;
use App\Models\bookshelf;

class DataController extends Controller
{
    //
    public function tambah_data(){
        $categories = Category::get();
        $bookshelves = Bookshelf::get();

        $data = ([
            "categories" => $categories,
            "bookshelves" => $bookshelves
        ]);

        return view("Admin.tambah_data", $data);
    }
    public function tambah_category(){
        $categories = Category::get();
        
        $data = ([
            "categories" => $categories
        ]);

        return view("Admin.tambah_category", $data);
    }
    public function tambah_bookshelf(){
        $bookshelves = Bookshelf::get();

        $data = ([
            "bookshelves" => $bookshelves
        ]);

        return view("Admin.tambah_bookshelf", $data);
    }
    public function proses_tambah_data(Request $request){
        $isbn = $request->isbn;
        $cover = $request->file("cover");
        $coverName = $isbn."_".Str::random(25).".".$cover->getClientOriginalExtension();
        $cover->move("./pictures/",$coverName);
        Book::create([
            "cover" => $coverName,
            "isbn" => $isbn,
            "title" => $request->title,
            "description" => $request->description,
            "author" => $request->author,
            "publisher" => $request->publisher,
            "public_year" => $request->public_year,
            "page" => $request->page,
            "category_id" => $request->category,    
            "bookshelf_id" => $request->bookshelf
        ]);

        return redirect("data");
    }
    public function proses_tambah_category(Request $request){
        $name = $request->name;

        Category::create([
            "name" => $name
        ]);

        return redirect("category");
    }
    public function proses_tambah_bookshelf(Request $request){
        $bookshelf = $request->bookshelf;

        Bookshelf::create([
            "bookshelf" => $bookshelf
        ]);

        return redirect("bookshelf");
    }

    // view_edit
    public function edit_data($id){
        $book = Book::where("id",$id)->first();
        $categories = Category::get();
        $bookshelves = Bookshelf::get();

        if(!$book){
            abort(404);
        }

        $data = ([
            "book" => $book,
            "categories" => $categories,
            "bookshelves" => $bookshelves
        ]);

        return view("Admin.edit_data",$data);
    }
    public function edit_category($id){
        $category = Category::where("id",$id)->first();

        if(!$category){
            abort(404);
        }

        $data = ([
            "category" => $category,
        ]);

        return view("Admin.edit_category",$data);
    }
    public function edit_bookshelf($id){
        $bookshelf = Bookshelf::where("id",$id)->first();

        if(!$bookshelf){
            abort(404);
        }

        $data = ([
            "bookshelf" => $bookshelf,
        ]);

        return view("Admin.edit_bookshelf",$data);
    }

    // proses_edit
    public function proses_edit_data(Request $request){
        $book = Book::find($request->id);
        $isbn = $request->isbn;

        $book->isbn = $isbn;
        $book->category_id = $request->category;
        $book->bookshelf_id = $request->bookshelf;
        $book->title = $request->title;
        $book->description = $request->description;
        $book->author = $request->author;
        $book->publisher = $request->publisher;
        $book->public_year = $request->public_year;
        $book->page = $request->page;

        if($request->hasFile("cover")){
            $cover = $request->file("cover");
            $coverName = $isbn."_".Str::random(25).".".$cover->getClientOriginalExtension();
            $cover->move("./pictures/",$coverName);

            $book->cover = $coverName;
        }
        $book->save();
        return redirect("data/".$request->id."/edit");
    }
    public function proses_edit_category(Request $request){
        $category = Category::find($request->id);
        $name = $request->name;

        $category->name = $name;
        
        $category->save();
        return redirect("category/".$request->id."/edit");
    }
    public function proses_edit_bookshelf(Request $request){
        $bookshelf = Bookshelf::find($request->id);
        $bookshelf = $request->bookshelf;

        $bookshelf->bookshelf = $bookshelf;
        
        $bookshelf->save();
        return redirect("bookshelf/".$request->id."/edit");
    }

    // proses_hapus
    public function proses_hapus_data($id){
        Book::where("id",$id)->delete();
        return redirect("data");
    }
    public function proses_hapus_bookshelf($id){
        Bookshelf::where("id",$id)->delete();
        return redirect("bookshelf");
    }
    public function proses_hapus_category($id){
        Category::where("id",$id)->delete();
        return redirect("category");
    }
    public function show(Request $request){
        $books = Book::findOrFail($request->id);
        $categories = Category::findOrFail($books->category_id);
        $bookshelves = Bookshelf::findOrFail($books->bookshelf_id);

        $data = ([
            "books" => $books,
            "categories" => $categories,
            "bookshelves" => $bookshelves
        ]);

        return view("Admin.detail_buku", compact('data'));
    }
}
