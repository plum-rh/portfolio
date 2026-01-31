@section('title', 'PLUM | WORKS - ブログアプリ -')
@extends('layouts.app2')

@section('style')


@endsection

@section('content')

    <body>
        @include('works.demo.blog.function.admin-menu')


        <div class="container-fluid bg-primary">
            <div class="fs-3 text-white p-2">
                <i class="fa-solid fa-pen-nib"></i>
                <span>Post</span>
            </div>
        </div>
        <div class="ps-5 ms-5 my-3">
            <a href="posts" class="text-dark text-decoration-none"><i class="fa-solid fa-angle-left"></i> Back to Posts</a>
        </div>

        <div class="card w-50 m-auto rounded-0">
            <div class="card-header mx-auto bg-light border-0">
                <h1 class="lead display-5">
                    <i class="fa-regular fa-pen-to-square"></i></i>Add Post
                </h1>
            </div>
            <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-md">
                            <input type="text"
                                class="form-control rounded-0 border-end-0 border-start-0 border-top-0 border-info border-3"
                                name="title" id="title" placeholder="TITLE">
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-md">
                            <input type="date"
                                class="form-control rounded-0 border-end-0 border-start-0 border-top-0 border-dark border-3"
                                name="date" id="date" placeholder="dd/mm/yyyy">
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-md">
                            <select name="category" id="category"
                                class="form-select rounded-0 border-end-0 border-start-0 border-top-0 border-dark border-3">
                                <option value="" hidden>CATEGORY</option>
                                <option value="3">Food</option>
                                <option value="4">Book</option>
                                <option value="8">Travel</option>
                                <option value="9">Technology</option>
                                <option value="10">Health</option>
                                <option value="11">Art</option>
                                <option value="12">Nature</option>
                                <option value="15">Education</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-md">
                            <textarea name="message" class="form-control rounded-0 border-dark  border-3" id="message" rows="8"
                                cols="30" placeholder="MESSAGE"></textarea>
                        </div>
                    </div>

                    <div class="input-group mb-5">
                        <span class="input-group-text bg-secondary text-white">Author</span>
                        <select name="author" id="author"
                            class="form-select border border-top-0 border-start-0 border-end-0 rounded-0 border-3 border-dark">
                            <option value="" hidden></option>
                            <option value="20">Cara</option>
                            <option value="21">emma_s</option>
                            <option value="22">ethanb</option>
                            <option value="23">miacarter</option>
                            <option value="24">jameslee</option>
                            <option value="25">user</option>
                            <option value="mark">Mark</option>
                            <option value="john">John</option>
                        </select>
                    </div>

                    <div class="row">
                        <div class="col-md">
                            <button type="submit" name="btn_post" class="btn btn-dark w-100 rounded-0">Post</button>
                        </div>
                    </div>
            </div>
        </div>






        <div class="bg-light text-light">
            <p>footer</p>
            <p>footer</p>
        </div>







        <!-- CDN JS Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
        </script>
    </body>
    <footer class=" fixed-bottom">
        @include('works.demo.blog.function.footer')

    </footer>

@endsection
