<?php
include_once '../include/header.php';
include_once '../include/menu.php';
?>

<main class="main">
	<div class="container-fluid">
		<div class="animated fadeIn">	
			
			<div class="row mt-2">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-header">
						<i class="fa fa-edit"></i>Tambah Data</div>
						<div class="card-body">
							<form class="form-horizontal col-6" action="proses.php" method="post">
								<div class="form-group">
									<label>Nama Dokter</label>
									<input class="form-control" name="nama_dokter" type="text" placeholder="nama dokter" required>
								</div>
								
								<div class="form-group">
									<label>Spesialis</label>
									<input class="form-control" name="spesialis" type="text" placeholder="spesialis" required>
								</div>

								<div class="form-group">
									<label>Alamat</label>
									<textarea name="alamat" class="form-control" rows="6"></textarea>
								</div>

								<div class="form-group">
									<label>No. telp</label>
									<input class="form-control" name="telp" type="text" placeholder="nama obat" required>
								</div>

								<div class="form-actions">
									<input type="submit" name="tambah" value="Simpan" class="btn btn-primary">
									<a href="data.php" class="btn btn-secondary">Batal</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</main>


<?php
include_once '../include/footer.php';
?>