@extends('layouts.app')
@section('content')

<form action="{{route('post.store')}}" method="post" enctype="multipart/form-data" class="mt-5 pt-5">
    @csrf

    {{-- <label for="name" class="form-label">Name</label> --}}
    <div class="mt-3">
        <input type="text" class="form-control" name="name" id="name"  placeholder="title">
    </div>

    {{-- <label for="description" class="form-label d-block fw-bold mt-3">Description</label> --}}
    <div class="mt-3">
         <textarea name="description" id="description" placeholder="description" class="form-control"></textarea>
    </div>

    <div class="mt-3">
        {{-- <label for="image" class="form-label fw-bold mt-3">Image</label> --}}
        <input type="file" name="image" id="image" class="form-control">
        {{-- <p class="form-text">The acceptable formats are jpeg, jpg, png, and gif only.<br>Max file size is 1048kB.</p> --}}

    </div>

    {{-- <label for="date" class="form-label">Created Date</label> --}}
    <div class="mt-3">
         <input type="date" class="form-control" name="date" >
    </div>

    <div class="mt-3">
        {{-- <label for="" class="form-label">Category</label> --}}
        <select class="form-select" name="category_id" id="">
            <option value="" hidden>Select one</option>
            @foreach($all_categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="mt-3">
        <input type="text" name="link" id="link" placeholder="link" class="form-control">
    </div>


    <input type="submit" value="Post" class="btn btn-primary w-25 mt-5">


</form>

@endsection
