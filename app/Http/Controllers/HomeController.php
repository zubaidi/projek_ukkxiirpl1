<?php
// namespace lokasi folder => MVC namespace = package
namespace App\Http\Controllers; 
// use => import library / class sesuai kebutuhan
use Illuminate\Http\Request;
// class NamaClass extends Class lain
class HomeController extends Controller
{
    // fungsi / function / method
    // 3 akses modifier (enkapsulasi) => public, protected, private 
    public function index() {
        // kode kita
        return view('xiirpl1');
    }
    
}
