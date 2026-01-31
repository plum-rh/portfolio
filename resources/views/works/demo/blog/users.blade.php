@section('title', 'PLUM | WORKS - ブログアプリ -')
@extends('layouts.app2')

@section('style')


@endsection

@section('content')
    <body>
        @include('works.demo.blog.function.admin-menu')

        <div class="container-fluid bg-warning">
            <div class="fs-3 text-white p-2">
                <i class="fa-solid fa-user-pen"></i>
                <span>User</span>
            </div>
        </div>

        <div class="card w-50 mx-auto border-0 my-3">
            <div class="card-header bg-light border-bottom-0">
                <h1 class="lead display-5 m-0">Add User</h1>
            </div>
            <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-md">
                            <input type="text" class="form-control rounded-1 " name="first_name" id="first-name" placeholder="First Name">
                        </div>
                        <div class="col-md mt-2 mt-md-0">
                            <input type="text" class="form-control rounded-1" name="last_name" id="last-name" placeholder="Last Name">
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-md">
                            <input type="number" class="form-control rounded-1 " name="contact_number" id="contact-number" placeholder="Contact Number">
                        </div>
                        <div class="col-md mt-2  mt-md-0">
                            <input type="text" class="form-control rounded-1" name="address" id="address" placeholder="Address">
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col">
                            <input type="text" class="form-control rounded-1" name="username" id="username" placeholder="Username">
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col">
                            <input type="password" class="form-control rounded-1" name="password" id="password" placeholder="Password">
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col">
                            <input type="password" class="form-control rounded-1" name="confirm_password" id="confirm-password" placeholder="Confirm Password">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <input type="submit" class="btn btn-warning text-white rounded-1 w-100" value="ADD">

                        </div>
                    </div>
            </div>
        </div>

        <div class="table-responsive-sm w-75 mx-auto">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>ACCOUNT ID</th>
                        <th>FULL NAME</th>
                        <th>CONTACT NUMBER</th>
                        <th>ADDRESS</th>
                        <th>USERNAME</th>
                        <th><!--BUTTONS--></th>
                        <th><!--BUTTONS--></th>
                    </tr>
                </thead>
                <tbody>


                                                <tr>
                            <td>18</td>
                            <td>Alice Morgan</td>
                            <td>08012340001</td>
                            <td>Sapporo, Hokkaido</td>
                            <td>alice_m</td>
                            <td><button class="btn btn-warning text-white rounded-1">Update</button></td>
                            <td><button class="btn btn-danger rounded-1">Delete</button></td>
                        </tr>

                                                <tr>
                            <td>19</td>
                            <td>Bob Tanaka</td>
                            <td>08012340002</td>
                            <td>Tokyo, Chiyoda</td>
                            <td>bob_t</td>
                            <td><button class="btn btn-warning text-white rounded-1">Update</button></td>
                            <td><button class="btn btn-danger rounded-1">Delete</button></td>
                        </tr>

                                                <tr>
                            <td>20</td>
                            <td>Cara Suzuki</td>
                            <td>08012340003</td>
                            <td>Osaka, Kita</td>
                            <td>Cara</td>
                            <td><button class="btn btn-warning text-white rounded-1">Update</button></td>
                            <td><button class="btn btn-danger rounded-1">Delete</button></td>
                        </tr>

                                                <tr>
                            <td>21</td>
                            <td>Emma Sato</td>
                            <td>08012340005</td>
                            <td>Nagoya, Naka</td>
                            <td>emma_s</td>
                            <td><button class="btn btn-warning text-white rounded-1">Update</button></td>
                            <td><button class="btn btn-danger rounded-1">Delete</button></td>
                        </tr>

                                                <tr>
                            <td>22</td>
                            <td>Ethan Brooks</td>
                            <td>08023457891</td>
                            <td>22 Greenfield Ave, Osaka</td>
                            <td>ethanb</td>
                            <td><button class="btn btn-warning text-white rounded-1">Update</button></td>
                            <td><button class="btn btn-danger rounded-1">Delete</button></td>
                        </tr>

                                                <tr>
                            <td>23</td>
                            <td>Mia Carter</td>
                            <td>07056432987</td>
                            <td>15 Riverpark St, Tokyo</td>
                            <td>miacarter</td>
                            <td><button class="btn btn-warning text-white rounded-1">Update</button></td>
                            <td><button class="btn btn-danger rounded-1">Delete</button></td>
                        </tr>

                                                <tr>
                            <td>24</td>
                            <td>James Lee</td>
                            <td>08078941236</td>
                            <td>45 Sunrise Rd, Fukuoka</td>
                            <td>jameslee</td>
                            <td><button class="btn btn-warning text-white rounded-1">Update</button></td>
                            <td><button class="btn btn-danger rounded-1">Delete</button></td>
                        </tr>


                    <tr>
                        <td>30</td>
                        <td>John Doe</td>
                        <td>78987-787777</td>
                        <td>Budapest, Hungary</td>
                        <td>john</td>
                        <td><button class="btn btn-warning text-white rounded-1">Update</button></td>
                        <td><button class="btn btn-danger rounded-1">Delete</button></td>
                    </tr>
                    <tr>
                        <td>37</td>
                        <td>Apple Banana</td>
                        <td>789-7547</td>
                        <td>Moscow,Russia</td>
                        <td>abc</td>
                        <td><button class="btn btn-warning text-white rounded-1">Update</button></td>
                        <td><button class="btn btn-danger rounded-1">Delete</button></td>
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
    <footer class="fixed-bottom">
        @include('works.demo.blog.function.footer')

    </footer>

@endsection
