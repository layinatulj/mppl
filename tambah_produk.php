<html>
<head>
	<title>One Direction Merchandise</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h2 style="text-align: center;">Tambah Produk</h2>
		<form action="user_act.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Nomer :</label>
				<input type="text" class="form-control" placeholder="Masukkan Nomer" name="no" required="required">
			</div>
			<div class="form-group">
				<label>ID Produk :</label>
				<input type="varchar" class="form-control" placeholder="Masukkan ID Produk" name="id_produk" required="required">
			</div>
			<div class="form-group">
				<label>Nama Produk :</label>
				<input type="text" class="form-control" placeholder="Masukkan Nama Produk" name="nama_produk" required="required">
			</div>
			<div class="form-group">
				<label>Harga Produk :</label>
				<input type="number" class="form-control" placeholder="Masukkan Harga Produk" name="harga" required="required">
			</div>
			<div class="form-group">
				<label>Foto :</label>
				<input type="file" name="foto" required="required">
				<p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
			</div>			
			<input type="submit" name="" value="Simpan" class="btn btn-primary"> 
			<input type="button" value="Kembali" onclick="history.back(-1)" class="btn btn-primary" />
		</form>
	</div>
 
</body>
</html>