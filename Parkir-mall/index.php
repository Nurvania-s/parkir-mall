<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Instruksi Kerja Nomor 1: Hubungkan halaman web dengan file library CSS -->
	<link rel="stylesheet" href="bootstrap.css">

	<title>Hitung Biaya Parkir Mall</title>
</head>
<body>
	<div class="container border ">
		<!-- Instruksi Kerja Nomor 2. -->
		<!-- Menampilkan logo Mall di samping-->
		<h2 class="d-flex align-items-center">
			<img src="logo.png" alt="Logo Mall" style="height:50px; margin-right:10px;">
			Hitung Biaya Parkir Mall
		</h2>
		<br>

		<!-- Form input untuk data parkir -->
		<form action="index.php" method="post" id="formPerhitungan">
			<div class="row mb-2">
				<!-- Masukan data plat nomor kendaraan.Tipe data text. -->
				<div class="col-lg-2"><label for="plat">Plat Nomor Kendaraan:</label></div>
				<div class="col-lg-4"><input type="text" id="plat" name="plat" class="form-control"></div>
			</div>

			<div class="row mb-2">
				<!-- Masukan pilihan jenis kendaraan. -->
				<!-- Pilihan jenis kendaraan (Instruksi Kerja Nomor 3 & 4) -->
				<div class="col-lg-2"><label>Jenis Kendaraan:</label></div>
				<div class="col-lg-4">
					<?php  
					// Array satu dimensi (Instruksi Kerja Nomor 3)
					$jenisKendaraan = array("Truk", "Motor", "Mobil");
					// Urutkan ascending A-Z (Instruksi Kerja Nomor 4)
					sort($jenisKendaraan);
					// Tampilkan sebagai radio button (Instruksi Kerja Nomor 5)
					foreach($jenisKendaraan as $k){
						echo "<input type='radio' name='kendaraan' value='$k'> $k <br>";
					}
					?>
				</div>
			</div>

			<div class="row mb-2">
				<!-- Masukan Jam Masuk Kendaraan -->
				<!-- Pilihan jam masuk (Instruksi Kerja Nomor 6) -->
				<div class="col-lg-2"><label for="masuk">Jam Masuk [jam]:</label></div>
				<div class="col-lg-2">
					<select id="masuk" name="masuk" class="form-select">
						<option value="">- Jam Masuk -</option>
						<?php  
						// Perulangan jam 1 sampai 24
						for($i=1; $i<=24; $i++){
							echo "<option value='$i'>$i</option>";
						}
						?>
					</select>
				</div>
			</div>

			<div class="row mb-2">
				<!-- Pilihan jam keluar (Instruksi Kerja Nomor 6) -->
				<div class="col-lg-2"><label for="keluar">Jam Keluar [jam]:</label></div>
				<div class="col-lg-2">
					<select id="keluar" name="keluar" class="form-select">
						<option value="">- Jam Keluar -</option>
						<?php  
						// Perulangan jam 1 sampai 24
						for($i=1; $i<=24; $i++){
							echo "<option value='$i'>$i</option>";
						}
						?>
					</select>
				</div>
			</div>

			<div class="row mb-2">
				<!-- Pilihan Member / Non-Member -->
				<div class="col-lg-2"><label>Keanggotaan:</label></div>
				<div class="col-lg-4">
					<input type='radio' name='member' value='Member'> Member <br>
					<input type='radio' name='member' value='Non-Member'> Non Member <br>
				</div>
			</div>

			<div class="row mb-2">
				<!-- Tombol Submit untuk menghitung -->
				<div class="col-lg-2">
					<button class="btn btn-primary" type="submit" form="formPerhitungan" value="hitung" name="hitung">Hitung</button>
				</div>
			</div>
		</form>
	</div>

	<?php
	// Instruksi Kerja Nomor 8: Buat fungsi hitung_parkir
	/**
	 * Fungsi hitung_parkir digunakan untuk menghitung biaya parkir
	 * Parameter: durasi (lama parkir dalam jam), kendaraan (jenis kendaraan)
	 * Menggunakan kontrol percabangan sesuai ketentuan
	 * Return: nilai biaya parkir
	 */
	function hitung_parkir($durasi, $kendaraan){
		$biaya = 0;
		// Instruksi Kerja Nomor 9: Kontrol percabangan
		if($kendaraan == "Mobil"){
			// 1 jam pertama Rp 5000, jam berikutnya Rp 3000
			if($durasi > 0){
				$biaya = 5000 + (($durasi - 1) * 3000);
			}
		}
		elseif($kendaraan == "Motor"){
			// 1 jam pertama Rp 2000, jam berikutnya Rp 1000
			if($durasi > 0){
				$biaya = 2000 + (($durasi - 1) * 1000);
			}
		}
		elseif($kendaraan == "Truk"){
			// Rp 6000 per jam
			if($durasi > 0){
				$biaya = $durasi * 6000;
			}
		}
		return $biaya;
	}

	// Proses perhitungan saat tombol submit ditekan
	if(isset($_POST['hitung'])){
		$plat     = $_POST['plat'];
		$kendaraan= $_POST['kendaraan'];
		$masuk    = (int) $_POST['masuk'];
		$keluar   = (int) $_POST['keluar'];
		$member   = $_POST['member'];

		// Hitung durasi parkir (Instruksi Kerja Nomor 7)
		$durasi = $keluar - $masuk;
		if($durasi < 0){ $durasi = 0; } // Antisipasi jika input salah

		// Instruksi Kerja Nomor 10: Simpan hasil perhitungan menggunakan fungsi hitung_parkir
		$biaya_parkir = hitung_parkir($durasi, $kendaraan);

		// Instruksi Kerja Nomor 11: Tambahkan kontrol percabangan untuk menghitung diskon
		if($member == "Member"){
			// Diskon 10% dari biaya awal
			$biaya_akhir = $biaya_parkir - ($biaya_parkir * 0.1);
		} else {
			// Non Member tidak dapat diskon
			$biaya_akhir = $biaya_parkir;
		}

		// Instruksi Kerja Nomor 12: Simpan hasil perhitungan ke dalam file JSON
		$data = array(
			"plat" => $plat,
			"kendaraan" => $kendaraan,
			"durasi" => $durasi,
			"member" => $member,
			"biaya_parkir" => $biaya_parkir,
			"biaya_akhir" => $biaya_akhir
		);
		file_put_contents("data.json", json_encode($data, JSON_PRETTY_PRINT));

		// Tampilkan hasil input dan perhitungan
		echo "
		<br>
		<div class='container border p-3'>
			<h4>Hasil Perhitungan Parkir</h4>
			<div class='row'>
				<div class='col-lg-3'>Plat Nomor Kendaraan:</div>
				<div class='col-lg-3'>$plat</div>
			</div>
			<div class='row'>
				<div class='col-lg-3'>Jenis Kendaraan:</div>
				<div class='col-lg-3'>$kendaraan</div>
			</div>
			<div class='row'>
				<div class='col-lg-3'>Durasi Parkir:</div>
				<div class='col-lg-3'>$durasi jam</div>
			</div>
			<div class='row'>
				<div class='col-lg-3'>Keanggotaan:</div>
				<div class='col-lg-3'>$member</div>
			</div>
			<div class='row'>
				<div class='col-lg-3'>Biaya Parkir Awal:</div>
				<div class='col-lg-3'>Rp ".number_format($biaya_parkir,0,',','.')."</div>
			</div>
			<div class='row'>
				<div class='col-lg-3'>Biaya Setelah Diskon:</div>
				<div class='col-lg-3'>Rp ".number_format($biaya_akhir,0,',','.')."</div>
			</div>
		</div>
		";
	}
	?>
</body>
</html>
