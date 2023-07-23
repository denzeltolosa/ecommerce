<?php
require_once ("../../include/initialize.php");
	 

$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
	case 'add' :
	doInsert();
	break;
	
	case 'edit' :
	doEdit();
	break;

	case 'stockedit':
	doStockEdit();
	break;

	case 'priceedit':
	doPriceEdit();
	break;

	case 'productdescedit':
	doProductDescEdit();
	break;

	case 'contactnoedit':
	doContactNumberEdit();
	break;

	case 'ownernameedit':
	doOwnerNameEdit();
	break;


	case 'delete' :
	doDelete();
	break;

	case 'photos' :
	doupdateimage();
	break;

	case 'banner' :
	setBanner();
	break;

 case 'discount' :
	setDiscount();
	break;
	}

   
function doInsert(){
	if(isset($_POST['save'])){
		
	 

			$errofile = $_FILES['image']['error'];
			$type = $_FILES['image']['type'];
			$temp = $_FILES['image']['tmp_name'];
			$myfile =$_FILES['image']['name'];
		 	$location="uploaded_photos/".$myfile;


		if ( $errofile > 0) {
				message("No Image Selected!", "error");
				redirect("index.php?view=add");
		}else{
	 
				@$file=$_FILES['image']['tmp_name'];
				@$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
				@$image_name= addslashes($_FILES['image']['name']); 
				@$image_size= getimagesize($_FILES['image']['tmp_name']);

			if ($image_size==FALSE || $type=='video/wmv') {
				message("Uploaded file is not an image!", "error");
				redirect("index.php?view=add");
			}else{
					//uploading the file
					move_uploaded_file($temp,"uploaded_photos/" . $myfile);
		 	
					if ($_POST['PRODESC'] == "" OR $_POST['PROPRICE'] == "") {
					$messageStats = false;
					message("All fields are required!","error");
					redirect('index.php?view=add');
					}else{	

			 
						$autonumber = New Autonumber();
						$res = $autonumber->set_autonumber('PROID');

  				 	 	


  				 	 	$product = New Product(); 
  				 	 	$product->PROID 		= $res->AUTO; 
						$product->OWNERNAME 	= $_POST['OWNERNAME']; 
						$product->OWNERPHONE 	= $_POST['OWNERPHONE'];
						$product->IMAGES 		= $location; 
						$product->PRODESC 		= $_POST['PRODESC'];
						$product->CATEGID	    = $_POST['CATEGORY'];
						$product->PROQTY		= $_POST['PROQTY']; 
						$product->PROPRICE		= $_POST['PROPRICE']; 
						$product->PROSTATS		= 'Available';
						$product->create();
						// }

 

						$promo = New Promo();  
						$promo->PROID		= $res->AUTO;  
						$promo->PRODISPRICE	= $_POST['PROPRICE'];     
						$promo->create();
  					 

						$autonumber = New Autonumber();
						$autonumber->auto_update('PROID');



						message("New Product created successfully!", "success");
						redirect("index.php");
						}
							
					}
			}
			if(isset($_SESSION['USERID'])){
		$connection = mysqli_connect("localhost", "root" , "", "db_ecommerce");
        $action = 'Added a product  '.$product->PRODESC;
        $iquery = mysqli_query($connection,"INSERT INTO tbllogs (user,logdate,action) values ('".$_SESSION['U_NAME']."', NOW(), '".$action."')");
    }

			 
		  }



	  }
 
 
	function doEdit(){
		if (@$_GET['stats']=='NotAvailable'){
			$product = New Product();
			$product->PROSTATS	= 'Available';
			$product->update(@$_GET['id']);

		}elseif(@$_GET['stats']=='Available'){
			$product = New Product();
			$product->PROSTATS	= 'NotAvailable';
			$product->update(@$_GET['id']);
		}else{

		if (isset($_GET['front'])){
			$product = New Product();
			$product->FRONTPAGE	= True;
			$product->update(@$_GET['id']);

		}
	}
	
		if(isset($_POST['save'])){
 
						$product = New Product();
						$product->PRODESC 		= $_POST['PRODESC'];
						$product->CATEGID	    = $_POST['CATEGORY'];
						$product->update($_POST['PROID']);
  

			message("Category update successful!", "success");
			redirect("index.php");
	  }
	  	if(isset($_SESSION['USERID'])){
		$connection = mysqli_connect("localhost", "root" , "", "db_ecommerce");
        $action = 'Updated the category for '.$product->PRODESC;
        $iquery = mysqli_query($connection,"INSERT INTO tbllogs (user,logdate,action) values ('".$_SESSION['U_NAME']."', NOW(), '".$action."')");
    }


  
	redirect("index.php"); 
}

