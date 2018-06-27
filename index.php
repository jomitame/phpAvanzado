<?php
//llamando al archivo core.php
include('core/core.php');
//verificando si existe una variable 'view'
if(isset($_GET['view'])){
	//verificando si existe el archivo que hace referencia al controller
	if(file_exists('core/controllers/'.srttolower($_GET['view']).'Controller.php')){
		//si existe lo incluimos
		include('core/controllers/'.srttolower($_GET['view']).'Controller.php');
	}else{
		//si no existe incluimos el archivo de error
		include('core/controllers/errorController.php');
	}


}else{
	//llamando al archivo predeterminado
	include('core/controllers/indexController.php');
}