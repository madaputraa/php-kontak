<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="kontakcss.css">
</head>
<body>
<fieldset>
	<form action="terkirim.php" method="POST" name="kirim">
		<h2 align="center"><strong>Kontak</strong></h2>
		<div>
			<label><br> Nama </br></label>
			<input type="text" name="nama" class="nama">
		</div>
		<div>
			<label><br> Email </br></label>
			<input type="email" name="email" autocomplete="on" class="email">
		</div>
		<div>
			<label><br> Umur </br></label>
			<select type="form-control" class="umur" name="umur"/>
				<option>Pilih</option>
				<option value="14">14
				<option value="15">15
				<option value="16">16	
				<option value="17">17
				<option value="18">18
				<option value="19">19
				<option value="20">20
				<option value="21">21
				<option value="22">22
				<option value="23">23
				<option value="24">24
				<option value="25">25
				</option>
			</select>
		</div>
		<div>
			<label><br> Kategori </br></label>
			<select type="form-control" class="kategori" name="kategori"/>
				<option>Alasan Menghubungi Kami</option>
				<option value="Lainnya">Lainnya
				</option>
			</select>
		</div>
		<div>
			<label><br> Pesan </br></label>
			<textarea name="pesan" rows="9" cols="150" class="pesan"/> </textarea>
		</div>
		<p>
			<input type="submit" class="kirim" name="kirim" value="kirim">
		</p>
	</form>
</fieldset>
</body>
</html>