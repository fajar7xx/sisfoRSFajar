<?php  
require_once '../config/config.php';
require_once '../config/base_url.php';		

unset($_SESSION['user']);

echo "<script>window.location='".base_url('auth/login.php')."'</script>";

?>