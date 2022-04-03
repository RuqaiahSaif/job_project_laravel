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
    <div class="navbar navbar-expand-md  navbar-light text-black bg-nav fw-bold">
        <div class="container">
            <a href="index.html" class="navbar-brand">
                <p>J<span style="color:#f4931e">O</span>B</p>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainmenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainmenu">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item px-3"><a href="index.html" class="nav-link">Home</a></li>
                    <li class="nav-item px-3"><a href="jobs.html" class="nav-link"> Jobs</a></li>
                    <li class="nav-item px-3"><a href="service.html" class="nav-link">Services</a></li>
                    <li class="nav-item px-3"><a href="companies.html" class="nav-link">Companies</a></li>
                    <li class="nav-item px-3"><a href="acount.html" class="nav-link">Acounts</a></li>
                    <a href="signup.html" class="btn" style="border: 1px solid #f4931e;">Sign up</a>
                    <a href="loginpage.html" class="btn " style=" background:#f4931e;border: 1px solid #f4931e;">Log
                        in</a>

                    <li class="nav-item px-3"><a href="loginpage.html" class="nav-link">عربي</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- الوظائف -->
    <!-- البحث -->
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Find job" id="search-key">

                    <select class="filter form-select form-select-lg" id="filter-company"
                        aria-label=".form-select-lg example">
                        <option value="0">All companies</option>
                        <option value="Animator1">Animator1</option>
                        <option value="Animator2">Animator2</option>
                        <option value="Animator3">Animator3</option>
                    </select>
                    <select class="form-select form-select-lg" aria-label=".form-select-lg example">
                        <option selected>cities</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="">search</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- الوظائف -->
    <section class="mb-5 my-5 job_card ">
        <div class="row align-items-center">
            <h3 class="col text-center">Jobs at JOB</h3>
        </div>
        <div class="container card">

            <div class="card-body">
                <div class="row my-5">
                    <div class="col-2">

                        <img src="images/MSF_LOGO.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-5">
                        <h5 class="company" data-company="Animator1">Animator1</h5>
                        <h6>Médecins Sans Frontières - Amman, Jordan</h6>
                        <ul class="d-flex">
                            <i class="bi bi-facebook px-1"></i>
                            <i class="bi bi-twitter px-1"></i>
                            <i class="bi bi-linkedin px-1"></i>
                            <i class="bi bi-youtube px-1"></i>
                        </ul>
                        <small class="text-muted">The French section of Médecins Sans Frontières

                            is recruiting for its project in Amman a
                        </small>
                    </div>
                    <div class="col-5">
                        <p class="py-1 lead">
                        <p>Ref. Number: <span>149536 </span></p>
                        <p>Date Posted: 30-01-2022</p>
                    </div>
                </div>
                <div class="text-end">
                    <a href="jobdetails.html"><button class="btn btn-sm bthover" style="border: 1px solid #f4931e;">
                            More Information</button></a>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="container card ">
            <div class="card-body">
                <div class="row  my-5">
                    <div class="col-2">

                        <img src="images/MSF_LOGO.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-5 ">
                        <h5 class="company" data-company="Animator2">Animator2</h5>
                        <h6>Médecins Sans Frontières - Amman, Jordan</h6>
                        <ul class="d-flex">
                            <i class="bi bi-facebook px-1"></i>
                            <i class="bi bi-twitter px-1"></i>
                            <i class="bi bi-linkedin px-1"></i>
                            <i class="bi bi-youtube px-1"></i>
                        </ul>
                        <small class="text-muted">The French section of Médecins Sans Frontières

                            is recruiting for its project in Amman a
                        </small>
                    </div>
                    <div class="col-5">
                        <p class="py-1 lead">
                        <p>Ref. Number: <span>149536 </span></p>
                        <p>Date Posted: 30-01-2022</p>
                    </div>
                </div>
                <div class="text-end">
                    <a href="jobdetails.html"><button class="btn btn-sm bthover" style="border: 1px solid #f4931e;">
                            More Information</button></a>
                </div>
            </div>
            <!--  -->
            <div class="container card">
                <div class="card-body">
                    <div class="row my-5">
                        <div class="col-2">

                            <img src="images/MSF_LOGO.png" alt="" class="img-fluid">
                        </div>
                        <div class="col-5  ">
                            <h5 class="company" data-company="Animator3">Animator3</h5>
                            <h6>Médecins Sans Frontières - Amman, Jordan</h6>
                            <ul class="d-flex">
                                <i class="bi bi-facebook px-1"></i>
                                <i class="bi bi-twitter px-1"></i>
                                <i class="bi bi-linkedin px-1"></i>
                                <i class="bi bi-youtube px-1"></i>
                            </ul>
                            <small class="text-muted">The French section of Médecins Sans Frontières

                                is recruiting for its project in Amman a
                            </small>
                        </div>
                        <div class="col-5">
                            <p class="py-1 lead">
                            <p>Ref. Number: <span>149536 </span></p>
                            <p>Date Posted: 30-01-2022</p>
                        </div>
                    </div>
                    <div class="text-end">
                        <a href="jobdetails.html"><button class="btn btn-sm bthover" style="border: 1px solid #f4931e;">
                                More Information</button></a>
                    </div>

                </div>
                <!--  -->
                <div class="container card">
                    <div class="card-body">
                        <div class="row my-5">
                            <div class="col-2">

                                <img src="images/MSF_LOGO.png" alt="" class="img-fluid">
                            </div>
                            <div class="col-5  ">
                                <h5 class="company" data-company="Animator1">Animator1</h5>
                                <h6>Médecins Sans Frontières - Amman, Jordan44</h6>
                                <ul class="d-flex">
                                    <i class="bi bi-facebook px-1"></i>
                                    <i class="bi bi-twitter px-1"></i>
                                    <i class="bi bi-linkedin px-1"></i>
                                    <i class="bi bi-youtube px-1"></i>
                                </ul>
                                <small class="text-muted">The French section of Médecins Sans Frontières

                                    is recruiting for its project in Amman a
                                </small>
                            </div>
                            <div class="col-5">
                                <p class="py-1 lead">
                                <p>Ref. Number: <span>149536 </span></p>
                                <p>Date Posted: 30-01-2022</p>
                            </div>
                        </div>
                        <div class="text-end">
                            <a href="jobdetails.html"><button class="btn btn-sm bthover"
                                    style="border: 1px solid #f4931e;">
                                    More Information</button></a>
                        </div>

                    </div>

                </div>

    </section>


    <!-- footer -->

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
                        <h5>JOB</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="about.html" class="text-black">About JOB</a>
                            </li>
                        </ul>
                        <small class="text-muted">
                            JOB is an online career network,
                            serving the MENA Region. As an employment website, JOB serves as a platform
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
                                <a href="#!" class="text-black">JOB
                                    Services</a>
                            </li>
                            <li>
                                <a href="contact.html" class="text-black"> Connect us</a>

                            </li>
                            <li>
                                <a href="#!" class="text-black">Online Recruitment Solutions</a>
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
                                <a href="#!" class="text-black">JOB Cares Initiative</a>
                            </li>
                            <li>
                                <a href="#!" class="text-black">JOB Job Fair</a>
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
                        <p class="mt-3">Subscribe to get job notices</p><a href="#" class="btn "
                            style=" background:#f4931e;border: 1px solid #f4931e; color:white">Subscribe</a>
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
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <script src="js/search.js"></script>


</body>

</html>