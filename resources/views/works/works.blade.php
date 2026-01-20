@extends('layouts.app')

@section('content')


    @foreach ($all_categories as $category)
        <p class="text-light fw-bold mt-5">{{$category->name}}</p>


        <div class="row">
            @foreach ($category->posts as $post)
                <div class="col-md-6">

                    <div class="row bg-light m-1 p-3 shadow">
                        <div class="col-4">
                            <img class="card-img-top img-fluid works-img" src="{{$post->image}}" alt="">
                        </div>
                        <div class="col-8 p-3 text-start">
                            <h6>{{$post->name}}</h6>
                            <div class="text-muted small">{{$post->description}}</div>

                        </div>
                    </div>


                </div>
            @endforeach

        </div>





    @endforeach


@endsection
