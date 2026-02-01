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

    <div class="row">
    <div class="col-4">
                    <i class="fa-solid fa-circle-user text-secondary text-center d-block icon-lg"></i>
            </div>
    <div class="col-8">
        <div class="row align-items-center mb-3">
            <div class="col-auto">
                <h2 class="fw-lighter display-6 mb-0">user3</h2>
            </div>
            <div class="col-auto p-2">
                                                            <form action="http://127.0.0.1:8001/follow/3/destroy" method="post">
                            <input type="hidden" name="_token" value="yYwVXMCmCxibw6skwnQpOIGzIxfkpKpC55e0iHbn" autocomplete="off">                            <input type="hidden" name="_method" value="DELETE">                            <button type="submit" class="btn btn-outline-danger btn-sm fw-bold">Unfollow</button>
                        </form>

                            </div>
        </div>
        <div class="row mb-3">
            <div class="col-auto">
                <a href="" class="text-decoration-none text-dark">
                    <strong>1</strong>
                    Post
                </a>
            </div>
            <div class="col-auto">
                <a href="" class="text-decoration-none text-dark">
                    <strong>2</strong>
                    Followers
                </a>
            </div>
            <div class="col-auto">
                <a href="" class="text-decoration-none text-dark">
                    <strong>4</strong>
                    Followings
                </a>
            </div>


        </div>
        <p class="fw-bold mt-3"></p>
    </div>
</div>

    <div style="margin-top: 100px;">
                    <div class="row  align-items-center">
                                    <div class="col-lg-4 col-md-6 mb-4">
                        <a href="" class="">
                            <img src="data:image/jpg;base64,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" alt="" class="img-fluid w-100 ">
                        </a>
                    </div>

            </div>
            </div>



                 </div>
            </div>

        </main>
@endsection
