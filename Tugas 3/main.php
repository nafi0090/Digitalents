<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas 2</title> 
</head>
<body>
    <h1>Ganjil Genap 1 - 100</h1>
    <?php
        //Membuat variabel minimal dan maksimal dengan diisikan angka yang ingin dicari  
        $min = 1;
        $max = 100;

        // membuat perulangan (looping) yang dimana nilai 1 menjadi angka terkecil dalam pencarian ganjil dan genap 
        for($min; $min <= $max; $min++){ // min lebih kecil dari max yang bertujuan untuk tidak melebihi dari angka max, dan min++ bertujuan untuk angka minimal bertambah 1
            // membuat logika dimana jika angka min dibagi 2 sisa 1 maka dia akan mencetak bilangan tersebut adalah ganjil
            if($min%2 == 1){
                echo $min. " adalah bilangan ganjil <br>";
            }
            // jika angka min habis dibagi 2 maka akan mencetak bilangan genap
            else{
                echo $min. " adalah bilangan genap <br>"; 
            }
        }
    ?>
</body>
</html>