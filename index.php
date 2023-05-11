<?php include 'koneksi.php'; ?>
<html>
<head>
	<title>One Direction Merchandise</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<style type="text/css">

body{
	font-family: arial;
	font-size: 14px;
}

#canvas{
	width: 1000px;
	margin: 0 auto;
	border: 1px solid silver;
	background-color: white;
}

#header{
	font-size: 20px
	padding: 20px;
}

#menu{
	background-color: gray; 
}

#menu ul{
	list-style: none;
	margin: 0;
	padding: 0;
}

#menu ul li.utama{
	display: inline-table;
}

#menu ul li: hover{
	background-color: gray;
}

#menu ul li a{
	display: block;
	text-decoration: none;
	line-height: 40px;
	padding: 0 10px;
	color: #fff;
}

.utama ul{
	display: none;
	position: absolute;
	z-index: 2;
}

.utama:hover ul{
	display: block;
}

.utama ul li{
	display: block;
	background-color: gray;
	width: 140px;
}

#isi{
	min-height: 400px;
	padding: 20px;  
}

#footer{
	text-align: center;
	padding: 20px;
	background-color: #ccc;
}
.klik{
	background-color: gray;
}
.klik:hover{
	background-color: black;
	cursor: pointer;	
}
</style>
</head>
<body>

<div id="canvas">
	<div id="header">
	
	</div>
	
	<div id="menu">
		<ul>
			<li class="utama" ><a href="/mppl/index.php" class="klik">Beranda</a></li>
			<li class="utama" ><a href="" class="klik">Produk</a>
				<ul>
					<li ><a href="/mppl/tambah_produk.php" class="klik">Tambah Produk</a></li>
				</ul>
			</li>
			<li class="utama"><a href="" class="klik">Profile</a>
				<ul>
					<li ><a href="/mppl/profile.php" class="klik">Lihat Profile</a></li>
				</ul>
			<li class="utama" style="float:right;"><a href="logout.php" class="klik">Logout</a></li>
		</ul>
	</div>
	
	<style type="text/css">
		{
			font-family: "Trebuchet Ms";
		}
		h1 {
			text-transform: uppercase;
			color: gray;
		}
		table {
			border: 1px solid #ddeeee;
			border-collapse: collapse;
			border-spacing: 0;
			widht: 70%;
			margin: 10px auto 10px auto;
		}
		th, td {
			border: 1px solid black;
			padding: 20px;
			text-align: left;
		}
	</style>
	
	<center><h1>Daftar Produk</h1></center>
	<form method="GET" action="index.php" style="text-align: center;">
		<label>Cari : </label>
		<input type="text" name="kata_cari" value="<?php if(isset($_GET['kata_cari'])) { echo $_GET['kata_cari']; } ?>" />
		<button type="submit">Cari</button>
	</form>
	<table>
		<thead>
			<tr>
				<th>No</th>
				<th>ID Produk</th>
				<th>Nama Produk</th>
				<th>Harga Produk</th>
			</tr>
		</thead>
		<tbody>
			<?php
			//untuk meng include kan koneksi
			include('koneksi.php');
			
				//jika kita klik cari, maka yang tampil query cari ini
				if(isset($_GET['kata_cari'])){
					//menampung variabel kata_cari fari form pencarian
					$kata_cari = $_GET['kata_cari'];
					
					//jika hanya ingin mencari berdasarkan kode_produk, silahkan hapus dari awal or
					//jika ingin mencari 1 ketentuan saja query nya ini : SELECT * FROM produk WHERE kode_produk like '%".$kata_cari
					$query = "SELECT * FROM produk WHERE no like '%".$kata_cari."%' OR id_produk like '%".$kata_cari."%' OR nama_produk like '%".$kata_cari."%' OR harga like '%".$kata_cari."%' ORDER BY no ASC";
				} else {
					//jika tidak ada pencarian, default yang dijalankan query ini
					$query = "SELECT * FROM produk ORDER BY no ASC";
				}
		
		
				$result = mysqli_query($koneksi, $query);
		
				if(!$result) {
					die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
				}
				//kalau ini melakukan foreach atau perulangan
				while ($row = mysqli_fetch_assoc($result)) {
			?>
			<tr>
				<td><?php echo $row['no']; ?></td>
				<td><?php echo $row['id_produk']; ?></td>
				<td><?php echo $row['nama_produk']; ?></td>
				<td><?php echo $row['harga']; ?></td>
			</tr>
			<?php
			}
			?>
	
		</tbody>
	</table>
	
	<audio hidden autoplay loop>
    <source src="ayiin.mp3" type="audio/mpeg">
  </audio>

	<div id="footer"><img src="ayin.jpg" /></div>
	<div id="footer">
	copyright 2022 - Layinatul Janibah > Instagram : @ayinnnj
	</div>
</div>
</body>
</html>
