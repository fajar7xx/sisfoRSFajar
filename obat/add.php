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
									<label>Nama Obat</label>
									<input class="form-control" name="nama_obat" type="text" placeholder="nama obat" required>
								</div>
								
								<div class="form-group">
									<label>Keterangan</label>
									<textarea name="ket_obat" class="form-control" rows="6"></textarea>
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