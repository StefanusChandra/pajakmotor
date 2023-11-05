<html>

<head>
	<title>
		Data Pembayaran Pajak
	</title>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500&family=Montserrat:wght@400;500&family=Water+Brush&display=swap');

		body {
			background-color: rgb(30, 144, 255);
		}

		.head {
			display: flex;
			width: 100%;
		}

		.center {
			display: block;
			margin-right: auto;
			margin-left: auto;
		}

		.paper {
			background-color: white;
			width: 850px;
			position: relative;
			padding: 30px;
			border-radius: 20px;
		}

		h1 {
			font-family: 'Montserrat', sans-serif;
			font-size: 25px;
			font-weight: 500;
			line-height: 0px;
			margin-bottom: 1px;
		}

		h2 {
			font-family: 'Inter', sans-serif;
			font-size: 16px;
			font-weight: 400;
			line-height: 0px;
		}


		.border {
			border-collapse: collapse;
		}

		.atas {
			background-color: rgba(0, 0, 0, 0.2);
		}

		.total {
			background-color: rgba(444, 555, 0, 0.8);
		}

		.tambah {
			width: 80px;
			height: 25px;
			font-family: 'Inter', sans-serif;
			font-size: 16px;
			font-weight: 400;
			font-weight: 500;
			color: white;
			background-color: rgba(444, 555, 0, 0.8);
			border-radius: 5px;
			border-color: rgb(30, 144, 255);
		}

		.edit {
			width: 70px;
			height: 25px;
			font-family: 'Inter', sans-serif;
			font-size: 16px;
			font-weight: 400;
			font-weight: 500;
			color: white;
			background-color: rgba(30, 144, 255);
			border-radius: 5px;
			border-color: rgb(30, 144, 255);
		}

		.hapus {
			width: 70px;
			height: 25px;
			font-family: 'Inter', sans-serif;
			font-size: 16px;
			font-weight: 400;
			font-weight: 500;
			color: white;
			background-color: rgba(30, 144, 255);
			border-radius: 5px;
			border-color: rgb(30, 144, 255);
		}
	</style>
</head>

<body>
	<div class="paper center">
		<h1 align="left"><button class='tambah'><?php echo anchor('user_controller/tambah', 'Tambah'); ?></button></h1>
		<center>
			<h1><b>Data Pembayaran Pajak</b></h1>
		</center>
		<br><br>
		<table cellspacing='0' class="border" style="margin:auto auto;" border="1" width="800" height="50">
			<thead position="relative" height="40">
				<tr>
					<th class="atas" align="center">
						<h2><b>No.Urut</b></h2>
					</th>
					<th class="atas" align="center">
						<h2><b>Jenis Motor</b></h2>
					</th>
					<th class="atas" align="center">
						<h2><b>Biaya Pajak</b></h2>
					</th>
					<th class="atas" align="center">
						<h2><b>Jumlah Pajak/Bulan</b></h2>
					</th>
					<th class="atas" align="center">
						<h2><b>Total Bayar Pajak</b></h2>
					</th>
					<th class="atas" align="center">
						<h2><b>Aksi</b></h2>
					</th>
				</tr>
			</thead>
			<?php
			foreach ($datapajak as $rows) {
				$biaya_pajak[] = $rows->biaya_pajak;
				$jumlah[] = $rows->jumlah;
			?>
				<tbody height="40">
					<tr>
						<td align="center">
							<h2><?php echo $rows->no_urut ?></h2>
						</td>
						<td align="center">
							<h2><?php echo $rows->jenis_motor ?></h2>
						</td>
						<td class="total" align="center">
							<h2><?php echo $rows->biaya_pajak ?></h2>
						</td>
						<td align="center">
							<h2><?php echo $rows->jumlah ?></h2>
						</td>
						<td class="total" align="center">
							<h2><?php echo $rows->biaya_pajak * $rows->jumlah ?></h2>
						</td>
						<td align="center">
							<button class="edit"><a style="text-decoration:none; color:white;" href="<?= base_url() ?>user_controller/edit/<?= $rows->no_urut ?>">Edit</a></button>
							<button class="hapus"><a style="text-decoration:none; color:white;" href="<?= base_url() ?>user_controller/hapus/<?= $rows->no_urut ?>" onclick=" return confirm('Apakah Anda Yakin Ingin Menghapus Data?')">Hapus</a></button>
						</td>
					</tr>
				<?php } ?>
				</tbody>
		</table>
	</div>
</body>

</html>