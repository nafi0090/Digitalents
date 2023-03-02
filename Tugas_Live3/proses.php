<?php
// array jabatan beserta nama-nama orang yang menjabat
	$nama = $_POST["nama"];
	$jabatan = $_POST["jabatan"];
	$tunjangan = 5000000;

	if($jabatan == "Karyawan tingkat 1"){
		$gaji = 100000;
		if($nama == "Adi"){
			$jam_kerja = 900;
			$gaji_total = $gaji * $jam_kerja + $tunjangan;
		}elseif($nama == "Andi"){
			$jam_kerja = 870;
			$gaji_total = $gaji * $jam_kerja + $tunjangan;
		}
	}elseif($jabatan == "Karyawan tingkat 2"){
		$gaji = 75000;
		if($nama == "Tono"){
			$jam_kerja = 900;
			$gaji_total = $gaji * $jam_kerja + $tunjangan;
		}elseif($nama == "Toni"){
			$jam_kerja = 870;
			$gaji_total = $gaji * $jam_kerja + $tunjangan;
		}
	}elseif($jabatan == "Karyawan tingkat 3"){
		$gaji = 50000;
		if($nama == "Hana"){
			$jam_kerja = 900;
			$gaji_total = $gaji * $jam_kerja + $tunjangan;
		}elseif($nama == "Hina"){
			$jam_kerja = 870;
			$gaji_total = $gaji * $jam_kerja + $tunjangan;
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Tugas 3</title>
    </head>
    <body>
        <div class="container">
            <div class="box">
                <h2>Form Gaji</h2>	
                <form action="proses.php" method="POST">

                    <label>Nama</label>
                    <input value="<?php echo $nama ?>" selected disabled>

                    <label>jabatan</label>
					<input value="<?php echo $jabatan ?>" selected disabled>
                    
					<label>Total Gaji</label>
                    <input value="<?php echo $gaji_total ?>" selected disabled>

                </form>
            </div>
        </div>
    </body>
</html>

