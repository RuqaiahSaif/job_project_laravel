<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Dashboard</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <link href="css/main.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src text-center">
                    <a href="index.html" style="text-decoration: none;">
                        <p style="color:black; font-size: 20px; font-weight: bold;">J<span
                                style="color:#f4931e">O</span>B</p>
                    </a>
                </div>

            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic" onclick="menu()">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">

                <div class="dropdown">
                    <button class="btn btn-personal dropdown-toggle" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-circle"></i>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="index.html">Log Out</a></li>


                    </ul>
                </div>

            </div>
            <div class="app-header__content">
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">

                                <div class="widget-content-left  ml-3 header-user-info">

                                </div>
                                <div class="widget-content-right header-user-info ml-3">
                                    <div class="dropdown">
                                        <button class="btn btn-personal dropdown-toggle" type="button"
                                            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-person-circle"></i>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item" href="index.html">Log Out</a></li>


                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="app-main">
            <div class="app-sidebar sidebar-shadow" id="sidebar">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>

                        </div>
                    </div>
                </div>

                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <div class="card bg-light p-2 m-2">
                            <h5 class="card-title">Ruqaiah Saif</h5>

                            <div class="card-body">
                                <img src="images/r.jpg" class="card-img-top rounded-pill" alt="...">
                                <p class="card-text "><i class="bi bi-camera p-2"></i><small class="text-muted">change
                                        picture</small></p>
                                <input type="file" name="" id="">
                            </div>
                        </div>
                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <button class="nav-link active nav-b" id="v-pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                                aria-selected="true"><i class="bi bi-house-door p-1"></i>Personal Information</button>
                            <button class="nav-link nav-b" id="v-pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-profile" type="button" role="tab"
                                aria-controls="v-pills-profile" aria-selected="false"><i class="bi bi-grid-fill p-1"
                                    style="font-size: 20px;"></i>Experience</button>
                            <button class="nav-link nav-b" id="v-pills-messages-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-messages" type="button" role="tab"
                                aria-controls="v-pills-messages" aria-selected="false"><i class="bi bi-mortarboard p-1"
                                    style="font-size: 20px;"></i>Educational</button>
                            <button class="nav-link nav-b" id="v-pills-settings-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-settings" type="button" role="tab"
                                aria-controls="v-pills-settings" aria-selected="false"><i
                                    class="bi bi-bar-chart-fill p-2"></i>Skills</button>
                            <button class="nav-link nav-b" id="v-pills-cources-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-cources" type="button" role="tab" aria-controls="v-pills-"
                                aria-selected="false"> <i class="bi bi-palette p-1"
                                    style="font-size: 20px;"></i>Cources</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="app-main__outer">
                <div class="app-main__inner">

                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                            aria-labelledby="v-pills-home-tab">
                            <!-- personal -->
                            <div class="card">
                                <h5 class="card-header d-flex justify-content-lg-between">
                                    <p>Personal Information</p>
                                </h5>
                                <div class="card-body">
                                    <div class="card-title d-flex justify-content-between">

                                        <div class="card-text">
                                            Name
                                            <p class="lead">Ruqaiah Abdo Saif.</p>


                                        </div>

                                    </div>
                                </div>
                                <hr>
                                <div class="card-body">
                                    <div class="card-title d-flex justify-content-between">

                                        <div class="card-text">
                                            Email
                                            <p class="lead">Ruqaiah@gmail.com</p>


                                        </div>

                                    </div>
                                </div>
                                <hr>
                                <div class="card-body">
                                    <div class="card-title d-flex justify-content-between">

                                        <div class="card-text">
                                            Phone
                                            <p class="lead">+967 (770695605)</p>


                                        </div>

                                    </div>
                                </div>
                                <hr>
                                <div class="card-body">
                                    <div class="card-title d-flex justify-content-between">

                                        <div class="card-text">
                                            Address
                                            <p class="lead">AL Rodh_ Taiz –Yemen</p>


                                        </div>

                                    </div>
                                </div>
                                <hr>
                                <div class="card-body">
                                    <div class="card-title d-flex justify-content-between">

                                        <div class="card-text">
                                            Gender
                                            <p class="lead">Female</p>


                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                            aria-labelledby="v-pills-profile-tab">
                            <!-- exper -->
                            <div class="card">
                                <h5 class="card-header d-flex justify-content-lg-between">
                                    <p>Experiance</p>
                                    <i class="bi bi-plus-lg btn btn-outline-success" data-bs-toggle="modal"
                                        data-bs-target="#exModal"></i>

                                </h5>
                                <div class="card-body">
                                    <div class="card-title d-flex justify-content-between">

                                        <div class="card-text">
                                            Job Title
                                            <p class="lead">DTM</p>


                                        </div>
                                        <div>

                                            <i class="bi bi-pencil btn-sm btn-outline-primary" data-bs-toggle="modal"
                                                data-bs-target="#tjModal">
                                            </i><button type="button" class="btn btn-outline-danger btn-sm p-1 m-2"
                                                data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i
                                                    class="bi bi-trash"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="card-body">
                                    <div class="card-title d-flex justify-content-between">

                                        <div class="card-text">
                                            Experience Years
                                            <p class="lead">2</p>


                                        </div>
                                        <div>

                                            <i class="bi bi-pencil btn-sm btn-outline-primary" data-bs-toggle="modal"
                                                data-bs-target="#yeModal">
                                            </i><button type="button" class="btn btn-outline-danger btn-sm p-1 m-2"
                                                data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i
                                                    class="bi bi-trash"></i></button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                            aria-labelledby="v-pills-messages-tab">
                            <!-- edu-->
                            <div class="card">
                                <h5 class="card-header d-flex justify-content-lg-between">
                                    <p>Education</p>
                                    <i class="bi bi-plus-lg btn btn-outline-success" data-bs-toggle="modal"
                                        data-bs-target="#edModal"></i>

                                </h5>
                                <div class="card-body">
                                    <div class="card-title d-flex justify-content-between">

                                        <div class="card-text">
                                            Level of Education
                                            <p class="lead">Taiz university
                                                Software Engineering</p>


                                        </div>
                                        <div>

                                            <i class="bi bi-pencil btn-sm btn-outline-primary" data-bs-toggle="modal"
                                                data-bs-target="#edumModal">
                                            </i><button type="button" class="btn btn-outline-danger btn-sm p-1 m-2"
                                                data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i
                                                    class="bi bi-trash"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <hr>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                            aria-labelledby="v-pills-settings-tab">
                            <!-- exper -->
                            <div class="card">
                                <h5 class="card-header d-flex justify-content-lg-between">
                                    <p>skills</p>
                                    <i class="bi bi-plus-lg btn btn-outline-success" data-bs-toggle="modal"
                                        data-bs-target="#skillModal"></i>

                                </h5>
                                <div class="card-body">
                                    <div class="card-title d-flex justify-content-between">

                                        <div class="card-text">
                                            skill
                                            <p class="lead">programming skills</p>


                                        </div>
                                        <div>

                                            <i class="bi bi-pencil btn-sm btn-outline-primary" data-bs-toggle="modal"
                                                data-bs-target="#editsModal">
                                            </i><button type="button" class="btn btn-outline-danger btn-sm p-1 m-2"
                                                data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i
                                                    class="bi bi-trash"></i></button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- course -->
                        <div class="tab-pane fade" id="v-pills-cources" role="tabpanel"
                            aria-labelledby="v-pills-cources-tab">
                            <div class="card">
                                <h5 class="card-header d-flex justify-content-lg-between">
                                    <p>Cources</p>
                                    <i class="bi bi-plus-lg btn btn-outline-success" data-bs-toggle="modal"
                                        data-bs-target="#courseModal"></i>

                                </h5>
                                <div class="card-body">
                                    <div class="card-title d-flex justify-content-between">

                                        <div class="card-text">
                                            Course name
                                            <p class="lead">Diploma in English Language from British Center/p>


                                        </div>
                                        <div>

                                            <i class="bi bi-pencil btn-sm btn-outline-primary" data-bs-toggle="modal"
                                                data-bs-target="#editcModal">
                                            </i><button type="button" class="btn btn-outline-danger btn-sm p-1 m-2"
                                                data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i
                                                    class="bi bi-trash"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>


        <!-- Button trigger modal -->


        <!-- Modal -->
        <div class="modal" tabindex="-1" id="staticBackdrop">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete this?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                        <button type="button" class="btn btn-primary">YES</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- experiance -->
        <div class="modal fade" id="exModal" tabindex="-1" aria-labelledby="exModalLabel" aria-hidden="true">
            <div class="modal-dialog ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exModalLabel">add experiance</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Job Title</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputPassword">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Experiance Years</label>

                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="inputPassword">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- title job -->
        <div class="modal fade" id="tjModal" tabindex="-1" aria-labelledby="tjModalLabel" aria-hidden="true">
            <div class="modal-dialog ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tjModalLabel">edit title job</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Job Title</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputPassword">
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- years of experince -->

        <div class="modal fade" id="yeModal" tabindex="-1" aria-labelledby="yeModalLabel" aria-hidden="true">
            <div class="modal-dialog ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="yeModalLabel">Experiance years</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Experiance years</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="inputPassword">
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- edu -->
        <div class="modal fade" id="edModal" tabindex="-1" aria-labelledby="edModalLabel" aria-hidden="true">
            <div class="modal-dialog ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="edModalLabel">add Education </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Level of Education</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputPassword">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Major</label>

                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputPassword">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- تعديل التعليم -->


        <div class="modal fade" id="edumModal" tabindex="-1" aria-labelledby="edumModalLabel" aria-hidden="true">
            <div class="modal-dialog ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="edumModalLabel">Education</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Education major</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="inputPassword">
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- skills -->
        <div class="modal fade" id="skillModal" tabindex="-1" aria-labelledby="skillModalLabel" aria-hidden="true">
            <div class="modal-dialog ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="skillModalLabel">add skill</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">skill</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputPassword">
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- تعديل المهارات -->
        <div class="modal fade" id="editsModal" tabindex="-1" aria-labelledby="editsModalLabel" aria-hidden="true">
            <div class="modal-dialog ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editsModalLabel">edit skill</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">skill</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputPassword">
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- course -->
        <div class="modal fade" id="courseModal" tabindex="-1" aria-labelledby="courseModalLabel" aria-hidden="true">
            <div class="modal-dialog ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="courseModalLabel">add course</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">course name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputPassword">
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- تعديل الكورسات -->
        <div class="modal fade" id="editcModal" tabindex="-1" aria-labelledby="editcModalLabel" aria-hidden="true">
            <div class="modal-dialog ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editcModalLabel">edit course</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">course name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputPassword">
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/bootstrap.bundle.min.js"></script>

        <script>
            function menu() {
                document.getElementById("sidebar").classList.toggle("sidebare-active");

            }


            window.addEventListener('load', function () {
                document.querySelector('input[type="file"]').addEventListener('change', function () {
                    if (this.files && this.files[0]) {
                        var img = document.querySelector('img');
                        img.onload = () => {
                            URL.revokeObjectURL(img.src);  // no longer needed, free memory
                        }

                        img.src = URL.createObjectURL(this.files[0]); // set src to blob url
                    }
                });
            });
        </script>
</body>

</html>