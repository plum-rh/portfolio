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
        $this->post->link = $request->link;
        $this->post->save();

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $all_categories = Category::orderBy('id', 'desc')->get();
        $all_posts = $this->post->all();
        return view('works.works')->with('all_posts', $all_posts)->with('all_categories', $all_categories);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = $this->post->find($id);
        $all_categories = $this->category->inRandomOrder()->get();

        return view('works.edit')->with('post', $post)->with('all_categories', $all_categories);


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        $post->name = $request->name;
        $post->description = $request->description;
        $post->created_date = $request->date;
        $post->category_id = $request->category_id;

        if($request->link){
            $post->link = $request->link;

        }


        $post->save();

        return back();
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }

    public function showCoffee(){
        return view('works.demo.coffee-bean');
    }

    public function showCruise(){
        return view('works.demo.cruise');
    }

}
