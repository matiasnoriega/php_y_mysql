<?php

function cargarPagina($pagina){

	if(file_exists($pagina . ".php")){

		include($pagina . ".php");

	}else{

		include('404.php');

	}
}

function mostrarMensaje($respuesta){

	switch ($respuesta) {
		case '0x001':
		echo "<p class='rta rta-0x001'>El nombre ingresado no es valido</p>";
		break;
		case '0x002':
		echo "<p class='rta rta-0x002'>El E-mail ingresado no es valido</p>";
		break;
		case '0x003':
		echo "<p class='rta rta-0x003'>El mensaje ingresado no es valido</p>";
		break;
		case '0x004':
		echo "<p class='rta rta-0x004'>Consulta enviada!</p>";
		break;
		case '0x005':
		echo "<p class='rta rta-0x005'>Consulta no enviada!</p>";
		break;
		default:
			# code...
		break;
	}

}

function MostrarProductos(){

	if(is_readable('listadoProductos.csv')){


		$fp = fopen('listadoProductos.csv', 'r');

		while($linea = fgetcsv($fp)){

			$producto = '<div class="single_top">';
			$producto .= '<div class="single_grid">';
			$producto .= '<div class="grid images_3_of_2">';
			$producto .= '<ul id="etalage">';
			$producto .= '<li>';
			$producto .= '<img class="etalage_thumb_image" src="images/productos/' . $linea[0] . '.jpg" class="img-responsive" />';
			$producto .= '</li>';
			$producto .= '</ul>';
			$producto .= '<div class="clearfix"></div>';
			$producto .= '</div>';
			$producto .= '<div class="desc1 span_3_of_2">';
			$producto .= '<h4>' . $linea[4] . ' - ' . $linea[1] . '</h4>';
			$producto .= '<div class="cart-b">';
			$producto .= '<div class="left-n ">$' . $linea[2] . '</div>';
			$producto .= '<a class="now-get get-cart-in" href="#">COMPRAR</a> ';
			$producto .= '<div class="clearfix"></div>';
			$producto .= '</div>';
			$producto .= '<h6>' . $linea[3] .' unid. en stock</h6>';
			$producto .= '<p>' . $linea[5] . '</p>';
			$producto .= '<div class="share">';
			$producto .= '<h5>Compartir Producto:</h5>';
			$producto .= '<ul class="share_nav">';
			$producto .= '<li><a href="#"><img src="images/facebook.png" title="facebook"></a></li>';
			$producto .= '<li><a href="#"><img src="images/twitter.png" title="Twiiter"></a></li>';
			$producto .= '<li><a href="#"><img src="images/rss.png" title="Rss"></a></li>';
			$producto .= '<li><a href="#"><img src="images/gpluse.png" title="Google+"></a></li>';
			$producto .= '</ul>';
			$producto .= '</div>';
			$producto .= '</div>';
			$producto .= '<div class="clearfix"></div>';
			$producto .= '</div>';
			$producto .= '</div>';
			
			echo $producto;
		}

		fclose($fp);

		die();
	}

}