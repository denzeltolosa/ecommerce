<?php
   if (!isset($_SESSION['USERID'])){
      redirect(web_root."admin/index.php");
     }
    
?>



   <?php 
  $connection = mysqli_connect("localhost", "root" ,"");
  $db = mysqli_select_db($connection, 'db_ecommerce');

  $id = $_POST['CUSTOMERID'];

  $query = "SELECT * FROM tblcustomer WHERE CUSTOMERID='$id'";
  $query_run = mysqli_query($connection, $query);

  if ($query_run) 
    {
    while($row = mysqli_fetch_array($query_run))
    {
      ?>

          <fieldset>
            <legend> Update User Account</legend>
              <form action="" method="post">       
              <input name="CUSTOMERID" type="hidden" value="<?php echo $row['CUSTOMERID'] ?>"> 
                  <div class="form-group" style="margin-left: 60px">
                    <div class="col-md-8">
                      <label class="col-md-2 control-label" for=
                      "FNAME">First Name:</label>
                      <div class="col-md-8">
                        <input name="text" type="hidden" value="">
                         <input class="form-control input-sm" id="FNAME" name="FNAME" placeholder=
                            "First Name" type="text" value="<?php echo $row['FNAME'] ?>">
                      </div>
                    </div>
                  </div>
                  <div class="form-group" style="margin-left: 60px">
                    <div class="col-md-8" style="margin-top: 20px;">
                      <label class="col-md-2 control-label" for="LNAME">Last Name:</label>

                      <div class="col-md-8">
                        <input name="text" type="hidden" value="">
                         <input class="form-control input-sm" id="LNAME" name="LNAME" placeholder=
                            "Last Name" type="text" value="<?php echo $row['LNAME'] ?>">
                      </div>
                    </div>
                  </div>

                  <div class="form-group" style="margin-left: 60px">
                    <div class="col-md-8" style="margin-top: 20px;">
                      <label class="col-md-2 control-label" for=
                      "GENDER">Gender:</label>

                  <div class="col-md-8">
                  <select class="form-control input-sm" name="GENDER" id="GENDER">
                          <option value="Male"  <?php echo ($row['GENDER']=='Male') ? 'selected="true"': '' ; ?>>Male</option>
                          <option value="Female" <?php echo ($row['GENDER']=='Female') ? 'selected="true"': '' ; ?>>Female </option> 
                  </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-group" style="margin-left: 60px">
                    <div class="col-md-8" style="margin-top: 20px;">
                      <label class="col-md-2 control-label" for=
                      "CITYADD">City:</label>

                      <div class="col-md-8">
                        <input name="text" type="hidden" value="">
                         <input class="form-control input-sm" id="CITYADD" name="CITYADD" placeholder=
                            "City" type="text" value="<?php echo $row['CITYADD'] ?>">
                      </div>
                    </div>
                  </div>
                    <div class="form-group" style="margin-left: 60px">
                    <div class="col-md-8" style="margin-top: 20px;">
                      <label class="col-md-2 control-label" for="CUSUNAME">Username:</label>

                      <div class="col-md-8">
                        <input name="text" type="hidden" value="">
                        <input class="form-control input-sm" id="CUSUNAME" name="CUSUNAME" disabled type="text" value="<?php echo $row['CUSUNAME']?>">
                      </div>
                    </div>
                  </div>
            <br>
                  <div class="form-group" style="margin-left: 60px">
                    <div class="col-md-8" style="margin-top: 20px;">
                      <label class="col-md-2 control-label" for=
                      "PHONE">Contact Number:</label>

                      <div class="col-md-8">
                        <input name="text" type="hidden" value="">
                         <input class="form-control input-sm" id="PHONE" name="PHONE" placeholder=
                            "Contact Number" type="text" value="<?php echo $row['PHONE']  ?>">
                      </div>
                    </div>
                  </div>
            <br>
            
                </fieldset>
                 <div class="form-group">
                    <div class="col-md-9">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>

                      <div class="col-md-8" style="margin-top: 20px;">
                         <button type="submit" name="submit" class="btn btn-success" > Update</button>
                         <a href="index.php" class="btn btn-danger"> Cancel </a>
                      </div>
                    </div>
                  </div>
                </form>
                  <?php
               if(isset($_POST['submit'])){
              $CUSTOMERID = $_POST['CUSTOMERID'];
              $FNAME = $_POST['FNAME'];
              $LNAME = $_POST['LNAME'];
              $CUSUNAME = $_POST['CUSUNAME'];
               $GENDER = $_POST['GENDER'];
                $CITYADD = $_POST['CITYADD'];
                 $PHONE= $_POST['PHONE'];

                 $query = "UPDATE tblcustomer SET FNAME='$FNAME', LNAME='$LNAME', CUSUNAME=' $CUSUNAME',GENDER='$GENDER',CITYADD='$CITYADD',PHONE='$PHONE' WHERE CUSTOMERID='$id'";
                 $query_run = mysqli_query($connection, $query);

                 if ($query_run) {
                   echo '<script> alert("Data updated"); </script>';
                    redirect("index.php");
          
                   
                 }
                 else{
                  echo '<script> alert("Data update failed"); </script>';
                 }

               }   

                  ?>

<?php

  }
}
else
{

  echo '<script> alert("Data not found"); </script>';
}

?>
                          
          </fieldset> 

