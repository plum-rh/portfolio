<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    private $post;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct( Post $post)
    {
        $this->middleware('auth')
             ->except('index','post.show');
        $this->post = $post;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $all_posts = $this->post->all();
        return view('index')->with('all_posts', $all_posts);
    }
}