function doStockEdit(){
	

  if (isset($_POST['stockedit'])) {
	$product = New Product();
	$product->PRODESC = $_POST['PRODESC'];
	$product->PROQTY = $_POST['PROQTY'];
	$product->update($_POST['PROID']);

	message("Stock update successful!", "success");
	redirect("index.php");

}
if(isset($_SESSION['USERID'])){
		$connection = mysqli_connect("localhost", "root" , "", "db_ecommerce");
        $action = 'Added a stock of ' .$product->PRORESTOCK. ' for product '.$product->PRODESC;
        $iquery = mysqli_query($connection,"INSERT INTO tbllogs (user,logdate,action) values ('".$_SESSION['U_NAME']."', NOW(), '".$action."')");
    }
}

function doPriceEdit(){
	

  if (isset($_POST['priceedit'])) {
	$product = New Product();
	$product->PRODESC 		= $_POST['PRODESC'];
	$product->PROPRICE		= $_POST['PROPRICE'];
	$product->update($_POST['PROID']);

	message("Price update successful!", "success");
	redirect("index.php");

}
if(isset($_SESSION['USERID'])){
		$connection = mysqli_connect("localhost", "root" , "", "db_ecommerce");
        $action = 'Update the price for product '.$product->PRODESC;
        $iquery = mysqli_query($connection,"INSERT INTO tbllogs (user,logdate,action) values ('".$_SESSION['U_NAME']."', NOW(), '".$action."')");
    }
}

function doProductDescEdit(){
	if (@$_GET['stats']=='NotAvailable'){
			$product = New Product();
			$product->PROSTATS	= 'Available';
			$product->update(@$_GET['id']);

		}elseif(@$_GET['stats']=='Available'){
			$product = New Product();
			$product->PROSTATS	= 'NotAvailable';
			$product->update(@$_GET['id']);
		}else{

		if (isset($_GET['front'])){
			$product = New Product();
			$product->FRONTPAGE	= True;
			$product->update(@$_GET['id']);

		}
	}

  if (isset($_POST['productdescedit'])) {
	$product = New Product();
	$product->PRODESC 		= $_POST['PRODESC'];
	$product->update($_POST['PROID']);

	message("Product description update successful!", "success");
	redirect("index.php");

}
if(isset($_SESSION['USERID'])){
		$connection = mysqli_connect("localhost", "root" , "", "db_ecommerce");
        $action = 'Update the description for product '.$product->PRODESC;
        $iquery = mysqli_query($connection,"INSERT INTO tbllogs (user,logdate,action) values ('".$_SESSION['U_NAME']."', NOW(), '".$action."')");
    }
}

function doContactNumberEdit(){
	

  if (isset($_POST['contactnumberedit'])) {
	$product = New Product();
	$product->OWNERNAME 		= $_POST['OWNERNAME'];
		$product->OWNERPHONE 		= $_POST['OWNERPHONE'];
	$product->update($_POST['PROID']);

	message("Contact number update successful!", "success");
	redirect("index.php");

}
if(isset($_SESSION['USERID'])){
		$connection = mysqli_connect("localhost", "root" , "", "db_ecommerce");
        $action = 'Update the contact number for '.$product->OWNERNAME;
        $iquery = mysqli_query($connection,"INSERT INTO tbllogs (user,logdate,action) values ('".$_SESSION['U_NAME']."', NOW(), '".$action."')");
    }
}

