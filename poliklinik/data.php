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
						<div class="card-header">Data Poliklinik</div>
						<div class="card-body">
							<!-- input data -->
							<div class="my-1 float-right">
								<a href="generate.php" class="btn btn-primary">Tambah Data Poliklinik</a>
								<a href="" class="btn btn-outline-primary"><span class="icon-refresh"></span></a>
							</div>
							<form method="post" name="proses">
								<table class="table table-responsive-sm table-hover table-outline mb-0">
									<thead class="thead-light">
										<tr>
											<th class="text-center">
												<i class="icon-doc"></i>
											</th>
											<th>Nama Poli</th>
											<th>Gedung</th>
											<th class="text-center">
												<!-- mengunakan jquery dengan menggunkan id untuk ceklis-->
												<input type="checkbox" id="select_all" value=""/>
											</th>
										</tr>
									</thead>
									<tbody>
									<?php  

									$query_poli = "SELECT * FROM tb_poli";
									$sql_poli = mysqli_query($koneksi, $query_poli) or die(mysqli_error($koneksi));
									if(mysqli_num_rows($sql_poli) != 0):
										$no = 1;
										while($data = mysqli_fetch_array($sql_poli, MYSQLI_ASSOC)):
									?>
										
										<tr>
											<td class="text-center"><?=$no++;?>.</td>
											<td><?=$data['nm_poli'];?></td>
											<td><?=$data['gedung'];?></td>
											<td align="center">
												<input type="checkbox" name="checked[]" class="check" value="<?=$data['id_poli'];?>"/>
											</td>
										</tr>

									<?php
										endwhile;	
									else:	
									?>
										<tr>
											<td colspan="4" align="center">Maaf, Data tidak ditemukan</td>
										</tr>
									<?php
									endif;
									?>
									</tbody>
								</table>
								<div class="box mt-1 float-right">
									<button type="button" class="btn btn-warning" onclick="edit()">Edit</button>
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