<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Polri</title>
</head>
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
  <h1><font color="white"><center>Silahkan Isi Biodata Anda Dengan Lengkap</center></font></h1>
<form action="print.php" method="POST" class="kotak">
      <table border="0" align="center">
        <tr>
          <td colspan="3" align="center">
            Identitas Diri
          </td>
        </tr>
        <tr>
          <td>
            Nama Lengkap
          </td>
          <td>
            <input type="text" name="nama">
          </td>
        </tr>
        <tr>
          <td>
            Tinggi (cm)
          </td>
          <td><input type="number" width="10px" name ="cm"></td>
        </tr>
        <tr>
          <td>
            Berat (kg)
          </td>
          <td>
            <input type="number" width="10px" name="kg">
          </td>
        </tr>
        <tr>
          <td>
            Tempat/Tgl lahir
          </td>
          <td>
            <input type="text" name="tangallahir" id="tangallahir">
          </td>
        </tr>  
        <tr>
          <td>
            Agama 
          </td>
          <td>
            <select name="agama">
              <option value="None">None</option>
              <option value="Islam">Islam</option>
              <option value="Kristen">Kristen</option>
              <option value="Khatolik">Khatolik</option>
              <option value="Hindu">Hindu</option>
              <option value="Budha">Budha</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>
            Alamat
          </td>
          <td>
            <textarea rows="5" cols="20" name="alamat"></textarea>
          </td>
        </tr>
        <tr>
          <td>
            Kabupaten
          </td>
          <td>
            <input type="text" name="kabupaten">
          </td>
        </tr>
        <tr>
          <td>
            Jenis Kelamin
          </td>
          <td>
            <input type="radio" name ="jenis_kelamin" value="Laki-Laki">Laki-Laki
            <input type="radio" name ="jenis_kelamin" value="perempuan">Perempuan
            <br/>
          </td>
        </tr>
        <tr>
          <td>
            Status Perkawinan
          </td>
          <td>
            <select name="kawin">
              <option value="None">None</option>
              <option value="Menikah">Menikah</option>
              <option value="Belum Menikah">Belum Menikah</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>
            Pekerjaan
          </td>
          <td>
            <input type="text" name="pekerjaan">
          </td>
        </tr>
        <tr>
          <td>
            Kewarganegaraan
          </td> 
          <td>
            <input type="radio" name="kewarganegaraan" value="WNI">WNI
            <input type="radio" name="kewarganegaraan" value="WNA">WNA
          </td>
      </table><br><br>
      <div align="center">
          <input type="submit" name="submit" value="Daftar" id="edit" class="button">
          <input type="reset" name="reset"  value="Reset" class="reset">
      </div> 
    </form>
  </div>
</table>
</form>
</body>
</html>