<?php  
if (isset($_POST["kirim"])){
$nama= $_POST['nama'];
$email= $_POST['email'];
$umur= $_POST['umur'];
$kategori= $_POST['kategori'];
$pesan= $_POST['pesan'];
}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<link rel="stylesheet" type="text/css" href="kontakcss.css">
 </head>
 <body>
 	<center><h2>Terimakasih Telah Menguhubungi Kami!<h2></center><br>
<fieldset>
 	<center>
 		<h1>Terkirim</h1><br>
 	</center>
 	<ul type="square">
 		<li><?php echo "<strong> Nama </strong><br/>$nama<p>"; ;?></li>
 		<li><?php echo "<strong> Email </strong><br/>$email<p>"; ;?></li>
 		<li><?php echo "<strong> Umur </strong><br/>$umur<p>"; ;?></li>
 		<li><?php echo "<strong> Kategori </strong><br/>$kategori<p>"; ;?></li>
 		<li><?php echo "<strong> Pesan </strong><br/>$pesan<p>"; ;?></li>
</fieldset>
 </body>
 </html>