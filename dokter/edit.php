<?php
include_once '../include/header.php';
include_once '../include/menu.php';

$id_dokter = $_GET['id'];
$query_dokter = "SELECT * FROM tb_dokter WHERE id_dokter = '$id_dokter'";
$sql_dokter = mysqli_query($koneksi, $query_dokter) or die(mysqli_error($koneksi));
$data = mysqli_fetch_array($sql_dokter, MYSQLI_ASSOC); 
?>

<main class="main">
	<div class="container-fluid">
		<div class="animated fadeIn">	
			
			<div class="row mt-2">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-header">
						<i class="fa fa-edit"></i>Edit Data</div>
						<div class="card-body">
							<form class="form-horizontal col-6" action="proses.php" method="post">
								<div class="form-group">
									<label>Nama Dokter</label>
									<input type="hidden" name="id_dokter" value="<?=$data['id_dokter'];?>">
									<input class="form-control" name="nama_dokter" type="text" value="<?=$data['nm_dokter'];?>" required>
								</div>
								
								<div class="form-group">
									<label>Spesialis</label>
									<input class="form-control" name="spesialis" type="text" value="<?=$data['spesialis'];?>" required>
								</div>

								<div class="form-group">
									<label>Alamat</label>
									<textarea name="alamat" class="form-control" rows="6">
										<?=$data['alamat'];?>
									</textarea>
								</div>

								<div class="form-group">
									<label>No. telp</label>
									<input class="form-control" name="telp" type="text" value="<?=$data['no_telp'];?>" required>
								</div>

								<div class="form-actions">
									<input type="submit" name="edit" value="Simpan" class="btn btn-primary">
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