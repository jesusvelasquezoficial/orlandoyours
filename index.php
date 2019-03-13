<?php
session_start();
error_reporting(E_ERROR);
?>
<!doctype html>
<html lang="en">
<?php include 'sections/head.php'; ?>
<body>
	<!-- NAVBAR
	================================================== -->
	<?php include 'sections/navbar.php'; ?>

	<!-- WELCOME
	================================================== -->
	<?php include 'sections/bienvenida.php'; ?>

	<!-- CONTENIDO
	================================================== -->
	<?php include 'sections/contenido.php'; ?>

	<!-- VIDEO AVION
	================================================== -->
	<?php include 'sections/avion.php'; ?>

	<!-- VACACIONES
	================================================== -->
	<?php include 'sections/vacaciones.php'; ?>

	<!-- DESTINOS TOP -->
	<?php include 'sections/destinostop.php'; ?>

	<!-- FUNDACION ORLANDO YOURS -->
	<?php include 'sections/funorlandoyour.php'; ?>

	<!-- ALIADOS -->
	<?php include 'sections/aliados.php'; ?>


	<!-- GALERY INSTAGRAM -->

	<!-- CONTACTO -->
	<?php include 'sections/contacto_section.php'; ?>

	<!-- FOOTER
	================================================== -->
	<?php include 'sections/footer.php'; ?>
	<?php include 'core/alert.php'; ?>

	<!-- JAVASCRIPT
	================================================== -->
	<?php include 'sections/javascript.php'; ?>
	</body>
</html>
