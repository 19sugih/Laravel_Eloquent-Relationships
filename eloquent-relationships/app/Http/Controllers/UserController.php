<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{    
    /**
     * Menampilkan daftar user
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Mengambil semua data user dengan urutan terbaru
        $users = User::latest()->get();

        // Mengirim data user ke view 'users'
        return view('user', compact('users'));
    }
}
