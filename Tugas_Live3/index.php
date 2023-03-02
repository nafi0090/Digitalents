<?php
// array jabatan beserta nama-nama orang yang menjabat
$jabatan = array(
    "Karyawan tingkat 1" => array("Adi", "Andi"),
    "Karyawan tingkat 2" => array("Tono", "Toni"),
    "Karyawan tingkat 3" => array("Hani", "Hina")
);
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
                    <label>Jabatan</label>
                    <select name="jabatan" id="jabatan">
                        <option value="" selected disabled>Pilih jabatan</option>
                        <?php foreach ($jabatan as $key => $value) { ?>
                            <option value="<?php echo $key; ?>"><?php echo $key; ?></option>
                        <?php } ?>
                    </select>

                    <label>Nama</label>
                    <select name="nama" id="nama" disabled>
                        <option value="" selected disabled>Pilih jabatan terlebih dahulu</option>
                        <?php foreach ($jabatan as $key => $value) { ?>
                            <?php if ($key == "a") { ?>
                                <?php foreach ($value as $name) { ?>
                                    <option value="<?php echo $name; ?>"><?php echo $name; ?></option>
                                <?php } ?>
                            <?php } ?>
                        <?php } ?>
                    </select>

                    <input type="submit" value="Kirim">
                </form>
            </div>
        </div>
    </body>
</html>




<script>
    var jabatan = document.getElementById("jabatan");
    var nama = document.getElementById("nama");

    jabatan.addEventListener("change", function() {
        // hapus opsi nama yang ada saat ini
        while (nama.options.length > 0) {
        nama.remove(0);
        }

        // tambahkan opsi nama yang sesuai dengan jabatan yang dipilih
        var selectedJabatan = jabatan.options[jabatan.selectedIndex].value;
        var selectedJabatanNames = <?php echo json_encode($jabatan); ?>;
        for (var i = 0; i < selectedJabatanNames[selectedJabatan].length; i++) {
        var option = document.createElement("option");
        option.text = selectedJabatanNames[selectedJabatan][i];
        option.value = selectedJabatanNames[selectedJabatan][i];
        nama.add(option);
        }

        // aktifkan opsi nama
        nama.disabled = false;
    });
</script>
