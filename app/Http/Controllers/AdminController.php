<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index() {
        return view('dashboard2');
    }
    public function orders() {
        return view('orders');
    }
    public function products(){
        // tampilkan data query builder
        // use Illuminate\Supports\Facade\DB;
        $product = DB::table('products')->get();
        return view('products', compact('product'));
    }
    public function customers(){
        return view('customers');
    }
}
