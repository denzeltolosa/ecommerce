<?php
require_once("include/loginsession.php");
// if ($count===0) {
//     $err_login="There were some problem";
// }
if(isset($_SESSION['logged']))
{
    if ($_SESSION['logged'] == true)
    {
        if ($_SESSION['account']=="admin") {
                 redirect(web_root."admin/index.php");
            }
        elseif ($_SESSION['account']=="user") {
                 redirect(web_root."index.php");
            }
    }  
    else  {
        redirect(web_root."index.php");
      }  
}

if(isset($_POST['modalLogin'])) {
    if(!(isset($_POST['U_USERNAME']))) {
        if(!(isset($_POST['U_PASS']))) {
             redirect(web_root."index.php");    
        }
    }
}
?>