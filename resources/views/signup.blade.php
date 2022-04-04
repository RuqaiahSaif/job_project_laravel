@extends('layout.master')
   @section('content')
    <!--  -->
    <section id="hero" class="bg-light text-dark text-center text-sm-start  py-5">
        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-center">
                <img src="images/undraw_mobile_login_re_9ntv.svg" alt="" class="d-none d-sm-block img-fluid w-50">
                <form class="row g-3">

                    <div class="col-md-12">
                        <h5>Create a Free Account</h5>
                        <label for="validationDefaultUsername" class="form-label fw-bold">Username or Email</label>
                        <div class="input-group">
                            <span class="input-group-text" id="inputGroupPrepend2">@</span>
                            <input type="text" class="form-control" id="validationDefaultUsername"
                                aria-describedby="inputGroupPrepend2" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="validationDefault03" class="form-label fw-bold">password</label>
                        <input type="password" class="form-control" id="validationDefault03" required>
                    </div>
                    <div class="col-md-12">
                        <label for="validationDefault03" class="form-label fw-bold"> confirm password</label>
                        <input type="password" class="form-control" id="validationDefault03" required>
                    </div>


                    <div class="col-12">
                        <button class="btn btn-primary w-100" type="submit"
                            style=" background:#f4931e;border: 1px solid #f4931e;">Sign Up</button>
                        <p>Already have an account?<a href="loginpage.html">Log in</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>


    <!-- footer -->

   @endsection
