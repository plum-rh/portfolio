@section('title', 'PLUM | WORKS')
@extends('layouts.app')

@section('content')


    @foreach ($all_categories as $category)
    @if ($category->posts->isNotEmpty())
        <p class="text-light fw-bold mt-5 fs-3 pt-3">{{$category->name}}</p>

        <div class="row">
            @foreach ($category->posts as $post)
                <div class="col-md-6">
                    @if($category->id == 1 || $category->id == 2|| $category->id == 6)

                        <div class="row bg-light m-1 p-3 shadow">
                            <div class="col-lg-4 col-md-6 d-flex align-items-center">
                                <img class="card-img-top img-fluid works-img" src="{{$post->image}}" alt="{{$post->name}}"   data-bs-toggle="modal" data-bs-target="#modal{{$post->id}}" role="button">
                            </div>
                            <div class="col-lg-8 p-3 text-start col-md-6">
                                <h6>{{$post->name}} <span class="float-end text-light">{{$post->id}}</span></h6>
                                <div class="text-muted small">{{$post->description}}</div>
                                <br>
                                <div class="text-muted small">※画像をクリックすると拡大できます。</div>

                            </div>
                        </div>

                        @include('works.tool.modal')

                    @else

                        <div class="row bg-light m-1 p-3 shadow">
                            <div class="col-lg-4 col-md-6 d-flex align-items-center">
                                <a href="{{$post->link}}">
                                    <img class="card-img-top img-fluid works-img" src="{{$post->image}}" alt="{{$post->name}}">
                                </a>

                            </div>
                            <div class="col-lg-8 p-3 text-start col-md-6">
                                <h6>{{$post->name}} <span class="float-end text-light">{{$post->id}}</span></h6>
                                <div class="text-muted small">{{$post->description}}</div>
                                <br>
                                <div class="text-muted small">※画像をクリックするとサイトが表示されます。模擬案件の場合、一部のみデモサイトとして閲覧可能です。</div>

                            </div>
                        </div>

                    @endif




                </div>
            @endforeach

        </div>





    @endif
    @endforeach


@endsection
