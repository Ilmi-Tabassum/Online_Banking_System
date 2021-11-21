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
<div class="bg-img">
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
    include 'config.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('User created');
                               window.location='transfermoney.php';
                              
                     </script>";
                    
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
        <h3 class="text-center pt-4" >Become a User</h3>
      <div class="screen-body">

        <div class="screen-body-item left">
          <img class="img-fluid" src="../images/user3.png">
            <br>
            <br>

            <hr class="mb-4">
            <button class="btn btn- btn-lg btn-block" type="submit">
                <a id="donate" href="./transfermoney.php">
                 Check Account💝</a>
        </div>


        <div class="screen-body-item">
          <form class="app-form" method="post">
            <div class="app-form-group">
              <input class="app-form-control" placeholder="NAME" type="text" name="name" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="EMAIL" type="email" name="email" required>
            </div>

              <div class="app-form-group">
                  <input class="app-form-control" placeholder="PHONE NUMBER" type="number" name="phone" required>
              </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="BALANCE" type="number" name="balance" required>
            </div>
            <br>
            <div class="app-form-group button">

              <input class="app-form-button" type="submit" value="CREATE" name="submit"></input>
              <input class="app-form-button" type="reset" value="RESET" name="reset"></input>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
