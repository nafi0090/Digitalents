<?php
    $Nama = $_POST['nama']; //Memanggil nama yang telah di submit
    $Nilai = $_POST['nilai'];//Memanggil Nilai yang telah di submit
    
    echo "Nama anda adalah ". $Nama . "<br>"; 

    echo "Nilai Uas anda adalah ". $Nilai."<br>";
    //Membuat logika dimana jika nilai adalah 81 - 100 maka dia akan mencetak nilai menjadi A 
    if($Nilai > 80 && $Nilai <= 100){
        echo "Grade anda adalah A";
    }
    // jika nilai adalah 61 - 80 maka dia akan mencetak nilai menjadi B
    elseif($Nilai > 60 && $Nilai <= 80){
        echo "Grade anda adalah B";
    }
    // jika nilai adalah 41 - 60 maka dia akan mencetak nilai menjadi C
    elseif($Nilai > 40 && $Nilai >= 60){
        echo "Grade anda adalag C";
    }
     // jika nilai adalah 21 - 40 maka dia akan mencetak nilai menjadi D
    elseif($Nilai > 20 && $Nilai >= 40){
        echo "Nilai anda adalah D";
    }
     // jika nilai adalah 1 - 20 maka dia akan mencetak nilai menjadi E
    elseif($Nilai > 0 && $Nilai >= 20){
        echo "Nilai anda adalah E";
    }
    
    
?>