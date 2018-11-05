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
						<div class="card-header">Data Obat</div>
						<div class="card-body">

							<!-- pencarian -->
							<div class="my-1 float-left">
								<form action="" class="form-inline" method="post">
									<div class="form-group row">
										<div class="col-md-12">
											<div class="input-group">
												<input class="form-control" type="text" name="pencarian" placeholder="cari...">
												<span class="input-group-append">
													<button class="btn btn-primary" type="submit">Cari</button>
												</span>
											</div>
										</div>
									</div>
								</form>
							</div>

							<!-- input data -->
							<div class="my-1 float-right">
								<a href="add.php" class="btn btn-primary">Tambah Data Obat</a>
								<a href="" class="btn btn-outline-primary"><span class="icon-refresh"></span></a>
							</div>

							<table class="table table-responsive-sm table-hover table-outline mb-0">
								<thead class="thead-light">
									<tr>
										<th class="text-center">
											<i class="icon-doc"></i>
										</th>
										<th>Nama Obat</th>
										<th>Keterangan</th>
										<th class="text-center">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php

									// paginattion
									$batas = 5;
									$hal = @$_GET['hal'];
									if(empty($hal)){
										$posisi = 0;
										$hal = 1;
									}
									else{
										$posisi = ($hal - 1)* $batas;
									}

									$no = 1;
									if($_SERVER['REQUEST_METHOD'] == "POST"){
										$pencarian = trim(mysqli_real_escape_string($koneksi, $_POST['pencarian']));
										if($pencarian != ''){
											$sql = "SELECT * FROM tb_obat WHERE nm_obat LIKE '%$pencarian%'";
											$query = $sql;
											$queryJml = $sql;
										}
										else{
											$query = "SELECT * FROM tb_obat LIMIT $posisi, $batas";
											$queryJml = "SELECT * FROM tb_obat";
											$no = $posisi + 1 ;
										}
									}
									else{
										$query = "SELECT * FROM tb_obat LIMIT $posisi, $batas";
										$queryJml = "SELECT * FROM tb_obat";
										$no = $posisi + 1 ;
									}


									// $query_obat = "SELECT * FROM tb_obat";
									$sql_obat = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
									if(mysqli_num_rows($sql_obat) > 0):
										while($data = mysqli_fetch_array($sql_obat, MYSQLI_ASSOC)):
									?>
									
									<tr>

										<td class="text-center">
											<?=$no++;?>
										</td>
										<td><?=$data['nm_obat'];?></td>
										<td width="40%"><?=limit_kata($data['ket_obat']);?></td>
										<td>
											<a href="" class="btn btn-primary">Lihat</a>
											<a href="edit.php?id=<?=$data['id_obat'];?>" class="btn btn-success">Edit</a>
											<a href="del.php?id=<?=$data['id_obat'];?>" onclick="return confirm('yakin akan menghapus data')" class="btn btn-danger">Hapus</a>
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
							</div>
							
							
							<!-- pagination -->
							<?php  
							if($_POST['pencarian'] == ''){ ?>
								
								<div class="d-flex justify-content-start ml-4">
									<?php  
									$jml = mysqli_num_rows(mysqli_query($koneksi, $queryJml));
									echo "Jumlah Data : <b>$jml</b>";
									?>
								</div>
								<div class="d-flex justify-content-end">
									<nav aria-label="Page navigation example">
										<ul class="pagination mr-3">
											<?php  
											$jml_hal = ceil($jml / $batas);
											for ($i=1; $i <= $jml_hal; $i++){
												if($i != $hal){
													echo "<li class=\"page-item\">
																<a class=\"page-link\" href=\"?hal=$i\">$i</a>
															</li>";
												}
												else{
													echo "<li class=\"page-item active\">
																<a class=\"page-link\">$i</a>
															</li>";
												}
											}
											?>
										</ul>
									</nav>
								</div>
							<?php
							}
							else{
								echo "<div class=\"float-left\">";
								$jml = mysqli_num_rows(mysqli_query($koneksi, $queryJml));
								echo "Data Hasil Pencarian: <b>$jml</b>";
								echo "</div>"; 
							}
							?>

							
						</div>
					</div>
				</div>



		</div>
	</div>
</main>
</div>


<?php  
include_once '../include/footer.php';
?>