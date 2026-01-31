@section('title', 'PLUM | WORKS - ブログアプリ -')
@extends('layouts.app2')

@section('style')


@endsection

@section('content')

    <body>
        @include('works.demo.blog.function.admin-menu')

        <div class="container-fluid bg-danger">
            <div class="fs-3 text-white p-2">
                <i class="fa-solid fa-user-gear"></i>
                <span>Dashboard</span>
            </div>
        </div>
        <div class="container-fluid bg-light mt-3">
            <div class="container text-center ">
                <div class="row py-3">
                    <div class="col">
                        <a href="/works/blog/add-post" class="btn btn-primary w-100 "><i class="fa-solid fa-circle-plus"></i>Add Post</a>
                    </div>
                    <div class="col">
                        <a href="/works/blog/categories" class="btn btn-success w-100"><i class="fa-solid fa-folder-plus"></i>Add
                            Category</a>
                    </div>
                    <div class="col">
                        <a href="/works/blog/users" class="btn btn-warning w-100 text-white"><i class="fa-solid fa-user-plus"></i>Add
                            User</a>
                    </div>
                </div>

            </div>
        </div>

        <div class="container mt-3">
            <h1 class="lead fs-4">ALL POSTS</h1>
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-12">
                    <div class="table-responsive-sm">
                        <table class="table table-striped table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th>#</th>
                                    <th>TITLE</th>
                                    <th>AUTHOR</th>
                                    <th>CATEGORY</th>
                                    <th>DATE POSTED</th>
                                    <th><!--BUTTONS--></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>5</td>
                                    <td>The Quiet Power of Reading Before Bed</td>
                                    <td>emma_s</td>
                                    <td>Book</td>
                                    <td>2024-11-03</td>
                                    <td><button class="btn btn-outline-dark rounded-1"><i
                                                class="fa-solid fa-angles-right"></i>Details</button></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Lost in Kyoto’s Hidden Alleys</td>
                                    <td>Cara</td>
                                    <td>Travel</td>
                                    <td>2025-11-08</td>
                                    <td><button class="btn btn-outline-dark rounded-1"><i
                                                class="fa-solid fa-angles-right"></i>Details</button></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Homemade Ramen in 20 Minutes</td>
                                    <td>Cara</td>
                                    <td>Food</td>
                                    <td>2025-07-22</td>
                                    <td><button class="btn btn-outline-dark rounded-1"><i
                                                class="fa-solid fa-angles-right"></i>Details</button></td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Morning Habits That Actually Work</td>
                                    <td>emma_s</td>
                                    <td>Health</td>
                                    <td>2025-10-21</td>
                                    <td><button class="btn btn-outline-dark rounded-1"><i
                                                class="fa-solid fa-angles-right"></i>Details</button></td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Running Taught Me to Slow Down</td>
                                    <td>Cara</td>
                                    <td>Health</td>
                                    <td>2025-10-16</td>
                                    <td><button class="btn btn-outline-dark rounded-1"><i
                                                class="fa-solid fa-angles-right"></i>Details</button></td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Sketching the City from a Café Window</td>
                                    <td>Cara</td>
                                    <td>Art</td>
                                    <td>2023-04-14</td>
                                    <td><button class="btn btn-outline-dark rounded-1"><i
                                                class="fa-solid fa-angles-right"></i>Details</button></td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>A Walk After the Rain</td>
                                    <td>alice_m</td>
                                    <td>Nature</td>
                                    <td>2025-11-15</td>
                                    <td><button class="btn btn-outline-dark rounded-1"><i
                                                class="fa-solid fa-angles-right"></i>Details</button></td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>Do We Share Too Much Online?</td>
                                    <td>ethanb</td>
                                    <td>Technology</td>
                                    <td>2025-11-14</td>
                                    <td><button class="btn btn-outline-dark rounded-1"><i
                                                class="fa-solid fa-angles-right"></i>Details</button></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card bg-primary text-white text-center mb-3 rounded-0">
                        <div class="card-header  border-bottom-0  bg-primary">
                            <h1 class="lead fs-2 m-0">Posts</h1>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title lead fs-2 m-0"><i class="fa-solid fa-pencil"></i> 11</h1>
                        </div>
                        <div class="card-footer  border-top-0  bg-primary">
                            <button class="btn btn-outline-light rounded-0" onclick="location.href='/works/blog/posts'">VIEW</button>
                        </div>
                    </div>

                    <div class="card bg-success text-white text-center mb-3  rounded-0">
                        <div class="card-header  border-bottom-0 ">
                            <h1 class="lead fs-2 m-0">Categoles</h1>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title lead fs-2 m-0"><i class="fa-regular fa-folder-open"></i> 8</h1>
                        </div>
                        <div class="card-footer  border-top-0">
                            <button class="btn btn-outline-light rounded-0"
                                onclick="location.href='/works/blog/categories'">VIEW</button>
                        </div>
                    </div>

                    <div class="card bg-warning text-white text-center mb-3 rounded-0">
                        <div class="card-header  border-bottom-0  bg-warning">
                            <h1 class="lead fs-2 m-0">Users</h1>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title lead fs-2 m-0"><i class="fa-solid fa-users"></i> 9</h1>
                        </div>
                        <div class="card-footer  border-top-0  bg-warning">
                            <button class="btn btn-outline-light rounded-0" onclick="location.href='/works/blog/users'">VIEW</button>
                        </div>
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
