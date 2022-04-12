@extends('layout.master')
@section('content')
    <!--  -->
    <section id="hero" class="bg-light text-dark text-center text-sm-start  py-5">
        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-center">
                <img src="images/undraw_login_re_4vu2.svg" alt="" class="d-none d-sm-block img-fluid w-50">
                <form class="row g-3" action="{{ route('do_login') }}" method="POST">
                     @csrf
                    <div class="col-md-12">
                        <h5>Log in</h5>
                        <label for="validationDefaultUsername" class="form-label fw-bold">Email</label>
                        <div class="input-group">
                            <span class="input-group-text" id="inputGroupPrepend2">@</span>
                            <input type="text" class="form-control" id="validationDefaultUsername"
                                aria-describedby="inputGroupPrepend2" name="email">
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="validationDefault03" class="form-label fw-bold">password</label>
                        <input type="password" class="form-control" id="validationDefault03" name="password">
                                 @error('password')
<div class="alert alert-danger">{{ $message }}</div>
        @enderror
                    </div>


                    {{-- <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                            <label class="form-check-label" for="invalidCheck2">
                                Remember me
                            </label>

                        </div> --}}
                    {{-- </div> --}}
                    <div class="col-12">
                       <button class="btn btn-primary w-100" type="submit"
                            style=" background:#f4931e;border: 1px solid #f4931e;">log in</button>
                        <p>Don't have an account yet?<a href="{{ route('signup') }}">Sign Up Now</a></p>
                        {{-- <p>chang your password<a href="{{ route('change-password') }}"> change Now</a></p> --}}
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
