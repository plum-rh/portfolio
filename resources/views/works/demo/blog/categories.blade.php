@section('title', 'PLUM | WORKS - ブログアプリ -')
@extends('layouts.app2')

@section('style')


@endsection

@section('content')
    <body>
        @include('works.demo.blog.function.admin-menu')

    <div class="container-fluid bg-success">
            <div class="fs-3 text-white p-2">
                <i class="fa-solid fa-folder"></i>
                <span>Category</span>
            </div>
        </div>

        <div class="card mx-auto border-0 ">
            <div class="card-body">
                    <div class="row mb-2">
                        <div class="col text-end">
                            <label for="category" class="form-label lead fs-5 mt-1">Add Category</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="category" id="category" required autofocus>
                        </div>
                        <div class="col">
                            <input type="submit" name="btn_add" value="ADD" class="btn btn-success rounded-1">
                        </div>
                    </div>
            </div>
        </div>

        <div class="table-responsive-sm text-center w-50 mx-auto">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>CATEGORY ID</th>
                        <th>CATEGORY NAME</th>
                        <th><!--BUTTONS--></th>
                        <th><!--BUTTONS--></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>3</td>
                        <td>Food</td>
                        <td><button class="btn btn-sm btn-warning text-white rounded-1"  name="btn_update" type="submit">Rename</button></td>
                        <td><button class="btn btn-sm btn-danger rounded-1"  name="btn_delete" type="submit">Delete</button></td>
                    </tr>
                                        <tr>
                        <td>4</td>
                        <td>Book</td>
                        <td><button class="btn btn-sm btn-warning text-white rounded-1"  name="btn_update" type="submit">Rename</button></td>
                        <td><button class="btn btn-sm btn-danger rounded-1"  name="btn_delete" type="submit">Delete</button></td>
                    </tr>
                                        <tr>
                        <td>8</td>
                        <td>Travel</td>
                        <td><button class="btn btn-sm btn-warning text-white rounded-1"  name="btn_update" type="submit">Rename</button></td>
                        <td><button class="btn btn-sm btn-danger rounded-1"  name="btn_delete" type="submit">Delete</button></td>
                    </tr>
                                        <tr>
                        <td>9</td>
                        <td>Technology</td>
                        <td><button class="btn btn-sm btn-warning text-white rounded-1"  name="btn_update" type="submit">Rename</button></td>
                        <td><button class="btn btn-sm btn-danger rounded-1"  name="btn_delete" type="submit">Delete</button></td>
                    </tr>
                                        <tr>
                        <td>10</td>
                        <td>Health</td>
                        <td><button class="btn btn-sm btn-warning text-white rounded-1"  name="btn_update" type="submit">Rename</button></td>
                        <td><button class="btn btn-sm btn-danger rounded-1"  name="btn_delete" type="submit">Delete</button></td>
                    </tr>
                                        <tr>
                        <td>11</td>
                        <td>Art</td>
                        <td><button class="btn btn-sm btn-warning text-white rounded-1"  name="btn_update" type="submit">Rename</button></td>
                        <td><button class="btn btn-sm btn-danger rounded-1"  name="btn_delete" type="submit">Delete</button></td>
                    </tr>
                                        <tr>
                        <td>12</td>
                        <td>Nature</td>
                        <td><button class="btn btn-sm btn-warning text-white rounded-1"  name="btn_update" type="submit">Rename</button></td>
                        <td><button class="btn btn-sm btn-danger rounded-1"  name="btn_delete" type="submit">Delete</button></td>
                    </tr>
                                        <tr>
                        <td>15</td>
                        <td>Education</td>
                        <td><button class="btn btn-sm btn-warning text-white rounded-1"  name="btn_update" type="submit">Rename</button></td>
                        <td><button class="btn btn-sm btn-danger rounded-1"  name="btn_delete" type="submit">Delete</button></td>
                    </tr>


                </tbody>
            </table>
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
