<!DOCTYPE html>
<html lang="en">

@include('includes.header')
    <!-- سلايدر -->
    <section class="mb-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/hero-home-woman-test.jpg" class="img-fluid d-block w-100" alt="..."
                                    style="height: 40vh;">
                            </div>
                            <div class="carousel-item">
                                <img src="images/img2.jpg" class=" img-fluid w-100" alt="..." style="height: 40vh;">
                            </div>
                            <div class="carousel-item">
                                <img src="images/slidimg.jpg" class="img-fluid w-100" alt="..." style="height: 40vh;">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- الاعلانات -->
    <section class="mb-5">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <img src="images/ads.gif" alt="" class="img-fluid">
                </div>
            </div>

        </div>
    </section>
    <!-- اخر الوظائف -->


    <div class="container">
        <div class="d-flex justify-content-between border-top">
            <h4>Resent Job</h4><a href="jobs.html"> <button class="btn btn-sm bthover" style="border: 1px solid #f4931e;">Browse All
                    Jobs</button></a>
        </div>
        <div class="row mt-2 ">
            <div class="col-md-3 col-sm-12">
                <div class="card p-2">
                    <!-- <div class="text-right"> <small>Full Time</small> </div> -->
                    <div class="text-center mt-2 p-3"> <img src="images/MSF_LOGO.png" alt="" class="img-fluid"> <span
                            class="d-block fw-bold">Animator</span>
                        <hr>
                        <div class="d-flex flex-row align-items-center justify-content-center"> <i
                                class="fa fa-map-marker"></i> <small class="ml-1">Médecins Sans Frontières - Amman,
                                Jordan</small> </div>
                        <div class="d-flex justify-content-between mt-3"> <small class="text-muted">Date Posted:
                                30-01-2022</small>
                            <a href="jobs.html"> <button class="btn btn-sm bthover" style="border: 1px solid #f4931e;">More
                                   </button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="card p-2">
                    <!-- <div class="text-right"> <small>Full Time</small> </div> -->
                    <div class="text-center mt-2 p-3"> <img src="images/logo-GTFS.png" alt="" class="img-fluid"> <span
                            class="d-block fw-bold">Van Salesman</span>
                        <hr>
                        <div class="d-flex flex-row align-items-center justify-content-center"> <i
                                class="fa fa-map-marker"></i>
                            <small class="ml-1">GTFS - Ajman, UAE</small>
                        </div>
                        <div class="d-flex justify-content-between mt-3"> <small class="text-muted">Date Posted:
                            22-12-2021</small>
                            <a href="jobs.html"> <button class="btn btn-sm bthover" style="border: 1px solid #f4931e;">More
                                    </button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="card p-2">
                    <!-- <div class="text-right"> <small>Full Time</small> </div> -->
                    <div class="text-center mt-2 p-3"> <img src="images/asp.png" alt="" class="img-fluid"> <span
                            class="d-block fw-bold">ASP. NET Developer</span>
                        <hr>
                        <div class="d-flex flex-row align-items-center justify-content-center"> <i
                                class="fa fa-map-marker"></i>
                            <small class="ml-1">Brainstorm Human Resources Consultants - Abu Dhabi, UAE</small>
                        </div>
                        <div class="d-flex justify-content-between mt-3"> <small class="text-muted">Date Posted:
                                13-12-2021</small>
                            <a href="jobs.html"> <button class="btn btn-sm bthover" style="border: 1px solid #f4931e;">More
                                    </button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="card p-2">
                    <!-- <div class="text-right"> <small>Full Time</small> </div> -->
                    <div class="text-center mt-2 p-3"> <img src="images/MSF_LOGO.png" alt="" class="img-fluid"> <span
                            class="d-block fw-bold">Animator</span>
                        <hr>
                        <div class="d-flex flex-row align-items-center justify-content-center"> <i
                                class="fa fa-map-marker"></i>
                            <small class="ml-1">Médecins Sans Frontières - Amman,
                                Jordan</small>
                        </div>
                        <div class="d-flex justify-content-between mt-3"> <small class="text-muted">Date Posted:
                                30-01-2022</small>
                            <a href="jobs.html"> <button class="btn btn-sm bthover" style="border: 1px solid #f4931e;">More
                                   </button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <section>
        <!-- شركائنا -->

        <div class="container">
            <h3 class="text-center m-5 border-top">Our parteners</h3>
            <div class="row justify-content-center align-items-center">
                <div class="col-md-2 col-sm-12">
                    <img src="images/AKS_English_Logo_company.png" alt="" class="img-fluid">
                </div>
                <div class="col-md-2 col-sm-12"><img src="images/logo-GTFS.png" alt="" class="img-fluid"></div>
                <div class="col-md-2 col-sm-12"><img src="images/Arabic_Vertical.png" alt="" class="img-fluid"></div>
                <div class="col-md-2 col-sm-12"><img src="images/Capture.png" alt="" class="img-fluid"></div>
                <div class="col-md-2 col-sm-12"><img src="images/Injaz_Logo.png" alt="" class="img-fluid"></div>
                <div class="col-md-2 col-sm-12"><img src="images/JRF_company.png" alt="" class="img-fluid"></div>
            </div>
        </div>



    </section>
    <!-- footer -->
@include('includes.footer')


</body>

</html>