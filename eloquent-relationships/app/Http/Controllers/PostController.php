<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{    
    /**
     * Menampilkan semua post
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Mengambil semua data post dengan urutan terbaru
        $posts = Post::latest()->get();

        // Mengirim data post ke view 'posts'
        return view('post', compact('posts'));
    }
}
