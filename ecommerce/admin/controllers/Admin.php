<?php
$connection = mysqli_connect("localhost", "root" , "", "db_ecommerce");


class Admin extends CI_Controller {
	function __construct() {
        parent::__construct();
		if(!isset($_SESSION['login_id']))
		header('location:'.base_url('login'));

	}

function stats($month = ""){
			if(!empty($month)){
				$month = $month."-01";
				$cdate_from = date('Y-m',strtotime($month)).'-01';
				$m = date('m',strtotime($month));
				$y = date('Y',strtotime($month));
	
				$dnumber = cal_days_in_month(CAL_GREGORIAN, $m, $y);
				$cdate_to = date('Y-m',strtotime($month)).'-'.$dnumber;
	
				for($i = 1 ; $i <= $dnumber ; $i++){
					$i = sprintf("%'.02d", $i);
				  $days[] = $y.'-'.$m.'-'.$i;
				  $sday[$y.'-'.$m.'-'.$i] = 0;
					$i = number_format($i);
				}
	
				$sales = mysqli_query($connection, "SELECT * FROM tblsummary where date(CLAIMEDADTE) between '$cdate_from' and '$cdate_to' and ORDEREDSTATS = 'Delivered'")->result_array();
	
				foreach($sales as $row){
					foreach($sales as $row){
						$sday[date('Y-m-d',strtotime($row['CLAIMEDADTE']))] += ($row['PAYMENT']);
						}
				}
				echo json_encode(array('days'=>$days,'sday'=>$sday));
			}
		}
	}
        ?>