<!DOCTYPE html>
<html>
<head>
	<title>Add Biodata</title>
	<style>
		/* Mengatur tampilan input form */
		.form-control {
			margin-bottom: 10px;
			max-width: 300px;
		}
		/* Mengatur tampilan label yang terdapat pada input form */
		.form-control label {
			display: block;
			margin-bottom: 5px;
		}
		/* Mengatur tampilan dari select box, input text, dan textarea */
		.form-control select, .form-control input[type="text"], .form-control textarea {
			display: block;
			width: 100%;
			max-width: 300px;
			padding: 5px;
			border-radius: 5px;
			border: 1px solid #ccc;
		}
		/* Mengatur tampilan tombol untuk menambahkan data pada form */
		.btn-add-data {
			background-color: #32CD32;
			color: #fff;
			border: none;
			border-radius: 5px;
			padding: 10px 20px;
			float: left;
			font-weight: bold;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<h1>ADD BIODATA</h1>
	<p>Silahkan Masukan Data Diri Anda Di Bawah Ini.</p>

	<form action="submit_data.php" method="post">
		<div class="form-control">
			<label for="nama_lengkap">Nama Lengkap</label>
			<input type="text" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap">
		</div>

		<div class="form-control">
			<label for="jenis_kelamin">Jenis Kelamin</label>
			<select name="jenis_kelamin" id="jenis_kelamin">
				<option value="" disabled selected>Jenis Kelamin</option>
				<option value="Laki-Laki">Laki-Laki</option>
				<option value="Perempuan">Perempuan</option>
			</select>
		</div>

		<div class="form-control">
				<label for="tempat_lahir">Tempat Lahir</label>
				<input type="text" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir">
		</div>

		<div class="form-control">
			<label for="tanggal_lahir">Tanggal Lahir</label>
			<input type="date" name="tanggal_lahir" id="tanggal_lahir" placeholder="Tanggal Lahir">
		</div>

		<div class="form-control">
			<label for="agama">Agama</label>
			<select name="agama" id="agama">
				<option value="" disabled selected>Agama</option>
				<option value="Islam">Islam</option>
				<option value="Hindu">Hindu</option>
				<option value="Buddha">Buddha</option>
				<option value="Kristen">Kristen</option>
			</select>
		</div>

		<div class="form-control">
			<label for="alamat_lengkap">Alamat Lengkap</label>
			<textarea name="alamat_lengkap" id="alamat_lengkap" placeholder="Alamat Lengkap"></textarea>
		</div>

		<div style="text-align: right;">
			<input type="submit" name="submit" value="+ Add Data" class="btn-add-data">
		</div>
	</form>

</body>
</html>
