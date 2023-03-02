<form action="main.php" method="POST">
    <span>jumlah bintang = </span>
    <input type="text" name="angka"></input>
    <br>
    <button type="submit">Kirim</button>
</form>

<?php
    $number = $_POST["angka"];

    for($a=1;$a <= $number; $a++){
        for($b=1;$b<=$a;$b++){
            echo "*";
        }
        echo "<br>";
    }
?>