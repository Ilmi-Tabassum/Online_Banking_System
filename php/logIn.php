<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../css/styling.css">
    <link rel="stylesheet" type="text/css" href="../css/about.css">

        <title>Online Banking Transition</title>



    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>

<header>
    <nav id="navbar">
        <h1 class="headText">Online Banking System</h1>
        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <ul class="navlinks">
            <li><a class="links" href="home.php">Home</a></li>
            <li><a class="links" href="about.php">Contact</a></li>
            <li><a class="links" href="logIn.php">Log In</a></li>

        </ul>
    </nav>
</header>
<?php
include 'config.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];


    $sql="insert into orders(name,phone,email,address) values('{$name}','{$phone}','{$email}','{$address}')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "<script> window.location='home.php'; </script>";

    }
}
?>
<body class="bg-light">
<div class="container">
    <div class="py-5 text-center">

        <p class="lead"></p>
    </div>

    <div class="row">

    </div>

        <div class="col-md-8 order-md-5">
            <h4 class="mb-1"></h4>
            <form method="POST" class="needs-validation">
                <div class="app-form-group">
<!--                    <div class="col-md-12 mb-3">-->
                        <label for="firstName">Full name</label>
                        <input type="text" name="name" class="form-control"  placeholder="Enter Full Name"
                               required>
                        <div class="invalid-feedback">
                            Valid customer name is required.
                        </div>
                    </div>
                <br>

                <div class="mb-3">
                    <label for="mobile">Mobile</label>
                    <div class="input-group">
                        <div class="app-form-group">

                            <span class="input-group-text">+88</span>
                        </div>


                        <input type="text" name="phone" class="form-control"  placeholder="Mobile"
                               value="01xxxxxxxx" required>
                        <div class="invalid-feedback" style="width: 100%;">
                            Your Mobile number is required.
                        </div>
                    </div>
                    <br>
                <div class="mb-3">
                    <label for="email">Email <span class="text-muted"></span></label>
                    <div class="app-form-group">
                    <input type="email" name="email" class="form-control" id="email"
                           placeholder="you@example.com" value="you@example.com" required>
                    <div class="invalid-feedback">
                        Please enter a valid email address
                    </div>
                </div>
                    <br>

                <div class="mb-3">
                    <label for="address">Address</label>
                    <div class="app-form-group">
                    <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St"
                           value="Address" required>
                    <div class="invalid-feedback">

                    </div>
                </div>


                    <br>
                    <br>
                <div class="row">
                    <div class="col-md-5 mb-3">
                        <label for="country">Country</label>
                        <select class="custom-select d-block w-100" id="country" name = "country" required>
                            <option value="">Choose</option>
                            <option value="Bangladesh">Bangladesh</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid country.
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="col-md-4 mb-3">
                        <label for="state">State</label>
                        <select class="custom-select d-block w-100" id="state" name = "state" required>

                            <option value="Dhaka">Dhaka</option>
                            <option value="Barishal">Barishal</option>
                            <option value="Chattogram">Chattogram</option>
                            <option value="Khulna">Khulna</option>
                            <option value="Rajshahi">Rajshahi</option>
                            <option value="Rangpur">Rangpur</option>
                            <option value="Mymensingh">Mymensingh</option>
                            <option value="Sylhet">Sylhet</option>
                        </select>
                        <div class="invalid-feedback">
                            Please provide a valid state.
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="col-md-3 mb-3">
                        <label for="zip">Zip</label>
                        <input type="text" class="form-control" id="zip" name = "zip" placeholder="1207" required>
                        <div class="invalid-feedback">
                            Zip code required.
                        </div>
                    </div>
                </div>

                    <hr class="mb-4">
                    <button class="btn btn-danger btn-lg btn-block" type="submit">
                    <a id="donate" href="./index.php">
                    submit💝
                    </a>
            </form>
        </div>
    </div>

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">Online Banking System</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacy</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
    </footer>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</html>
