@extends('layouts.app')
@section('content')

<form action="{{route('post.update', $post->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PATCH')

    <div class="ax-auto mt-3">
         <img src="{{$post->image}}" alt="" class="w-25">
         <p class="text-white bg-dark">写真を更新したい場合は、登録からやり直してください。</p>

    </div>

    {{-- <label for="name" class="form-label">Name</label> --}}
    <div class="mt-3">
        <input type="text" class="form-control" name="name" id="name"  placeholder="title" value="{{$post->name}}">
    </div>

    {{-- <label for="description" class="form-label d-block fw-bold mt-3">Description</label> --}}
    <div class="mt-3">
         <textarea name="description" id="description" placeholder="description" class="form-control">{{$post->description}}</textarea>
    </div>

    <div class="mt-3">
         <input type="date" class="form-control" name="date" value="{{ \Carbon\Carbon::parse($post->created_date)->format('Y-m-d') }}">
    </div>



    <div class="mt-3">
        {{-- <label for="" class="form-label">Category</label> --}}
        <select class="form-select" name="category_id" id="">
            <option value="" hidden>Select one</option>
            @foreach($all_categories as $category)
                @if($category->id == $post->category_id)
                    <option value="{{$category->id}}" selected>{{$category->name}}</option>
                @else

                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endif
            @endforeach
        </select>
    </div>

    <div class="mt-3">
        <input type="text" name="link" id="link" placeholder="link" class="form-control" value="{{$post->link}}">
    </div>


    <input type="submit" value="Post" class="btn btn-success w-25 mt-5">


</form>

@endsection
