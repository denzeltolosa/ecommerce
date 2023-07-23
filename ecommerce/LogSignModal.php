 <!-- sign up modal -->
 <div class="modal fade" id="smyModal" tabindex="-1">
 
 <div class="modal-dialog" >
  <div class="modal-content">
    <div class="modal-header">
     
      <div class="modal-body">
         
              <!-- Nav tabs -->

              <ul class="nav nav-pills">
                  <li class="active"><a class="btn btn-default check_out" href="#home" data-toggle="tab">Login</a>
                  </li>
                  <li><a class="btn btn-default check_out" href="#profile" data-toggle="tab">Sign Up</a>
                  </li>
                  
              </ul>

              <!-- Tab panes  login panel-->
              <div class="tab-content">
                  <div class="tab-pane fade in active" id="home">
                      <!-- <h4>Login Tab</h4>  -->
                       <div class="panel panel-pup">
                        <div class="panel-heading">
                            Login Details
                        </div>
                        <div class="panel-body">

                           <form class="form-horizontal span6" name=""   method="POST">
                              <input class="proid" type="hidden" name="proid" id="proid" value="">
                                <div class="form-group">
                                  <div class="col-md-10">
                                    <label class="col-md-4 control-label" for=
                                    "U_USERNAME">Username:</label>
                                    
                                    <div class="col-md-8">
                                       <input   id="U_USERNAME" name="U_USERNAME" placeholder="Username" type="text" class="form-control input-sm" > 
                             
                                    </div>
                                  </div>
                                </div>

                                <div class="form-group">
                                  <div class="col-md-10">
                                    <label class="col-md-4 control-label" for=
                                    "U_PASS">Password:</label>
                                    
                                    <div class="col-md-8">
                                     <input name="U_PASS" id="U_PASS" placeholder="Password" type="password" class="form-control input-sm">
                            
                                    </div>
                                  </div>
                                </div>

                                  <div class="form-group">
                                  <div class="col-md-10">
                                    <label class="col-md-4 control-label" for=
                                    "FIRSTNAME"> </label>
                                    
                                    <div class="col-md-8">
                                    <button type="submit" id="modalLogin" name="modalLogin" class="btn btn-pup"><span class="glyphicon glyphicon-log-in "></span>   Login</button> 
                                     <button class="btn btn-default" data-dismiss="modal" type="button">Close</button> 
                                    </div>
                                  </div>
                                </div>

 
                            </form>

                       </div>
                        <div class="panel-footer">
                            <a href="passwordrecover.php">Forgot your password?</a>
                        </div>
                    </div> 
                  </div>

 <?php 
  require_once ("include/initialize.php"); 
 if (@$_GET['page'] <= 2 or @$_GET['page'] > 5) {
  # code...
    // unset($_SESSION['PRODUCTID']);
    // // unset($_SESSION['QTY']);
    // // unset($_SESSION['TOTAL']);
} 

