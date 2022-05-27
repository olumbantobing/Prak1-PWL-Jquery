<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Poppins:wght@300;500;600;700&family=Roboto:wght@100&display=swap" rel="stylesheet"/>
		<script type="text/javascript" src="index.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css" />
		<title>119140159 Prak1-PWL-Jquery</title>
	</head>
	<body>
		<div class="container">
			<div class="nav">
				<h3>Pemesanan Produk</h3>
				<hr>
			</div>
			<h1 id="buyer-name-show"></h1>
			<h3 id="list-product"></h3>
			<div class="card-wrap">
				<div class="card">
					<h2>Data</h2>
					<form id="form" onsubmit="return false">
						<div>
							<p>Nama</p>
							<input type="text" id="buyer-name" class="field-buyer" required>
						</div>
						<p>Pilih Produk</p>
						<div class="product-card">
							<div class="select-product">
								<label for="product-1">Produk</label><br />
								<select id="product-1" required>
									<option value="0" hidden selected>Pilih produk</option>
									<option value="Jet Tempur">Jet Tempur</option>
									<option value="Nuklir Hiroshima">Nuklir Hiroshima</option>
									<option value="Infinity Stone">Infinity Stone</option>
									<option value="Burj Khalifa">Burj Khalifa</option>
									<option value="Rudal Hipersonik">Rudal Hipersonik</option>
								</select>
							</div>
							<div class="field-amount">
								<label for="amount-1">Jumlah</label><br>
								<input type="number" id="amount-1" class="amount" required>
							</div>
						</div>
						<button id="btn-add" class="btn btn-green">Tambah Produk</button><br>
						<button id="btn-order" class="btn btn-primary">Pesan</button>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>