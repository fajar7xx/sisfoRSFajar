<?php
include_once '../include/header.php';
include_once '../include/menu.php';

$id = $_GET['id'];
$query_pasien = "SELECT * FROM tb_pasien WHERE id_pasien = '$id'";
$sql_pasien = mysqli_query($koneksi, $query_pasien) or die(mysqli_error($koneksi));
$data = mysqli_fetch_array($sql_pasien, MYSQLI_ASSOC);

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
									<input type="hidden" name="id" value="<?=$data['id_pasien'];?>">
									<label for="identitas">No Identitas</label>
									<input class="form-control" name="identitas" id="identitas" type="number" value="<?=$data['no_identitas'];?>" required autofocus>
								</div>
								<div class="form-group">
									<label>Nama Pasien</label>
									<input class="form-control" name="nama" id="nama" type="text" value="<?=$data['nm_pasien'];?>" required>
								</div>

								<div class="form-group">
									<label>Jenis Kelamin</label>
									<div>
										<label class="radio-inline">
											<input type="radio" name="jk" id="jk" value="L" <?=$data['jk'] == "L" ? "checked":null;?>  required>Laki-laki
										</label> 
										<label class="radio-inline">
											<input type="radio" name="jk" id="jk" value="P" <?=$data['jk'] == "P" ? "checked":null;?>>Perempuan 
										</label>
									</div>
								</div>

								<div class="form-group">
									<label for="alamat">Alamat</label>
									<textarea name="alamat" id="alamat" class="form-control" rows="6"><?=$data['alamat'];?></textarea>
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