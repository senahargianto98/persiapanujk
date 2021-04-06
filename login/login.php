<?php
    include "loginfunction.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Hello, world!</title>
  </head>
  <body>
    
    <div class="container">
    <div class="row">
        <div class="col-sm">
        </div>
        <div class="col-sm">
        <h1>Login</h1>
        <form method="POST" action="login.php">
        <div class="form-group">
            <label for="exampleInputEmail1">Usernmae</label>
            <input type="text" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>

        </div>
        <div class="col-sm">
        </div>
    </div>
    </div>

    <?php

 
    // cek apakah tombol sumit sudah di klik atau belum
    if(isset($_POST['submit'])){
       if (login($_POST['email'],$_POST['password'])){
        $_SESSION['email'] = $email;
        header('Location: totaldiskon.php');
       }else{
        echo '<p>Password atau email yang kamu masukkan salah</p>';
       }
    }
    
    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>


