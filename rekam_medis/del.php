<?php  
require_once "../config/config.php";

$id = $_GET['id'];

$query_del = "DELETE FROM tb_rekammedis WHERE id_rm = '$id'";
$sql_del = mysqli_query($koneksi, $query_del) or die(mysqli_error($koneksi));

echo "<script>window.location='data.php';</script>";

?>