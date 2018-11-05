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
						<div class="card-header">Tambah Data Poliklinik</div>
						<div class="card-body">
							<!-- input data -->
							<div class="my-1 float-right">
								<a href="data.php" class="btn btn-info">Data</a>
								<a href="generate.php" class="btn btn-primary">Tambah Data lagi</a>
							</div>
							<div class="row">
								<div class="col-lg-8 col-lg-offset-2">
									<form action="proses.php" method="post">
										<input type="hidden" name="total" value="<?=$_POST['count_add'];?>"/>
										<table class="table">
											<tr>
												<th>#</th>
												<th>Nama PoliKlinik</th>
												<th>Gedung</th>
											</tr>
											<?php  
											for($i=1; $i<=$_POST['count_add']; $i++):
											?>
											<tr>
												<td><?=$i;?></td>
												<td>
													<input type="text" name="nama<?=$i;?>" class="form-control" required/>
												</td>
												<td>
													<input type="text" name="gedung<?=$i;?>" class="form-control" required/>
												</td>
											</tr>
											<?php
											endfor;
											?>
										</table>
										<div class="form-group float-right">
											<input type="submit" name="add" value="Simpan Semua" class="btn btn-primary">
										</div>
									</form>
								</div>
							</div>
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