<?php
session_start();
session_destroy();
echo '<script> alert("sesion cerrada");
window.location.href="index.php";
</script>';
?>