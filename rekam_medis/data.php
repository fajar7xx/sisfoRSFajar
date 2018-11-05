<?php  
include_once '../include/header.php';
include_once '../include/menu.php';
?>

<main class="main">
	<div class="container-fluid">
		<div class="animated fadeIn">
			<div class="row mt-2">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">Data Rekam Medis</div>
						<div class="card-body">
							<!-- input data -->
							<div class="my-1 float-right">
								<a href="add.php" class="btn btn-primary">Tambah Data</a>
								<a href="" class="btn btn-outline-primary"><span class="icon-refresh"></span></a>
							</div>
								<table class="table table-responsive table-hover  mb-0" id="rekammedis">
									<thead class="thead-light">
										<tr>
											<th class="text-center">
												<i class="icon-doc"></i>
											</th>
											<th>Tanggal Periksa</th>
											<th>Nama Pasien</th>
											<th>Keluhan</th>
											<th>Nama Dokter</th>
											<th>Diagnosa</th>
											<th>Poliklinik</th>
											<th>Data Obat</th>
											<th class="text-md-center">Aksi</th>
											
										</tr>
									</thead>
									<tbody>
									<?php  

									$query_rm = "SELECT * FROM tb_rekammedis
												INNER JOIN tb_pasien ON tb_rekammedis.id_pasien = tb_pasien.id_pasien
												INNER JOIN tb_dokter ON tb_rekammedis.id_dokter = tb_dokter.id_dokter
												INNER JOIN tb_poli ON tb_rekammedis.id_poli = tb_poli.id_poli
												";
									$sql_rm = mysqli_query($koneksi, $query_rm) or die(mysqli_error($koneksi));
									if(mysqli_num_rows($sql_rm) != 0):
										$no = 1;
										while($data = mysqli_fetch_array($sql_rm, MYSQLI_ASSOC)):
									?>
										
										<tr>
											<td class="text-center"><?=$no++;?>.</td>
											<td><?=tgl_indo($data['tgl_periksa']);?></td>
											<td><?=$data['nm_pasien'];?></td>
											<td><?=$data['keluhan'];?></td>
											<td><?=$data['nm_dokter'];?></td>
											<td><?=$data['diagnosa'];?></td>
											<td><?=$data['nm_poli'];?></td>
											<td>
											<?php  
												$query_obat = "SELECT * FROM tb_rm_obat JOIN tb_obat ON tb_rm_obat.id_obat = tb_obat.id_obat WHERE id_rm = '$data[id_rm]'";
												$sql_obat = mysqli_query($koneksi, $query_obat) or die(mysqli_error($koneksi));
												while($datao = mysqli_fetch_array($sql_obat, MYSQLI_ASSOC)){
													echo $datao['nm_obat']."<br>";
												}
											?>
											</td>
											<td align="center">
												<a href="del.php?id=<?=$data['id_rm'];?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ?')">Hapus</a>
											</td>
											
										</tr>

									<?php
										endwhile;	
									endif;
									?>
									</tbody>
								</table>
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