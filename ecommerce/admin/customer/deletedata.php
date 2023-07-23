
<?php
$connection = mysqli_connect("localhost", "root" ,"");
$db = mysqli_select_db($connection, 'db_ecommerce');




if (isset ($_POST['delete'])) 
{

	$id = $_POST['CUSTOMERID'];
	$query = "DELETE FROM tblcustomer where CUSTOMERID='$id'";
	$query_run = mysqli_query($connection, $query);

	if($query_run){

		echo '<script> alert ("Data has been deleted"); </script>';
	
	}
	else{
		echo '<script> alert ("Data fail been deleted"); </script>';
	}


}
?>

