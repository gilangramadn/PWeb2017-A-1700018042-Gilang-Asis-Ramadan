<html>
<body>
	<link rel="stylesheet" type="text/css" href="desain.css">
	<div align="center" class="head">
		<frameset>
			<img src="polri4.jpg" height="100px" align="left">
			<img src="polri4.jpg" height="100px" align="right">
			<h2><font size="14" face="lucida console">Selamat Datang Calon Polri</font></h2><br>
			<h4><font face="times new roman">Create by Gilang Asis Ramadan (1700018042)</h4></font>
		</frameset>
	</div>
	<div align="center">
		<a href="TugasAkhir.html"><button class="atas">HOME</button></a>
		<a href="visidanmisi.php"><button class="atas">Visi Dan Misi</button></a>
		<a href="fotokegiatan.php"><button class="atas">Kegiatan</button></a>	
	</div>
	<center><h1><font color="white" face="lucida console">Selamat Anda Telah Terdaftar Secara Online</font></h1></center>
<?php
	if(isset($_POST['submit'])) {
	$nama = $_POST['nama'];
	$cm = $_POST['cm'];
	$kg = $_POST['kg'];
	$ttl = $_POST['tangallahir'];
	$agm = $_POST['agama'];
	$alamat = $_POST['alamat'];
	$kab = $_POST['kabupaten'];
	$jk = $_POST['jenis_kelamin'];
	$kawin = $_POST['kawin'];
	$peker = $_POST['pekerjaan'];
	$warga = $_POST['kewarganegaraan'];
	}
	?>
	<form class="kotak">
		<table border="0" align="center">
			<tr>
				<td colspan="5" align="center">
					<b>Data Diri</b> 
				</td>
			</tr>
			<tr>
				<td>Nama lengkap</td>
				<td>:</td>
				<td>
					<?php echo $nama; ?>
				</td>
			</tr>
			<tr>
				<td>Tinggi (cm)</td>
				<td>:</td>
				<td>
					<?php echo $cm; ?>
				</td>
			</tr>
			<tr>
				<td>Berat (kg)</td>
				<td>:</td>
				<td>
					<?php echo $kg; ?>
				</td>
			</tr>
			<tr>
				<td>Tempat/tgl lahir</td>
				<td>:</td>
				<td>
					<?php echo $ttl; ?>
				</td>
			</tr>
			<tr>
				<td>Agama</td>
				<td>:</td>
				<td>
					<?php echo $agm; ?>
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td>
					<?php echo $alamat; ?>
				</td>
			</tr>
			<tr>
				<td>Kabupaten</td>
				<td>:</td>
				<td>
					<?php echo $kab; ?>
				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<?php echo $jk; ?>
				</td>
			</tr>
			<tr>
				<td>Status Perkawinan</td>
				<td>:</td>
				<td>
					<?php echo $kawin; ?>
				</td>
			</tr>
			<tr>
				<td>Pekerjaan</td>
				<td>:</td>
				<td>
					<?php echo $peker; ?>
				</td>
			</tr>
			<tr>
				<td>Kewarganegaraan</td>
				<td>:</td>
				<td>
					<?php echo $warga; ?>
				</td>
			</tr>
		</table>
		<br>
		<br>
	</form>	
		<div align="center">
			<a href="TugasAkhir.html"><button class="button">Kembali</button></a>
      </div> 		
</body>		
</html