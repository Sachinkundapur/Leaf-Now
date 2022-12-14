<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- bootstrap -->
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
            integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
            crossorigin="anonymous">

        <link rel="stylesheet" href="style.css">
        <title>LeafNow</title>

    </head>

    <body>
        <!-- db connection -->
        <?php    include 'include/_dbconnect.php';       ?>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">LeafNow</a>
            <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home
                            <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="user">Buyer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="seller">Seller</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin/index.php">Admin</a>
                    </li>

                </ul>

            </div>
        </nav>

        <div class="container-fluid" id="header">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-8 col-xs-8 header-img">
                    <img class="image1 img-fluid animated" src="main.svg" alt="election">

                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">

                    <div class="container mt-4 pt-4 " data-aos="fade-right">
                        <h2 class="mt-4">LeafNow</h2>
                        <h1 class="mt-4">Buy sell or donate plants and leafs

                        </h1>
                        <h1 class="mt-4">Login as ,</h1>

                        <a class="btn btn-vote mt-4 " href="user/user_login.php">Buyer</a>
                        <a class="btn btn-result mt-4 " href="seller/index.php">Seller</a>

                    </div>
                </div>
            </div>
        </div>

        <!-- bootstrap -->
        <script
            src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
            crossorigin="anonymous"></script>
    </body>

</html>