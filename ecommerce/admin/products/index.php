<?php
require_once("../../include/initialize.php");
//checkAdmin();
	# code...
if(!isset($_SESSION['USERID'])){
	redirect(web_root."admin/index.php");
}

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

	$header=$view;
	$title="Products"; 
	switch ($view) {

	case 'list' :
	 
		$content    = 'list.php';		
		break;

	case 'add' : 
		$content    = 'add.php';		
		break;

	case 'edit' : 
		$content    = 'edit.php';		
		break;

	case 'stockedit' : 
		$content    = 'stockedit.php';		
		break;

	case 'priceedit' : 
		$content    = 'priceedit.php';		
		break;

	case 'productdescedit' : 
		$content    = 'productdescedit.php';		
		break;

	case 'ownernumberedit' : 
		$content    = 'ownernumberedit.php';		
		break;

	case 'ownernameedit' : 
		$content    = 'ownernameedit.php';		
		break;


	case 'view' : 
		$content    = 'view.php';
		break;
  

  	default :
	$title="Products";
		$content    = 'list.php';
	}


   
 
require_once ("../theme/templates.php");
?>
  
