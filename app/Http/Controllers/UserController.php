<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Models\user;

class UserController extends Controller
{
    //
    public function user(){
        return view('Admin.user');
    }
    public function proses_tambah_user(Request $request){
        $name = $request->name;

        User::create([
            "name" => $name,
            "email" => $request->email,
            "password" => Hash::make($request->password)
        ]);
    }
}