if(isset($_POST['modalLogin'])){
  $username = trim($_POST['U_USERNAME']);
  $upass  = trim($_POST['U_PASS']);
  $h_upass = sha1($upass);
  
   if ($username == '' OR $upass == '') {

      message("Invalid Username and Password!", "error");
      redirect("login.php");
         
    } else {  
  //it creates a new objects of member
    $user = new User();
    $cus = new Customer();
    $res = $user::userAuthentication($username, $h_upass);
    $cusres = $cus::cusAuthentication($username,$h_upass);
    if ($res==true) { 
       message("You login as ".$_SESSION['U_ROLE'].".","success");
      if ($_SESSION['U_ROLE']=='Administrator'){
         redirect(web_root."admin/dashboard/index.php");
      }else{
       message("Account does not exist! Please contact Administrator.", "error");
       redirect(web_root."admin/login.php"); 
      }
    }
      if ($cusres==true) {
          if($_POST['proid']==''){
            redirect(web_root."/index.php");
           }
           else{
              $proid = $_POST['proid'];
              $id = mysql_insert_id(); 
              $query ="INSERT INTO `tblwishlist` (`PROID`, `CUSID`, `WISHDATE`, `WISHSTATS`)  VALUES ('". $proid."','".$_SESSION['CUSID']."','".DATE('Y-m-d')."',0)";
              mysql_query($query) or die(mysql_error());
              redirect(web_root."index.php?q=profile");
             }
      }
    
    
        }

 } 
 ?> 



                  
          

             
                  <!-- sign in panel -->
                  <div class="tab-pane fade" id="profile">
                      <!-- <h4>Customer Details</h4>  --> 

                           <form  class="form-horizontal span6" action="customer/controller.php?action=add" onsubmit="return personalInfo();" name="personal" method="POST" enctype="multipart/form-data">
                                <div class="panel panel-pup">
                                    <div class="panel-heading">
                                       Customer Details
                                    </div>
                                     <div class="panel-body">
                                      <input class="proid" type="hidden" name="proid" id="proid" value="">
                                      <div class="form-group">
                                        <div class="col-md-10">
                                          <label class="col-md-4 control-label" for=
                                          "FNAME">First Name:</label>
                                          <!-- <input  id="CUSTOMERID" name="CUSTOMERID"  type="HIDDEN" value="<?php echo $res->AUTO; ?>">  -->
                                          <div class="col-md-8">
                                             <input class="form-control input-sm" id="FNAME" name="FNAME" placeholder=
                                                "First Name" type="text" value="">
                                          </div>
                                        </div>
                                      </div>

                                      <div class="form-group">
                                        <div class="col-md-10">
                                          <label class="col-md-4 control-label" for=
                                          "LNAME">Last Name:</label>

                                          <div class="col-md-8">
                                             <input class="form-control input-sm" id="LNAME" name="LNAME" placeholder=
                                                "Last Name" type="text" value="">
                                          </div>
                                        </div>
                                      </div>

                                       <div class="form-group">
                                        <div class="col-md-10">
                                          <label class="col-md-4 control-label" for=
                                          "GENDER">Gender:</label>

                                          <div class="col-md-8">
                                            <input  id="GENDER" name="GENDER" placeholder=
                                                "Gender" type="radio"  value="Male"><b> Male </b>
                                                <input   id="GENDER" name="GENDER" placeholder=
                                                "Gender" type="radio" value="Female"> <b> Female </b>
                                          </div>
                                        </div>
                                      </div>

                                       <div class="form-group">
                                            <div class="col-md-10">
                                              <label class="col-md-4 control-label" for=
                                              "CITYADD">Municipality/City:</label>

                                              <div class="col-md-8">
                                                 <input class="form-control input-sm" id="CITYADD" name="CITYADD" placeholder=
                                                    "Municipality/City Address" type="text" value="">
                                              </div>
                                            </div>
                                          </div>
                                          <div class="form-group">
                                        <div class="col-md-10">
                                          <label class="col-md-4 control-label" for=
                                          "EMAILADD">Email:</label>

                                          <div class="col-md-8">
                                             <input class="form-control input-sm" id="EMAILADD" name="EMAILADD" placeholder=
                                                "Email" type="text" value="">
                                                <div id="error"></div>
                                          </div>
                                        </div>
                                      </div> 
 
                                  
                                      <div class="form-group">
                                        <div class="col-md-10">
                                          <label class="col-md-4 control-label" for=
                                          "U_USERNAME">Username:</label>

                                          <div class="col-md-8">
                                             <input class="form-control input-sm" id="U_USERNAME" name="U_USERNAME" placeholder=
                                                "Username" type="text" value="">
                                          </div>
                                        </div>
                                      </div> 
                                      
                                       <div class="form-group">
                                        <div class="col-md-10">
                                          <label class="col-md-4 control-label" for=
                                          "U_PASS">Password:</label>

                                          <div class="col-md-8">
                                             <input class="form-control input-sm" id="U_PASS" name="U_PASS" placeholder=
                                                "Password" type="password" value=""><span></span>
                                          </div>
                                        </div>
                                      </div>

 
                                      <div class="form-group">
                                        <div class="col-md-10">
                                          <label class="col-md-4 control-label" for=
                                          "PHONE">Contact Number:</label>

                                          <div class="col-md-8">
                                             <input class="form-control input-sm" id="PHONE" name="PHONE" placeholder=
                                                "+63 0000000000" type="number" value="">
                                          </div>
                                        </div>
                                      </div>

                          
                                      
                                       <div class="form-group">
                                        <div class="col-md-10">
                                           <label class="col-md-4" align = "right"for=
                                          "image"></label>
                                          <div class="col-md-8">
                                        <p> <input type="checkbox" id="conditionterms" name="conditionterms" value="checkbox" />
                                           <small>I Agree with the <a class="toggle-modal"  onclick=" OpenPopupCenter('terms.php','Terms And Codition','600','600')"  ><b>TERMS AND CONDITION</b></a> </small>
                                           
                                          </div>
                                        </div>
                                      </div> 

                                      <div class="form-group">
                                        <div class="col-md-10">
                                           <label class="col-md-4" align = "right"for=
                                          "image"></label>
                                          <div class="col-md-8">
                                            <input type="submit"  name="submit"  value="Sign Up"  class="submit btn btn-pup"  />
                                             <button class="btn btn-default" data-dismiss="modal" type=
                                                "button">Close</button> 
                                          </div>
                                        </div>
                                      </div> 

                                        

                                     </div>
                                    <div class="panel-footer">
                                        <p align="left">&copy; <a href="">Ram Dale Junkshop</a></p>
                                    </div> 
                            </div> 
                            <!-- end panel sign up -->
                        </form>  
                   </div> 
              </div>
          
                  
              
          </div> <!-- /.modal-body -->
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->

  </div>
  </div>

<!-- end sign up modal -->





<script language="javascript" type="text/javascript">
        function OpenPopupCenter(pageURL, title, w, h) {
            var left = (screen.width - w) / 2;
            var top = (screen.height - h) / 4;  // for 25% - devide by 4  |  for 33% - devide by 3
            var targetWin = window.open(pageURL, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);
        } 
    </script>