function doOwnerNameEdit(){
	

  if (isset($_POST['ownernameedit'])) {
	$product = New Product();
	$product->OWNERNAME 		= $_POST['OWNERNAME'];
	$product->update($_POST['PROID']);

	message("Owner name updated successful!", "success");
	redirect("index.php");

}
if(isset($_SESSION['USERID'])){
		$connection = mysqli_connect("localhost", "root" , "", "db_ecommerce");
        $action = 'Update the owner name for '.$product->OWNERNAME;
        $iquery = mysqli_query($connection,"INSERT INTO tbllogs (user,logdate,action) values ('".$_SESSION['U_NAME']."', NOW(), '".$action."')");
    }
}





	function doDelete(){
		if (isset($_POST['selector'])) {
			$id = $_POST['selector'];
			$key = count($id);
	
			for ($i = 0; $i < $key; $i++) {
				$product = new Product();
				$product->delete($id[$i]);
			}
	
			message("Product have been deleted!", "info");
			redirect('index.php');
		} else {
			redirect('index.php');
		}


		if (isset($_SESSION['USERID'])) {
			$connection = mysqli_connect("localhost", "root", "", "db_ecommerce");
		
			// Get the product information before deleting
			$query = "SELECT PRODESC FROM tblproduct WHERE PROID = '$PROID'";
			$result = mysqli_query($connection, $query);
			$product = mysqli_fetch_assoc($result);
			$productName = $product['PRODESC'];
		
			// Delete the product
			$deleteQuery = "DELETE FROM tblproduct WHERE PROID = '$PROID'";
			$deleteResult = mysqli_query($connection, $deleteQuery);
		
			// Insert the log entry with the specific product description
			if ($deleteResult) {
				$action = 'Deleted product ' . $productName;
				$iquery = mysqli_query($connection, "INSERT INTO tbllogs (user, logdate, action) values ('" . $_SESSION['U_NAME'] . "', NOW(), '" . $action . "')");
			}
		}
		

	}
		 
	function doupdateimage(){
 
			$errofile = $_FILES['photo']['error'];
			$type = $_FILES['photo']['type'];
			$temp = $_FILES['photo']['tmp_name'];
			$myfile =$_FILES['photo']['name'];
		 	$location="uploaded_photos/".$myfile;


		if ( $errofile > 0) {
				message("No Image Selected!", "error");
				redirect("index.php?view=view&id=". $_POST['proid']);
		}else{
	 
				@$file=$_FILES['photo']['tmp_name'];
				@$image= addslashes(file_get_contents($_FILES['photo']['tmp_name']));
				@$image_name= addslashes($_FILES['photo']['name']); 
				@$image_size= getimagesize($_FILES['photo']['tmp_name']);

			if ($image_size==FALSE ) {
				message("Uploaded file is not an image!", "error");
				redirect("index.php?view=view&id=". $_POST['proid']);
			}else{
					//uploading the file
					move_uploaded_file($temp,"uploaded_photos/" . $myfile);
		 	
					 

						$product = New Product();
						$product->IMAGES 			= $location;
						$product->update($_POST['proid']); 

						redirect("index.php");
						 
							
					}
			}
			 
		}


	function setBanner(){
		$promo = New Promo();
		$promo->PROBANNER  =1;  
		$promo->update($_POST['PROID']);

	}

 	function setDiscount(){
 		if (isset($_POST['submit'])){

		$promo = New Promo();
		$promo->PRODISCOUNT  = $_POST['PRODISCOUNT']; 
		$promo->PRODISPRICE  = $_POST['PRODISPRICE']; 
		$promo->PROBANNER  =1;    
		$promo->update($_POST['PROID']);

		msgBox("Discount has been set.");

		redirect("index.php"); 
 		}
	
	}
	function removeDiscount(){
 		if (isset($_POST['submit'])){

		$promo = New Promo();
		$promo->PRODISCOUNT  = $_POST['PRODISCOUNT']; 
		$promo->PRODISPRICE  = $_POST['PRODISPRICE']; 
		$promo->PROBANNER  =1;    
		$promo->update($_POST['PROID']);

		msgBox("Discount has been set.");

		redirect("index.php"); 
 		}
	
	}
?>
	