<?php
require_once "../config/config.php";

unset($_SESSION['user']);
echo "<script>window.location='".base_url('pages/examples/index.html')."';</script>";
?>

