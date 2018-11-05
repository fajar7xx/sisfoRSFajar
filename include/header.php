<?php
require_once '../config/config.php';
require_once '../config/base_url.php';
require_once '../config/limit_kata.php';
require_once '../libs/vendor/autoload.php';

if(!isset($_SESSION['user'])){
	echo "<script>window.location='".base_url('auth/login.php')."'</script>";
}
	
// else{

// 	echo "<script>window.location='".base_url('auth/login.php')."'</script>";
// }
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
   
    <title>Sistem Rumah Sakit</title>

    <!-- favicon -->
    <link rel="icon" href="<?=base_url('dist/img/favicon.ico');?>">
    
    <!-- Icons-->
    <link href="<?=base_url();?>/dist/vendors/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="<?=base_url();?>/dist/vendors/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="<?=base_url();?>/dist/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=base_url();?>/dist/vendors/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    
    <!-- Main styles for this application-->
    <link href="<?=base_url();?>/dist/css/style.css" rel="stylesheet">
    <link href="<?=base_url();?>/dist/vendors/pace-progress/css/pace.min.css" rel="stylesheet">

    <!-- datatables -->
    <link href="<?=base_url();?>/libs/DataTables/datatables.min.css" rel="stylesheet">

  </head>
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">