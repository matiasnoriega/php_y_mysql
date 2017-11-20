<?php
	
	require_once('functions.php');

	if(!empty($_GET)){

		$page = $_GET['page'];

	}else{

		$page = "inicio";

	}
	
	include('header.php');
?>
<section id="page">
<?php
	cargarPagina($page);
?>	
</section>
<?php
	include('footer.php');
?>