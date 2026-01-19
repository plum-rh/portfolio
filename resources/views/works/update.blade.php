@extends('layouts.app')
@section('content')

<form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
    @csrf

    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" name="name" id="name">

    <label for="description" class="form-label d-block fw-bold mt-3">Description</label>
    <textarea name="description" id="description" placeholder="What's on your mind?" class="form-control"></textarea>

    <label for="image" class="form-label fw-bold mt-3">Image</label>
    <input type="file" name="image" id="image" class="form-control">
    <p class="form-text">The acceptable formats are jpeg, jpg, png, and gif only.<br>Max file size is 1048kB.</p>

    <label for="date" class="form-label">Created Date</label>
    <input type="date" class="form-control" name="date">

    <div class="mt-3">
        <label for="" class="form-label">Category</label>
        <select class="form-select" name="category_id" id="">
            <option value="" hidden>Select one</option>
            @foreach($all_categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
    </div>


    <input type="submit" value="Post" class="btn btn-primary w-25 mt-5">


</form>

@endsection
