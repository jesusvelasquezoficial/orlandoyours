<?php
if (isset($_SESSION['msj']) && $_SESSION['msj'] != "") {
    echo '<script>alert("' . $_SESSION['msj'] . '");</script>';
    unset($_SESSION['msj']);
}
?>
