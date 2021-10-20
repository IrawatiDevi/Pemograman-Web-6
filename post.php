<head>
    <title> Data Pengisian </title>
</head>
<body style="background-color: rgb(213, 229, 182)">
    <center>
       <h1> Keterangan Data Pengisian </h1>
</center>
<hr>
<h3> Berikut Tanggapan Pengisian </h3>
<br>
<?php

$nama = $_POST['nama'];
$NIK = $_POST['NIK'];
$ttl = $_POST['ttl'];
$nohp = $_POST['nohp'];
$alamatrmh = $_POST['alamatrmh'];
$lokasi = $_POST['lokasi'];
$luas = $_POST['luas'];
$jenis = $_POST['jenis'];
$tombol = $_POST['tombol'];


echo "Nama Pembudidaya : ".$nama."<br>"; 
echo "NIK : ".$NIK."<br>"; 
echo "Tempat, tanggal lahir : ".$ttl."<br>"; 
echo "Nomor Hp : ".$nohp."<br>";
echo "Alamat Rumah: ".$alamatrmh."<br>"; 
echo "Lokasi Budidaya : ".$lokasi."<br>"; 
echo "Luas wilayah : ".$luas."<br>"; 
echo "Jenis Rumput laut : ".$jenis."<br>"; 
?>
<br>
<br>
<table border="1">
    <tr>
        <td colspan="2" align ="center"><b>
            Form anda</b>
</td>
</tr>

<tr>
    <td> Nama Pembudidaya: </td>
    <td> <?php echo $nama; ?> </td>
</tr>
<tr>
    <td> NIK : </td>
    <td> <?php echo $NIK; ?> </td>
</tr>
<tr>
    <td> Tempat, tanggal lahir : </td>
    <td> <?php echo $ttl; ?> </td>
</tr>
<tr>
    <td> No Hp : </td>
    <td> <?php echo $nohp; ?> </td>
</tr>
<tr>
    <td> Alamat rumah : </td>
    <td> <?php echo $alamatrmh; ?> </td>
</tr>
<tr>
    <td> Lokasi budidaya : </td>
    <td> <?php echo $lokasi; ?> </td>
</tr>
<tr>
    <td> Luas wilayah : </td>
    <td> <?php echo $luas; ?> </td>
</tr>
<tr>
    <td> Jenis rumput laut : </td>
    <td> <?php echo $jenis; ?> </td>
</tr>
</table>
<br>
</div>
<hr>
<center>
<h1>Terima Kasih</h1>
<h3>Semoga Hari Anda Menyenangkan</h3>
<img src="https://assets.promediateknologi.com/crop/0x0:0x0/x/photo/2021/09/17/2555339328.png" width="250" height="176"></img>
</center>
</body>
