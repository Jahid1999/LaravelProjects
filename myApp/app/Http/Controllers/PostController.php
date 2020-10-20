<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;
use PDF;

class PostController extends Controller
{
    public function getAllPost()
    {
        $posts= Post::all();
        return view('posts.pdf')->with('posts', $posts);
    }

    public function downloadPDF()
    {
        $posts= Post::all();
        $pdf = PDF::loadView('posts.pdf',compact('posts')); 
        return $pdf->download('post.pdf');
    }
}
