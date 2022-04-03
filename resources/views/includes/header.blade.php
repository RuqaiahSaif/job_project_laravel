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
            <a href="{{ url('/index')}}" class="navbar-brand">
                <p>J<span style="color:#f4931e">O</span>B</p>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainmenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainmenu">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item px-3"><a href="{{ url('/index')}}" class="nav-link">Home</a></li>
                    <li class="nav-item px-3"><a href="{{ url('/jobs')}}" class="nav-link"> Jobs</a></li>
                    <li class="nav-item px-3"><a href="{{ url('/service')}}" class="nav-link">Services</a></li>
                    <li class="nav-item px-3"><a href="{{ url('/companies')}}" class="nav-link">Companies</a></li>
                    <li class="nav-item px-3"><a href="{{ url('/acount')}}" class="nav-link">Acounts</a></li>

                    <a href="{{ url('/signup')}}" class="btn" style="border: 1px solid #f4931e;">Sign up</a>
                    <a href="{{ url('/loginpage')}}" class="btn " style=" background:#f4931e;border: 1px solid #f4931e;">Log
                        in</a>

                    <li class="nav-item px-3"><a href="loginpage.html" class="nav-link">عربي</a></li>
                </ul>
            </div>
        </div>
    </div>