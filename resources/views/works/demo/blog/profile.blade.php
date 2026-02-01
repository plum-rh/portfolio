@section('title', 'PLUM | WORKS - ブログアプリ -')
@extends('layouts.app2')

@section('style')


@endsection

@section('content')

    <body>
        @include('works.demo.blog.function.admin-menu')

        <div class="container-fluid bg-info">
            <div class="fs-3 text-white p-2">
                <i class="fa-solid fa-user"></i>
                <span>Profile</span>
            </div>
        </div>
        <div class="container-fluid bg-light">
            <div class="text-center">
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-3">
                        <a href="#" class="btn btn-primary rounded-1 w-100 my-3 btn-sm"><i class="fa-solid fa-lock"></i>Change Password</a>
                    </div>
                    <div class="col-3">
                        <a href="#" class="btn btn-danger rounded-1 w-100 my-3 btn-sm"><i class="fa-solid fa-trash"></i>Delete Account</a>
                    </div>
                    <div class="col-3"></div>
                </div>
            </div>
        </div>


        <div class="card border-0 mx-auto w-75">
            <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="first_name" class="form-label">First Name</label>
                                    <input type="text" class="form-control form-control rounded-1" name="first_name" id="first-name" placeholder="Mark"  value="Mark">
                                </div>
                                <div class="col">
                                    <label for="last_name" class="form-label">Last Name</label>
                                    <input type="text" class="form-control form-control rounded-1" name="last_name" id="last-name" placeholder="Lee" value="Lee">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-8">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" class="form-control form-control rounded-1" name="address" id="address" placeholder="California, USA"  value="California, USA">
                                </div>
                                <div class="col">
                                    <label for="contact_number" class="form-label">Contact Number</label>
                                    <input type="number" class="form-control form-control rounded-1" name="contact_number" id="contact-number" placeholder="78-785547-452"  value="78-785547-452">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control form-control rounded-1" name="username" id="username" placeholder="mark"  value="mark">
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control form-control rounded-1" name="password" id="password" placeholder="enter password to confirm">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <input type="submit" class="btn btn-primary rounded-1 w-100" name="btn_submit" value="UPDATE">
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="row">
                                <div class="col">
                                    <img src={{ asset ("images/guineapig.png") }} alt="GuineaPig" class="img-fluid">
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col">
                                    <div class="input-group mb-5">
                                        <input type="file" name="photo" class="form-control">
                                    </div>
                                </div>
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
