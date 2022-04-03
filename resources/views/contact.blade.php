<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>jobs</title>
</head>

<body>
    <div class="navbar navbar-expand-md  fixed-top navbar-light text-black bg-nav fw-bold">
        <div class="container">
            <a href="#" class="navbar-brand"><img src="" class="img-fluid w-25">job</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainmenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainmenu">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item px-3"><a href="index.html" class="nav-link">Home</a></li>
                    <li class="nav-item px-3"><a href="jobs.html" class="nav-link"> Jobs</a></li>
                    <li class="nav-item px-3"><a href="service.html" class="nav-link">Services</a></li>
                    <li class="nav-item px-3"><a href="companies.html" class="nav-link">Companies</a></li>
                    <a href="#" class="btn mx-2" role="button" data-bs-toggle="button"
                        style="border: 1px solid #f4931e;">Sign up</a>
                    <a href="loginpage.html" class="btn " role="button" data-bs-toggle="button"
                        style=" background:#f4931e;border: 1px solid #f4931e;">Log in</a>

                    <li class="nav-item px-3"><a href="loginpage.html" class="nav-link">عربي</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Wrapper container -->
    <section id="hero" class="bg-light text-dark text-center text-sm-start  py-5">
        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-center">
                <img src="images/undraw_connected_re_lmq2.svg" alt="" class="d-none d-sm-block img-fluid w-50">
                <form id="contactForm" class="row g-3">

                    <!-- Name input -->
                    <div class="mb-3">
                        <label class="form-label" for="name">Name</label>
                        <input class="form-control" id="name" type="text" placeholder="Name"
                            data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                    </div>

                    <!-- Email address input -->
                    <div class="mb-3">
                        <label class="form-label" for="emailAddress">Email Address</label>
                        <input class="form-control" id="emailAddress" type="email" placeholder="Email Address"
                            data-sb-validations="required, email" />
                        <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address is
                            required.</div>
                        <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email is not
                            valid.</div>
                    </div>

                    <!-- Message input -->
                    <div class="mb-3">
                        <label class="form-label" for="message">Message</label>
                        <textarea class="form-control" id="message" type="text" placeholder="Message"
                            style="height: 10rem;" data-sb-validations="required"></textarea>
                        <div class="invalid-feedback" data-sb-feedback="message:required">Message is required.</div>
                    </div>

                    <!-- Form submissions success message -->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center mb-3">Form submission successful!</div>
                    </div>

                    <!-- Form submissions error message -->
                    <div class="d-none" id="submitErrorMessage">
                        <div class="text-center text-danger mb-3">Error sending message!</div>
                    </div>

                    <!-- Form submit button -->
                    <div class="d-grid">
                        <button class="btn btn-primary btn-lg" type="submit" style=" background:#f4931e;border: 1px solid #f4931e;">Submit</button>
                    </div>

                </form>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="bg-footer">
        <!-- Grid container -->
        <div class="container p-4">


            <!-- Section: Links -->
            <section class="">
                <!--Grid row-->
                <div class="row g-5">

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                        <h5>Akhtaboot</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#" class="text-black">About Akhtaboot</a>
                            </li>
                        </ul>
                        <small class="text-muted">
                            Akhtaboot is an online career network,
                            serving the MENA Region. As an employment website, Akhtaboot serves as a platform
                            that connects employers and job seekers,
                            creating vast opportunities for talented candidates.
                        </small>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4  mb-4 pr-5 mb-md-0">
                        <h5>Employers</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#!" class="text-black">Akhtaboot Services</a>
                            </li>
                            <li>
                                <a href="#!" class="text-black">Online Recruitment Solutions</a>
                            </li>
                            <li>
                                <a href="#!" class="text-black">Career Connect</a>
                            </li>
                            <li>
                                <a href="#!" class="text-black">Testello Assessment Tools</a>
                            </li>
                        </ul>
                        <h5>Resources</h5>

                        <ul class="list-unstyled  mb-0">
                            <li>
                                <a href="#!" class="text-black ">Blog</a>
                            </li>
                            <li>
                                <a href="#!" class="text-black">Events Calendar</a>
                            </li>
                            <li>
                                <a href="#!" class="text-black">Akhtaboot Cares Initiative</a>
                            </li>
                            <li>
                                <a href="#!" class="text-black">Akhtaboot Job Fair</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5>Stay Connected</h5>

                        <ul class=" row list-unstyled mb-0">
                            <li class="col">
                                <i class="bi bi-facebook"></i>
                            </li>
                            <li class="col">
                                <i class="bi bi-twitter text-black"></i>
                            </li>
                            <li class="col">
                                <i class="bi bi-linkedin"></i>
                            </li>
                            <li class="col">
                                <i class="bi bi-youtube"></i>
                            </li>
                            <li class="col">
                                <i class="bi bi-instagram"></i>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </section>
            <!-- Section: Links -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="bg-dark copy text-center m-1">
            Job.com 2022

        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
    <script src="js/bootstrap.bundle.min.js"></script>


</body>

</html>