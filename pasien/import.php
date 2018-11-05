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
						<i class="fa fa-edit"></i>Import Data</div>
						<div class="card-body">

							<div>
								<a href="../file/sample/sample.xlsx" class="btn btn-info">Download Format</a>	
							</div>
						
							<form class="form-horizontal col-6" action="proses.php" method="post" enctype="multipart/form-data">
								
								<div class="form-group">
									<label for="file">Import File Excel</label>
									<input class="form-control-file" name="file" id="file" type="file"  required />
								</div>

								<!-- <div class="custom-file">
									<input type="file" class="custom-file-input" id="validatedCustomFile" required>
									<label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
									<div class="invalid-feedback">Masukkan File Excel</div>
								</div> -->

								<div class="form-actions mt-2">
									<input type="submit" name="import" value="import" class="btn btn-primary">
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