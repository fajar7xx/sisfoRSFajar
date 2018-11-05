<?php
include_once '../include/header.php';
include_once '../include/menu.php';

$id_obat = $_GET['id'];
$query_obat = "SELECT * FROM tb_obat WHERE id_obat = '$id_obat'";
$sql_obat = mysqli_query($koneksi, $query_obat) or die(mysqli_error($koneksi));
$data = mysqli_fetch_array($sql_obat, MYSQLI_ASSOC); 
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
									<label>Nama Obat</label>
									<input type="hidden" name="id_obat" value="<?=$data['id_obat'];?>">
									<input class="form-control" name="nama_obat" type="text" value="<?=$data['nm_obat'];?>" required>
								</div>
								
								<div class="form-group">
									<label>Keterangan</label>
									<textarea name="ket_obat" class="form-control" rows="6">
										<?=$data['ket_obat'];?>
									</textarea>
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