<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Rute Penerbangan</title>
    
</head>
<body>
  <h1 style="text-align:center"> Pendaftaran Rute Penerbangan </h1>
    <form action="data.json" method="post">
        <table>
            <tr>
                <td>Maskapai</td>
                <td>:</td>
                <td><input type="text" name="namaMaskapai" id="namaMaskapai"></td>
            </tr>
            <tr>
            <td>Bandara Asal</td>
                <td>:</td>
                <td>
                    <select name="bandaraAsal" id="bandaraAsal"> 
                        <option value="3">Soekarno-Hatta (CGK)</option>
                        <option value="2">Husein Sastranegara (BDO)</option>
                        <option value="1">Abdul Rachman Saleh (MLG)</option>
                        <option value="0">Juanda (SUB)</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Bandara Tujuan</td>
                <td>:</td>
                <td>
                    <select name="bandaraTujuan" id="bandaraTujuan"> 
                        <option value="3">Ngurah Rai (DPS)</option>
                        <option value="2">Hasanuddin (UPG)</option>
                        <option value="1">Inanwatan (INX)</option>
                        <option value="0">Sultan Iskandarmuda (BTJ)</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Harga Tiket</td>
                <td>:</td>
                <td><input type="number" name="hargaTiket" id="hargaTiket"></td>
            </tr>
            
            <tr>
                <td colspan="3" align="middle">
                    <input type="submit" value="Submit">
                </td>
            </tr>
        </table>

<br>
<h1 style="text-align:center"> Daftar Rute Tersedia </h1>

<table style="border: 1px solid">
<tr style="border: 1px solid">
<th style="border: 1px solid">Pesawat</th>
<th style="border: 1px solid">Bandara</th>
<th style="border: 1px solid">Tujuan</th>
<th style="border: 1px solid">Harga</th>
<th style="border: 1px solid">Pajak</th>
<th style="border: 1px solid">Total</th>
</tr>
<?php
$json = '[
{"Pesawat": "Adam Air","Bandara": "Soekarno-Hatta (CGK)"
,"Tujuan": "Sultan Iskandarmuda (BTJ)","Harga": "2000000"
,"Pajak": "120000","Total": "2120000"}, 
{"Pesawat": "Batik","Bandara": "Husein Sastranegara (BDO)"
,"Tujuan": "Sultan Iskandarmuda (BTJ)","Harga": "100000"
,"Pajak": "100000","Total": "200000"},
{"Pesawat": "Batik","Bandara": "Soekarno-Hatta (CGK)"
,"Tujuan": "Hasanuddin (UPG)","Harga": "890000"
,"Pajak": "120000","Total": "1010000"},
{"Pesawat": "Citilink","Bandara": "Soekarno-Hatta (CGK)"
,"Tujuan": "Sultan Iskandarmuda (BTJ)","Harga": "890000"
,"Pajak": "120000","Total": "209000"},
{"Pesawat": "Garuda Indonesia","Bandara": "Soekarno-Hatta (CGK)"
,"Tujuan": "Ngurah Rai (DPS)","Harga": "1500000,"
,"Pajak": "130000","Total": "1630000"}]';

$data = json_decode($json);
foreach ($data as $item)
{
 echo '<tr style="border: 1px solid">';
    echo '<td style="border: 1px solid">'.$item->Pesawat.'</td>';
    echo '<td style="border: 1px solid">'.$item->Bandara.'</td>';
    echo '<td style="border: 1px solid">'.$item->Tujuan.'</td>';
    echo '<td style="border: 1px solid">'.$item->Harga.'</td>';
    echo '<td style="border: 1px solid">'.$item->Pajak.'</td>';
    echo '<td style="border: 1px solid">'.$item->Total.'</td>';
    echo '</tr>';
}
?>
</table>
    </form>
</body>
</html>