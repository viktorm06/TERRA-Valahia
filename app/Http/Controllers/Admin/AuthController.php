<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function admin()
    {
        return view('admin.add-new');
    }
    public function login()
    {
        if (! auth()->attempt(request(['name', 'password']))){
            return back();
        }
        return view('admin.add-new');
    }
    public function logout()
    {
        auth()->logout();
        return redirect('admin');
    }
}
