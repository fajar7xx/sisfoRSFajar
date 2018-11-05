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
								<a href="data.php" class="btn btn-warning">Kembali</a>
							</div>
							<div class="row">
								<div class="col-lg-6 col-lg-offset-3">
									<form action="add.php" method="post">
										<div class="form-group">
											<label for="count_add">Banyak Record yang akan di tambahkan</label>
											<input type="text" name="count_add" id="count_add" maxlength="2" pattern="[0-9]+" class="form-control" required />
										</div>
										<div class="form-group float-right">
											<input type="submit" name="generate" value="Generate" class="btn btn-success" />
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