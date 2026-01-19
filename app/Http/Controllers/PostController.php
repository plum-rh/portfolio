<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    private $post;
    private $category;

    public function __construct(Post $post, Category $category)
    {
        $this->post = $post;
        $this->category = $category;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $all_categories = $this->category->all();
        return view("works.create")->with('all_categories', $all_categories);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->post->name = $request->name;
        $this->post->description = $request->description;
        $this->post->image = 'data:image/' . $request->image->extension().';base64,'.base64_encode(file_get_contents($request->image));
        $this->post->created_date = $request->date;
        $this->post->category_id = $request->category_id;
        $this->post->save();

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        // $post = $this->post->find($id);
        // $this->post->name = $request->name;
        // $this->post->description = $request->description;
        // // $this->post->image = 'data:image/' . $request->image->extension().';base64,'.base64_encode(file_get_contents($request->image));
        // $this->post->created_date = $request->date;
        // $this->post->category_id = $request->category_id;
        // $this->post->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
