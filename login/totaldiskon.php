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
        <form method="POST" action="">
        <div class="form-group">
            <label for="exampleInputEmail1">Jumlah</label>
            <input type="number" name="jumlah" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Harga</label>
            <input type="number" name="harga" class="form-control">
        </div>
        <button type="submit" name="hitung" class="btn btn-primary">Submit</button>
        <a class="btn btn-primary" href="logout.php" role="button">Keluar</a>

        <!-- <a href="logout.php">Keluar</a> -->
        <h6>Harga Total : <?php if(isset($_POST['hitung'])){
            echo totalharga($_POST['jumlah'],$_POST['harga']);
        }?></h6>

        <h6>Diskon : <?php if(isset($_POST['hitung'])){
            echo hargadiskon($_POST['jumlah'],$_POST['harga']);
        }?></h6>

        <h6>Total Bayar : <?php if(isset($_POST['hitung'])){
            echo totalbayar($_POST['jumlah'],$_POST['harga']);
        }?></h6>
        </form>
        </div>

        <div class="col-sm">
        </div>
    </div>
    </div>






    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>



