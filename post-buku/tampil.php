<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <title>Bootstrap</title>
  </head>
  <body>
    <?php 
    // menangkap data nama dengan method post
    $buku = $_POST['buku'];
    // menangkap data usia dengan method post
    $harga = $_POST['harga'];
    
    $diskon = $harga*$buku*0.05;
    // echo "Harga buku = $harga";
    // echo "<br>";
    // echo "Jumlah buku = $buku";
    // echo "<br>";
    if($buku > 20){
        $nilai=$harga*$buku-$diskon;
        $akhir = "Harga dengan diskon = $nilai"; 
        // echo "Harga Tanpa Diskon = $nilai1";
        // echo "<br>";
        // echo "Harga dengan diskon = $nilai";
    }else{
        $nilai=$harga*$buku;
        $akhir = "Harga tanpa diskon = $nilai"; 
        // echo "Harga asli tanpa diskon = $nilai2";
    }
    ?>

    <div class="container">
    <div class="row">
        <div class="col-sm">
        </div>
        <div class="col-sm">
            <h1><?php echo $akhir;?></h1>
            <a class="btn btn-primary btn-lg" href="formbuku.php" role="button">Kembali</a>
        </div>
        <div class="col-sm">
        </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>