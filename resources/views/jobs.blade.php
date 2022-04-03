<!DOCTYPE html>
<html lang="en">

@include('includes.header')
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

   @include('includes.footer')


</body>

</html>