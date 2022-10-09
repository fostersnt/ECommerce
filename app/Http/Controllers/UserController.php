<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $data = Product::paginate(4);
        
        return view('User.UserHome', compact('data'));
    }
}
