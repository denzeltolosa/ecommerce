 <?php 
      if (!isset($_SESSION['USERID'])){
  redirect(web_root."admin/index.php");
     }
  ?> 

<!DOCTYPE html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<body>
  
<form action="" method="post">
<div class= "form-group">
  <label for="">First name </label>
  <input type="text" name="FNAME" class="form-control" placeholder="First name" required>
</div>
<div class= "form-group">
  <label for="">Last Name </label>
  <input type="text" name="LNAME" class="form-control" placeholder ="Last Name" required>
</div>
<div class= "form-group">
  <label for="">Email Address </label>
  <input type="text" name="EMAILADD" class="form-control" placeholder ="Email Address" required>
</div>
<div class= "form-group">
  <label for="">Gender</label>
      <select class="form-control input-sm" name="GENDER"  required>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
      </select> 
   </div>
  <div class= "form-group">
  <label for="">City </label>
  <input type="text" name="CITYADD" class="form-control" placeholder="City" required>
  </div>
  <div class= "form-group">
  <label for="" class = >Username </label>
  <input type="text" name="CUSUNAME" class="form-control" placeholder="Username" required>
</div>
<div class= "form-group">
  <label for="">Password </label>
  <input type="password" name="CUSPASS" class="form-control" placeholder="Password" required>
</div>
<div class= "form-group">
  <label for="">Mobile Number </label>
  <input type="text" name="PHONE" class="form-control" placeholder="Mobile Number" required>
</div>
<button type="submit" name="insert" class="btn btn-primary">Add</button>
<a href="index.php" class="btn btn-danger">Cancel </a>

</form>

</body>

<?php
$connection = mysqli_connect("localhost", "root" ,"");
$db = mysqli_select_db($connection, 'db_ecommerce');

  if (isset($_POST['insert'])) 
  {
    $FNAME = $_POST['FNAME'];
    $LNAME = $_POST['LNAME'];
    $EMAILADD = $_POST['EMAILADD'];
    $GENDER = $_POST['GENDER'];
    $CITYADD = $_POST['CITYADD'];
    $CUSUNAME = $_POST['CUSUNAME'];
    $CUSPASS = $_POST['CUSPASS'];
    $PHONE = $_POST['PHONE'];

$query = "INSERT INTO tblcustomer(FNAME,LNAME,EMAILADD,GENDER,CITYADD,CUSUNAME,CUSPASS,PHONE) VALUES('$FNAME','$LNAME','$EMAILADD',' $GENDER','$CITYADD', '$CUSUNAME','$CUSPASS','$PHONE')";
      $query_run = mysqli_query($connection, $query);

      if ($query_run) {
        echo '<script> alert("Data has been added"); </script>';
        redirect("index.php");
      }
      else{
         echo '<script> alert("Data not added!"); </script>';

      }
}
?>