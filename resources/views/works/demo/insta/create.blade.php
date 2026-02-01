@section('title', 'PLUM | WORKS - インスタ風アプリケーション -')
@extends('layouts.app2')

@section('style')
<link rel="stylesheet" href="{{ asset('css/insta.css') }}">

@endsection

@section('content')
@include('works.demo.insta.function.header')

 <main class="py-5 container">
            <div class="row justify-content-center">
                
                 <div class="col-9">
                    
    <input type="hidden" name="_token" value="yYwVXMCmCxibw6skwnQpOIGzIxfkpKpC55e0iHbn" autocomplete="off">
    <label for="" class="form-label d-block fw-bold">
        Category <span class="text-muted fw-normal">(up to 3)</span>
    </label>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" value="1" id="Gaming"  name="categories[]">
            <label class="form-check-label" for="Gaming">Gaming </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" value="2" id="Fashion"  name="categories[]">
            <label class="form-check-label" for="Fashion">Fashion </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" value="3" id="Lifestyle"  name="categories[]">
            <label class="form-check-label" for="Lifestyle">Lifestyle </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" value="5" id="Technology"  name="categories[]">
            <label class="form-check-label" for="Technology">Technology </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" value="6" id="Carrer"  name="categories[]">
            <label class="form-check-label" for="Carrer">Carrer </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" value="7" id="Movie"  name="categories[]">
            <label class="form-check-label" for="Movie">Movie </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" value="8" id="Travel"  name="categories[]">
            <label class="form-check-label" for="Travel">Travel </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" value="10" id="Hobby"  name="categories[]">
            <label class="form-check-label" for="Hobby">Hobby </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" value="11" id="Food"  name="categories[]">
            <label class="form-check-label" for="Food">Food </label>
        </div>
    
    <label for="description" class="form-label d-block fw-bold mt-3">Description</label>
    <textarea name="description" id="description" placeholder="What's on your mind?" class="form-control"></textarea>

    <label for="image" class="form-label fw-bold mt-3">Image</label>
    <input type="file" name="image" id="image" class="form-control">
    <p class="form-text">The acceptable formats are jpeg, jpg, png, and gif only.<br>Max file size is 1048kB.</p>

    <input type="submit" value="Post" class="btn btn-primary w-25">



                 </div>
            </div>

        </main>


@endsection