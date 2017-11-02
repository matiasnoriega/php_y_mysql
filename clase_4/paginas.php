<?php

switch ($archivo) {
	case 'header':
		require_once('header.php');
		break;
	case 'body':
		require_once('body.php');
		break;
	default:
		# code...
		break;
}