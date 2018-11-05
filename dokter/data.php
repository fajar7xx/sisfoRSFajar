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
						<div class="card-header">Data Dokter</div>
						<div class="card-body">
							<!-- input data -->
							<div class="my-1 float-right">
								<a href="add.php" class="btn btn-primary">Tambah Data Dokter</a>
								<a href="" class="btn btn-outline-primary"><span class="icon-refresh"></span></a>
							</div>
							<form method="post" name="proses">
								<table class="table  table-hover  mb-0" id="dokter">
									<thead class="thead-light">
										<tr>
											<th class="text-center">
												<!-- mengunakan jquery dengan menggunkan id untuk ceklis-->
												<input type="checkbox" id="select_all" value=""/>
											</th>
											<th class="text-center">
												<i class="icon-doc"></i>
											</th>
											<th>Nama Dokter</th>
											<th>Spesialis</th>
											<th>Alamat</th>
											<th>No Telp</th>
											<th>Aksi</th>
											
										</tr>
									</thead>
									<tbody>
									<?php  

									$query_poli = "SELECT * FROM tb_dokter";
									$sql_poli = mysqli_query($koneksi, $query_poli) or die(mysqli_error($koneksi));
									if(mysqli_num_rows($sql_poli) != 0):
										$no = 1;
										while($data = mysqli_fetch_array($sql_poli, MYSQLI_ASSOC)):
									?>
										
										<tr>
											<td align="center">
												<input type="checkbox" name="checked[]" class="check" value="<?=$data['id_dokter'];?>"/>
											</td>
											<td class="text-center"><?=$no++;?>.</td>
											<td><?=$data['nm_dokter'];?></td>
											<td><?=$data['spesialis'];?></td>
											<td><?=$data['alamat'];?></td>
											<td><?=$data['no_telp'];?></td>
											<td align="center">
												<a href="edit.php?id=<?=$data['id_dokter'];?>" class="btn btn-success">Edit</a>
											</td>
											
										</tr>

									<?php
										endwhile;	
									endif;
									?>
									</tbody>
								</table>
								<div class="box mt-1 float-right">
									<button type="button" class="btn btn-danger" onclick="hapus()">Hapus</button>
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