<form action="asd.php" method="POST">
    <span>Bilangan 1 :</span> <input type="text" name="pertama">
    <span>Bilangan 2 :</span> <input type="text" name="kedua">
    <button type="submit">Kirim</button>
</form>

<?php
    // Memanggil kedua bilangan yang telah dikirim melalui form diatas
    $pertama = $_POST["pertama"];
    $kedua = $_POST["kedua"];

    // Fungsi untuk menjumlah bilangan
    function penjumlahan($a, $b){
        return $a + $b;
    }
    // Fungsi untuk pengurangan bilangan
    function pengurangan($a, $b){
        return $a - $b;
    }
    // Fungsi untuk perkalian bilangan
    function perkalian($a, $b){
        return $a*$b;
    }
    // Fungsi untuk pembagian bilangan
    function pembagian($a, $b){
        // check apakah nilai 0 atau tidak jika tidak maka lakukan pembagian
        if($b != 0 ){
            return $a / $b;
        } else{
            return "tidak bisa dibagi 0";
        }
        
    }

    // print out yang dibutuhkan
    echo "bilangan pertama : " . $pertama . "<br>";
    echo "bilangan kedua : " . $kedua . "<br>";

    echo "=============================================== <br>";

    echo "hasil penjumlahan adalah : " . penjumlahan($pertama, $kedua). "<br>";
    echo "hasil pengurangan adalah : " . pengurangan($pertama, $kedua) . "<br>";
    echo "hasil perkalian adalah : " . perkalian($pertama, $kedua) . "<br>";
    echo "hasil pembagian adalah : " . pembagian($pertama, $kedua) . "<br>";
?>