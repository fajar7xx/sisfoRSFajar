<?php  

if(empty($_SESSION["user"]) || $_SESSION["user"] != 'true') {
    echo "<script>window.location='".base_url('auth/login.php')."'</script>";
}

?>