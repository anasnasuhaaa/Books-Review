<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="copyright" content="MACode ID, https://macodeid.com/">

    <title>Book Review</title>

    <link rel="stylesheet" href="../assets/css/maicons.css">

    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

    <link rel="stylesheet" href="../assets/css/theme.css">

</head>

<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white sticky" data-offset="500">
            <div class="container">
                <a href="#" class="navbar-brand">Books<span class="text-primary">Review.</span></a>

                <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent"
                    aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse collapse" id="navbarContent">
                    <ul class="navbar-nav ml-auto">
                        @yield('nav-items')
                        @auth
                            <li class="nav-item">
                                <a class="btn btn-primary ml-lg-2" href="/dashboard">Dashboard</a>
                            </li>
                        @endauth
                        @guest
                            <li class="nav-item">
                                <a class="btn btn-primary ml-lg-2" href="/login">Login</a>
                            </li>
                        @endguest
                    </ul>
                </div>

            </div>
        </nav>

        @yield('content')

        <footer class="page-footer bg-image p-4 m-0 " style="background-image: url(../assets/img/world_pattern.svg);">
            <div class="container">


                <p class="text-center m-0" id="copyright">Copyright &copy; 2024. Develop by Books Review
                    Team. <a href="https://gitlab.com/anasnasuhaaa/books-review" target="_blank">GitLab</a></p>
            </div>
        </footer>

        <script src="../assets/js/jquery-3.5.1.min.js"></script>

        <script src="../assets/js/bootstrap.bundle.min.js"></script>

        <script src="../assets/js/google-maps.js"></script>

        <script src="../assets/vendor/wow/wow.min.js"></script>

        <script src="../assets/js/theme.js"></script>

        @include('sweetalert::alert')
        @stack('script')


</body>

</html>
