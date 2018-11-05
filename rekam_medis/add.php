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
									<label for="pasien">pasien</label>
									<select name="pasien" id="pasien" class="form-control" required>
										<option value="">-Pilih Pasien-</option>
										<?php  
										$query_pasien = "SELECT * FROM tb_pasien";
										$sql_pasien = mysqli_query($koneksi, $query_pasien) or die(mysqli_error($koneksi));
										while($data_pasien = mysqli_fetch_array($sql_pasien, MYSQLI_ASSOC)):
										?>
											<option value="<?=$data_pasien['id_pasien'];?>">
												<?=$data_pasien['nm_pasien'];?>
											</option>
										<?php 
										endwhile;
										?>
									</select>
								</div>

								<div class="form-group">
									<label for="keluhan">keluhan</label>
									<textarea name="keluhan" id="keluhan" class="form-control" required></textarea>
								</div>

								<div class="form-group">
									<label for="dokter">dokter</label>
									<select name="dokter" id="dokter" class="form-control" required>
										<option value="">-Pilih dokter-</option>
										<?php  
										$query_dokter = "SELECT * FROM tb_dokter";
										$sql_dokter = mysqli_query($koneksi, $query_dokter) or die(mysqli_error($koneksi));
										while($data_dokter = mysqli_fetch_array($sql_dokter, MYSQLI_ASSOC)):
										?>
											<option value="<?=$data_dokter['id_dokter'];?>">
												<?=$data_dokter['nm_dokter'];?>
											</option>
										<?php 
										endwhile;
										?>
									</select>
								</div>

								<div class="form-group">
									<label for="diagnosa">diagnosa</label>
									<textarea name="diagnosa" id="diagnosa" class="form-control" required></textarea>
								</div>

								<div class="form-group">
									<label for="poli">poli</label>
									<select name="poli" id="poli" class="form-control" required>
										<option value="">-Pilih poli-</option>
										<?php  
										$query_poli = "SELECT * FROM tb_poli ORDER BY nm_poli ASC";
										$sql_poli = mysqli_query($koneksi, $query_poli) or die(mysqli_error($koneksi));
										while($data_poli = mysqli_fetch_array($sql_poli, MYSQLI_ASSOC)):
										?>
											<option value="<?=$data_poli['id_poli'];?>">
												<?=$data_poli['nm_poli'];?>
											</option>
										<?php 
										endwhile;
										?>
									</select>
								</div>

								<div class="form-group">
									<label for="obat">obat</label>
									<select name="obat[]" id="obat" class="custom-select" multiple size="5" required>
										<!-- <option value="">-Pilih obat-</option> -->
										<?php  
										$query_obat = "SELECT * FROM tb_obat";
										$sql_obat = mysqli_query($koneksi, $query_obat) or die(mysqli_error($koneksi));
										while($data_obat = mysqli_fetch_array($sql_obat, MYSQLI_ASSOC)):
										?>
											<option value="<?=$data_obat['id_obat'];?>">
												<?=$data_obat['nm_obat'];?>
											</option>
										<?php 
										endwhile;
										?>
									</select>
								</div>
								
								<div class="form-group">
									<label for="tanggal">tanggal periksa</label>
									<input type="date" name="tanggal" id="tanggal" class="form-control" value="<?=date('Y-m-d');?>" required>
									
								</div>
								
								<div class="form-actions">
									<input type="submit" name="tambah" value="Simpan" class="btn btn-primary">
									<input type="reset" name="reset" class="btn btn-default" value="reset">
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