<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // 1 array multidim data
    // private $data = [
    //     [
    //         "username"  => "Admin",
    //         "password"  => "admin123",
    //         "nama"      => "Admin"
    //     ],
    //     [
    //         "username"  => "User",
    //         "password"  => "user123",
    //         "nama"      => "User"
    //     ]
    // ];
    private function getUser() : array {
        return [
            [
                'username'  => 'Admin',
                'password'  => '$2y$12$XQJpiwPNMRGXcOb7oCrtxOUcXcHKCQFfHXEeZs6oS4GfGYGscQwUm', // admin123
                'nama'      => 'Admin'
            ],
            [
                'username'  => 'User',
                'password'  => '$2y$12$K2VSftVQsdzmtz94cgGgO.v44wdXLxk90IjqAHG5hFpOyyn3HyUmq', // user123
                'nama'      => 'User'
            ]
        ];
    }

    public function index() {
        if (!Session::has('user')) {
            return redirect()->route('login2');
        }

        return view('dashboard2');
    }

    public function login(Request $request) {
        // logic login 
        $auth = $request->only('username', 'password');
        foreach ($this->getUser() as $user) {
            if ($user['username'] == $auth['username'] && Hash::check($auth['password'], $user['password'])) {
                Session::put('user', $user);
                return redirect()->route('dashboard2');
            }
        }
        // pemberitahuan error user atau password salah
        return back()->withError(['error' => 'Username atau Password Salah!']);
    }

    public function dashboard() {
        if (!Session::has('user')) {
            return redirect()->route('login');
        }
        $user = Session::get('user');
        return view('xiirpl1', compact('user'));
    }

    public function login2() {
        return view('login2');
    }

    public function admin2() {
        return view('admin2');
    }

    public function logout(){
        Session::forget('user');
        return redirect()->route('login');
    }

}
