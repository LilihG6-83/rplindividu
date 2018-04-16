<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Create, Read, Update, Delete</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Form Edit</h1>

	<div id="body">
		<a href="<?php echo site_url('Welcome/index') ?>">Kembali</a>
		<?php if($dataEdit){
		$id = $dataEdit->userID;
		$tanggal = $dataEdit->Tanggal;
		$rincian = $dataEdit->Rincian;
		$pemasukkan = $dataEdit->Pemasukkan;
		$pengeluaran = $dataEdit->Pengeluaran;
		$jumlah = $dataEdit->Jumlah;
		$keterangan = $dataEdit->Keterangan;
		}else{
		$tanggal = "";
		$rincian = "";
		$pemasukkan = "";
		$pengeluaran = "";
		$jumlah = "";
		$keterangan = "";
		} ?>
		<form action="<?php echo site_url('Welcome/update/'.$id) ?>" method="POST">
			Tanggal<br>
			<input type="text" name="Tanggal" value="<?php echo $tanggal ?>" /><br>
			Rincian<br>
			<input type="text" name="Rincian" value="<?php echo $rincian ?>" /><br>
			Pemasukkan<br>
			<input type="text" name="Pemasukkan" value="<?php echo $pemasukkan ?>" /><br>
			Pengeluaran<br>
			<input type="text" name="Pengeluaran" value="<?php echo $pengeluaran ?>" /><br>
			Jumlah<br>
			<input type="text" name="Jumlah" value="<?php echo $jumlah ?>" /><br>
			Keterangan<br>
			<input type="text" name="Keterangan" value="<?php echo $keterangan ?>" /><br>
			<input type="submit" name="simpan" value="Simpan" />
		</form>
		
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>