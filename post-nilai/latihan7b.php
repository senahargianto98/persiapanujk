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
        $uts = $_POST['uts'];
        $uas = $_POST['uas'];
        $tugas = $_POST['tugas'];
        // $uts = 75;
        // $uas = 80;
        // $tugas = 85;
        $totaluts = 0.35;
        $totaluas = 0.5;
        $totaltugas = 0.15;
        $total = $uts*$totaluts+$uas*$totaluas+$tugas*$totaltugas;
        // echo "Nilai UTS = $uts";
        // echo "<br>";
        // echo "Nilai UAS = $uas";
        // echo "<br>";
        // echo "Nilai Tugas = $tugas";
        // echo "<br>";
        // echo "Nilai Total =  $total";
    ?>
    <div class="container">
    <div class="row">
        <div class="col-sm">
        </div>
        <div class="col-10">
        <table class="table table-dark">
        <thead>
            <tr>
            <th scope="col">UTS</th>
            <th scope="col">UAS</th>
            <th scope="col">Tugas</th>
            <th scope="col">Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row"><?php echo $uts; ?></th>
            <td><?php echo $uas; ?></td>
            <td><?php echo $tugas; ?></td>
            <td><?php echo $total; ?></td>
            </tr>
        </tbody>
        </table>
        <div class="mx-auto" style="width: 200px;">
            <a class="btn btn-primary btn-lg" href="formnilai.php" role="button">Kembali</a>
        </div>
        </div>
        <div class="col-sm">
        </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>