<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form pendaftaran
$username=$_POST["username"];
$nama=$_POST["nama"];
$email=$_POST["email"];
$password=md5($_POST["password"]); //untuk password digunakan enskripsi md5


//Query input menginput data kedalam tabel anggota
  $sql="insert into users (username,nama,email,password) values
		('$username','$nama','$email','$password')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($koneksi,$sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
    echo "Selamat, akun anda sudah terdaftar! Silahkan login";
    echo "<br>";
    echo "<br>";
    echo "Redirecting page in 5 seconds";
    header( "refresh:5;url=login.php" );
    
  }
else {
    echo "Gagal mendaftar akun! Silahkan coba lagi";
    echo "<br>";
    echo "<br>";
    echo "Redirecting page in 5 seconds";
    header( "refresh:5;url=daftar.php" );
}  

?>