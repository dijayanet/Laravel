<?php

namespace App\Http\Controllers;

use App\Models\User;  // Pastikan ini diimpor dengan benar
use Illuminate\Http\Request;

class HomeController extends Controller
{
     public function dasbord(){
            return view('dasboard');
     }
    public function index(){
        $data = User::get();  // Mengambil semua data dari model User
        return view('index', compact('data'));  // Kirimkan data ke view
    }
}
