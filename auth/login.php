<?php  

require_once '../config/base_url.php';
require_once '../config/config.php';


if(isset($_SESSION['user'])){
	echo "<script>window.location='".base_url()."'</script>";
}

if(isset($_POST['login'])){
	$user = trim(mysqli_real_escape_string($koneksi, $_POST['user']));
	$pass = sha1(trim(mysqli_real_escape_string($koneksi, $_POST['pass'])));

	$query_login =  "SELECT * FROM tb_user WHERE username = '$user' AND password = '$pass'";
	$sql_login = mysqli_query($koneksi, $query_login) or die(mysqli_error($koneksi));

	if(mysqli_num_rows($sql_login) != 0){
		$_SESSION['user'] = $user;
		echo "<script>window.location='".base_url()."'</script>";
	}
	else{
		$error = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
			    	<strong>Gagal Masuk</strong></br> username/password salah.
			    	<button class="close" type="button" data-dismiss="alert" aria-label="Close">
			    		<span aria-hidden="true">×</span>
			    	</button>
			    </div>';
	}

}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    
    <meta name="description" content="Admin - Sistem Rekam Medis RUmah Sakit">
    <meta name="author" content="Fajar Siagian">
    <meta name="keyword" content="sistem rekam medis rumah sakit">

    <title>Masuk - Sistem Rekam Medis</title>

    <!-- favicon -->
    <link rel="icon" href="<?=base_url('dist/img/favicon.ico');?>">
    
    <!-- Icons-->
    <link href="<?=base_url('dist/vendors/@coreui/icons/css/coreui-icons.min.css');?>" rel="stylesheet">
    <link href="<?=base_url('dist/vendors/flag-icon-css/css/flag-icon.min.css');?>" rel="stylesheet">
    <link href="<?=base_url('dist/vendors/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet">
    <link href="<?=base_url('dist/vendors/simple-line-icons/css/simple-line-icons.css');?>" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="<?=base_url('dist/css/style.css');?>" rel="stylesheet">
    <link href="<?=base_url('dist/vendors/pace-progress/css/pace.min.css');?>" rel="stylesheet">
  </head>
  <body class="app flex-row align-items-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-5">
          <div class="card-group">
            <div class="card p-4">
              <div class="card-body">
                <h1 class="text-center">Login</h1>
                <p class="text-muted text-center">Sign In to your account</p>
                <?=(isset($error))?$error:'';?>
                <form method="post">
                	<div class="input-group mb-3">
                		<div class="input-group-prepend">
                			<span class="input-group-text">
                				<i class="icon-user"></i>
                			</span>
                		</div>
                		<input class="form-control" type="text" placeholder="Username" name="user" required autofocus/>
                	</div>
                	<div class="input-group mb-4">
                		<div class="input-group-prepend">
                			<span class="input-group-text">
                				<i class="icon-lock"></i>
                			</span>
                		</div>
                		<input class="form-control" type="password" placeholder="Password" name="pass" required/>
                	</div>
                	<div class="row">
                		<div class="col-6">
                			<input type="submit" name="login" class="btn btn-primary px-4" value="Login">
                			<!-- <button class="" type="button" name="submit">Login</button> -->
                		</div>
                	</div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="<?=base_url('dist/vendors/jquery/js/jquery.min.js');?>"></script>
    <script src="<?=base_url('dist/vendors/popper.js/js/popper.min.js');?>"></script>
    <script src="<?=base_url('dist/vendors/bootstrap/js/bootstrap.min.js');?>"></script>
    <script src="<?=base_url('dist/vendors/pace-progress/js/pace.min.js');?>"></script>
    <script src="<?=base_url('dist/vendors/perfect-scrollbar/js/perfect-scrollbar.min.js');?>"></script>
    <script src="<?=base_url('dist/vendors/@coreui/coreui/js/coreui.min.js');?>"></script>
  </body>
</html>
