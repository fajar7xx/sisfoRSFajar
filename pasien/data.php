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
						<div class="card-header">Data Pasien</div>
						<div class="card-body">
							<!-- input data -->
							<div class="my-1 float-right">
								<a href="add.php" class="btn btn-primary">Tambah Data Pasien</a>
								<a href="import.php" class="btn btn-info">Import Data Pasien</a>
								<a href="" class="btn btn-outline-primary"><span class="icon-refresh"></span></a>
							</div>
							<table class="table table-hover table-responsive mb-0" id="pasien" style="width: 100%">
								<thead class="thead-light">
									<tr>
										<th>No Identitas</th>
										<th>Nama Pasien</th>
										<th>jenis Kelamin</th>
										<th>Alamat</th>
										<th>No Telp</th>
										<th>Aksi</th>
									</tr>
								</thead>
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