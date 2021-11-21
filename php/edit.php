<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/styling.css">
    <link rel="stylesheet" type="text/css" href="../css/createuser.css">


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
            <li><a class="links" href="index.php">Home</a></li>
            <li><a class="links" href="transactionhistory.php">Transaction History</a></li>
            <li><a class="links" href="transfermoney.php">Transfer Money</a></li>
            <li><a class="links" href="home.php">Log Out</a></li>

        </ul>
    </nav>
</header>
<body style="background-color : #82E0AA;">

<?php

include "config.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$qry = mysqli_query($conn,"select * from users where id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $balance =$_POST['balance'];

    $edit = mysqli_query($conn,"update users set name='$name', email='$email',balance = '$balance' where id='$id'");

    if($edit)
    {
        mysqli_close($conn); // Close connection
        header("location:transfermoney.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }
}
?>



<br>
<br>
<br>

<br>

<div class="background">
    <div class="container">
        <div class="screen">
            <div class="screen-header">
                <div class="screen-header-right">
                    <div class="screen-header-ellipsis"></div>
                    <div class="screen-header-ellipsis"></div>
                    <div class="screen-header-ellipsis"></div>
                </div>

            </div>
            <h3 class="text-center pt-4" > Update Your Account</h3>
            <div class="screen-body">

                <div class="screen-body-item left">
                    <img class="img-fluid" src="../images/user3.png">
                    <br>
                    <br>

                    <hr class="mb-4">

                </div>


<form method="POST">
    <br>
    <br>
    Name:
    <input type="text" name="name" value="<?php echo $data['name'] ?>" placeholder="Enter Full Name" Required>

    <br>
    <br>
    Email:
    <input type="text" name="email" value="<?php echo $data['email'] ?>" placeholder="Enter Email" Required>
    <br>

    <br>
    Balance:
    <input type="text" name="balance" value="<?php echo $data['balance'] ?>" placeholder="Enter Balance" Required>
    <br>


    <hr class="mb-4">
    <input type="submit" name="update" value="Update">
</form>