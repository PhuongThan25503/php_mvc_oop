<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg" style="background-color: #6610f2;">
        <div class="container-fluid">
            <form action='/index' method='post' id='viewFormHome1'>
                <input hidden='true' type='text' name='method' value='logout' class='form-control'>
                <a style="color: #ffffff;" class="navbar-brand" href="#" onclick='document.getElementById("viewFormHome1").submit(); return false'>My Website</a>
            </form>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <form action='/index' method='post' id='viewFormHome2'>
                            <input hidden='true' type='text' name='method' value='logout' class='form-control'>
                            <a style="color: #ffffff;" class="nav-link" href="#" onclick='document.getElementById("viewFormHome2").submit(); return false'>Home</a>
                        </form>
                    </li>
                    <li class="nav-item">
                        <a style="color: #ffffff;" class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #ffffff;" class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Login box -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <section class="vh-100">
                    <div class="container py-5 h-100">
                        <center>
                            <h1>Login</h1>
                        </center>
                        <div class="row d-flex align-items-center justify-content-center mt-5" style="border-radius:50px; border:2px solid #0d6efd; padding:50px">
                            <div class="col-md-8 col-lg-7 col-xl-6">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg" class="img-fluid" alt="Phone image">
                            </div>
                            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                                <form action="/index.php?controller=login" method="POST">
                                    <input hidden="true" type="text" name="method" value="login" class="form-control" id="method">

                                    <!-- Email input -->
                                    <div class="form-outline mb-4">
                                        <input type="text" name="username" id="form1Example13" class="form-control form-control-lg" />
                                        <label class="form-label" for="form1Example13">Username</label>
                                    </div>

                                    <!-- Password input -->
                                    <div class="form-outline mb-4">
                                        <input type="password" name="password" id="form1Example23" class="form-control form-control-lg" />
                                        <label class="form-label" for="form1Example23">Password</label>
                                    </div>
                                    <?php
                                    if ($data["login_message"] != null) {
                                        echo '<p style="color: red" >' . $data["login_message"] . '</p>';
                                    }
                                    ?>
                                    <div class="d-flex justify-content-around align-items-center mb-4">
                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                                            <label class="form-check-label" for="form1Example3"> Remember me </label>
                                        </div>
                                        <a href="#!">Forgot password?</a>
                                    </div>

                                    <!-- Submit button -->
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>

                                    <div class="divider d-flex align-items-center my-4">
                                        <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
                                    </div>
                                </form>
                                <form action="/index" method="GET">
                                    <input hidden="true" name="controller" value="register">
                                    <button type="submit" class="btn btn btn-outline-primary btn-lg btn-block">Register</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- Bootstrap CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"></script>
</body>

</html>