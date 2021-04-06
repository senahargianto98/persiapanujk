<?php
    include "function.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div>
    <h1>Luas Dan Keliling Lingkaran</h1>
    <form name="formLingkaran" action="" method="POST">
        <input type="number" name="r" required min="0" placeholder="Masukkan R"/>
        <input type="submit" name="hitungLuasLingkaran" value="Hitung Luas"/>
        <input type="submit" name="hitungKelilingLingkaran" value="Hitung Keliling"/>
        <button type="reset" onclick="reset1()">Reset</button>
        <?php
            echo "<br>";
            if(isset($_POST['hitungLuasLingkaran'])){
                echo "<div id='pesanLingkaran'>Luas Lingkaran dengan jari-jari = ".$_POST['r']." adalah ".
                luaslingkaran($_POST['r']);
            }
            if(isset($_POST['hitungKelilingLingkaran'])){
                echo "<div id='pesanLingkaran'>Keliling Lingkaran dengan jari-jari = ".$_POST['r']." adalah ".
                kelilinglingkaran($_POST['r']);
            }
        ?>
    </form>
    <br>
    </div>

    <div>
    
    <form name="formsegitiga" action="" method="POST">
        <h1>Luas Segitiga</h1>
        <input type="number" name="alas"  min="0" placeholder="Masukkan Alas"/>
        <input type="number" name="tinggi" min="0" placeholder="Masukkan Tinggi"/>
        <input type="submit" name="hitungLuasSegitiga" value="Hitung Luas"/>
        <h1>Keliling Segitiga</h1>
        <input type="number" name="a"  min="0" placeholder="Masukkan a"/>
        <input type="number" name="b"  min="0" placeholder="Masukkan b"/>
        <input type="number" name="c"  min="0" placeholder="Masukkan c"/>
        <input type="submit" name="hitungKelilingSegitiga" value="Hitung Keliling"/>
        <button type="reset" onclick="reset1()">Reset</button>
        <?php
            echo "<br>";
            if(isset($_POST['hitungLuasSegitiga'])){
                echo "<div id='pesanLingkaran'>Luas segitiga dengan alas = ".$_POST['alas']." dan tinggi = ".$_POST['tinggi']." adalah ".
                luassegitiga($_POST['alas'],$_POST['tinggi']);
            }
            if(isset($_POST['hitungKelilingSegitiga'])){
                echo "<div id='pesanLingkaran'>Keliling segitiga dengan sisi a = ".$_POST['a']." sisi b = ".$_POST['b']." sisi c = ".$_POST['c']." adalah ".
                kelilingsegitiga($_POST['a'],$_POST['b'],$_POST['c']);
            }
        ?>
    </form>
    </div>

    <div>
    <br>
    
    <form name="formJajargenjang" action="" method="POST">
        <h1>Luas JajarGenjang</h1>
        <input type="number" name="alas"  min="0" placeholder="Masukkan Alas"/>
        <input type="number" name="tinggi" min="0" placeholder="Masukkan Tinggi"/>
        <input type="submit" name="hitungLuasJajargenjang" value="Hitung Luas"/>
        <h1>Keliling Jajargenjang</h1>
        <input type="number" name="a"  min="0" placeholder="Masukkan a"/>
        <input type="number" name="b"  min="0" placeholder="Masukkan b"/>
        <input type="submit" name="hitungKelilingJajargenjang" value="Hitung Keliling"/>
        <button type="reset" onclick="reset1()">Reset</button>
        <?php
            echo "<br>";
            if(isset($_POST['hitungLuasJajargenjang'])){
                echo "<div id='pesanLingkaran'>Luas jajargenjang dengan alas =".$_POST['alas']." dan tinggi = ".$_POST['tinggi']." adalah ".
                luasjajargenjang($_POST['alas'],$_POST['tinggi']);
            }
            if(isset($_POST['hitungKelilingJajargenjang'])){
                echo "<div id='pesanLingkaran'>Keliling jajargenjang dengan sisi a = ".$_POST['a']." sisi b = ".$_POST['b']." adalah ".
                kelilingjajargengjang($_POST['a'],$_POST['b']);
            }
        ?>
    </form>
    </div>

    <script type="text/javascript">
        function reset1(){
            document.getElementById("pesanLingkaran").innerHTML = '';
        }
    </script>
</body>
</html>