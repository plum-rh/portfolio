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

        <div class="container">
            <div class="text-end">
                <button class="btn btn-outline-dark m-2 rounded-1"  onclick="location.href='add-post'">
                    <i class="fa-solid fa-pen-to-square"></i>
                    Add POST
                </button>
            </div>


            <div class="table-responsive-sm">
                <table class="table table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>POST ID</th>
                            <th>TITLE</th>
                            <th>CATEGORY</th>
                            <th>DATE POSTED</th>
                            <th><!--BUTTONS--></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>5</td>
                            <td>The Quiet Power of Reading Before Bed</td>
                            <td>Book</td>
                            <td>2024-11-03</td>
                            <td>
                                <button class="btn btn-outline-dark rounded-1">
                                    <i class="fa-solid fa-angles-right"></i> Details
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>6</td>
                            <td>Lost in Kyoto’s Hidden Alleys</td>
                            <td>Travel</td>
                            <td>2025-11-08</td>
                            <td>
                                <button class="btn btn-outline-dark rounded-1">
                                    <i class="fa-solid fa-angles-right"></i> Details
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>7</td>
                            <td>Homemade Ramen in 20 Minutes</td>
                            <td>Food</td>
                            <td>2025-07-22</td>
                            <td>
                                <button class="btn btn-outline-dark rounded-1">
                                    <i class="fa-solid fa-angles-right"></i> Details
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>8</td>
                            <td>Morning Habits That Actually Work</td>
                            <td>Health</td>
                            <td>2025-10-21</td>
                            <td>
                                <button class="btn btn-outline-dark rounded-1">
                                    <i class="fa-solid fa-angles-right"></i> Details
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>9</td>
                            <td>Running Taught Me to Slow Down</td>
                            <td>Health</td>
                            <td>2025-10-16</td>
                            <td>
                                <button class="btn btn-outline-dark rounded-1">
                                    <i class="fa-solid fa-angles-right"></i> Details
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>10</td>
                            <td>Sketching the City from a Café Window</td>
                            <td>Art</td>
                            <td>2023-04-14</td>
                            <td>
                                <button class="btn btn-outline-dark rounded-1">
                                    <i class="fa-solid fa-angles-right"></i> Details
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>11</td>
                            <td>A Walk After the Rain</td>
                            <td>Nature</td>
                            <td>2025-11-15</td>
                            <td>
                                <button class="btn btn-outline-dark rounded-1">
                                    <i class="fa-solid fa-angles-right"></i> Details
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>14</td>
                            <td>Do We Share Too Much Online?</td>
                            <td>Technology</td>
                            <td>2025-11-14</td>
                            <td>
                                <button class="btn btn-outline-dark rounded-1">
                                    <i class="fa-solid fa-angles-right"></i> Details
                                </button>
                            </td>
                        </tr>
                    </tbody>


                </table>
            </div>

        </div>
        <div class="bg-light text-light">
            <p>footer</p>
            <p>footer</p>
        </div>







        <!-- CDN JS Bootstrap -->
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>
    <footer class=" fixed-bottom">
        @include('works.demo.blog.function.footer')

    </footer>

@endsection
