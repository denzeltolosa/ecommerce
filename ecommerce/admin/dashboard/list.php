<?php
   if (!isset($_SESSION['USERID'])){
      redirect(web_root."admin/index.php");
     }
?>



<?php
$connection = mysqli_connect("localhost", "root" , "", "db_ecommerce");



$cdate_from = date('Y-m').'-01';
$dnumber = cal_days_in_month(CAL_GREGORIAN, date('m'), date('Y'));
$cdate_to = date('Y-m').'-'.$dnumber;
  
for($i = 1 ; $i <= $dnumber ; $i++){
  $i = sprintf("%'.02d", $i);
  $days[] = date('Y').'-'.date('m').'-'.$i;
  $sday[date('Y').'-'.date('m').'-'.$i] = 0;
  $i = number_format($i);
}

$sales = mysqli_query($connection, "SELECT * FROM tblsummary WHERE date(CLAIMEDADTE) between '$cdate_from' and '$cdate_to' and ORDEREDSTATS = 'Delivered'");
foreach($sales as $row){
$sday[date('Y-m-d',strtotime($row['CLAIMEDADTE']))] += ($row['PAYMENT']);
}
?>




 

   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

               
   
  <div class="main">
            <div class="cards">
                <div class="card">
                    <div class="card-content">

                        <div class="number">
                          <?php
                          $connection = mysqli_connect("localhost", "root" , "", "db_ecommerce");
                          $query = "SELECT CUSTOMERID FROM tblcustomer ORDER BY CUSTOMERID";
                          $query_run = mysqli_query($connection, $query);
                          $row = mysqli_num_rows($query_run);

                          echo '<h3>' .$row.'</h3>';

                          ?>
                        </div>
                      <div class="card-name">Users</div>
                        <a href="<?php echo web_root; ?>admin/customer/index.php">View Details <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-user"></i>
                    </div>
                </div>

                <div class="card">
                    <div class="card-content">
                        <div class="number">  <?php
                          $connection = mysqli_connect("localhost", "root" , "", "db_ecommerce");
                          $query = "SELECT PROID FROM tblproduct ORDER BY PROID";
                          $query_run = mysqli_query($connection, $query);
                          $row = mysqli_num_rows($query_run);

                          echo '<h3>' .$row.'</h3>';

                          ?></div>
                        <div class="card-name">Products</div>
                        <a href="<?php echo web_root; ?>admin/products/index.php">View Details <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-th"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">  <?php
                          $connection = mysqli_connect("localhost", "root" , "", "db_ecommerce");
                          $query = "SELECT CATEGID FROM tblcategory ORDER BY CATEGID";
                          $query_run = mysqli_query($connection, $query);
                          $row = mysqli_num_rows($query_run);

                          echo '<h3>' .$row.'</h3>';

                          ?></div>
                        <div class="card-name">Categories</div>
                        <a href="<?php echo web_root; ?>admin/category/index.php">View Details <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-bars"></i>
                    </div>
                </div>

                   <div class="card">
                    <div class="card-content">
                        <div class="number">   
                          <?php
                          $connection = mysqli_connect("localhost", "root" , "", "db_ecommerce");
                          $query = "SELECT sum(PAYMENT) as totalsales from tblsummary WHERE ORDEREDSTATS = 'Delivered'"; 
                          $query_run = mysqli_query($connection, $query);
                          $row = mysqli_fetch_assoc($query_run);

                          echo '<h3> ₱ ' .$row['totalsales'].'</h3>';

                          

                          ?>
                            
                          </div>
                        <div class="card-name">Sales</div>
                        <a href="<?php echo web_root; ?>admin/orders/index.php">View Details <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-money"></i>
                    </div>
                </div>
                 <div class="card">
                    <div class="card-content">
                        <div class="number">   
                          <?php
                          $connection = mysqli_connect("localhost", "root" , "", "db_ecommerce");
                          $query = "SELECT USERID from tbluseraccount WHERE U_ROLE='Administrator' ORDER BY USERID"; 
                          $query_run = mysqli_query($connection, $query);
                          $row = mysqli_num_rows($query_run);

                          echo '<h3>' .$row.'</h3>';

                          

                          ?>
                            
                          </div>
                        <div class="card-name">Administrators</div>
                        <a href="<?php echo web_root; ?>admin/admin/index.php">View Details <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
                 <div class="card">
                    <div class="card-content">
                        <div class="number">   
                          <?php
                          $connection = mysqli_connect("localhost", "root" , "", "db_ecommerce");
                          $query = "SELECT USERID from tbluseraccount WHERE U_ROLE='Staff' ORDER BY USERID"; 
                          $query_run = mysqli_query($connection, $query);
                          $row = mysqli_num_rows($query_run);

                          echo '<h3>' .$row.'</h3>';

                          

                          ?>
                            
                          </div>
                        <div class="card-name">Staffs</div>
                        <a href="<?php echo web_root; ?>admin/admin/index.php">View Details <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-user-circle"></i>
                    </div>
                </div>
                 <div class="card">
                    <div class="card-content">
                        <div class="number">   
                          <?php
                          $connection = mysqli_connect("localhost", "root" , "", "db_ecommerce");
                          $query = "SELECT USERID from tbluseraccount WHERE U_ROLE='Encoder' ORDER BY USERID"; 
                          $query_run = mysqli_query($connection, $query);
                          $row = mysqli_num_rows($query_run);

                          echo '<h3>' .$row.'</h3>';

                          

                          ?>
                            
                          </div>
                        <div class="card-name">Encoder</div>
                        <a href="<?php echo web_root; ?>admin/admin/index.php">View Details <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-pencil-square-o"></i>
                    </div>
                </div>
           </div>

         




            <div class="charts">
                <div class="chart">
                   <div class="row">
       <div class="col-xl-8 col-lg-7">
          <div class="card shadow mb-4">
        
            <div class="card-header bg-primary py-3 d-flex flex-row align-items-center justify-content-between">
            <div class="card-body" id="chartField">
            <input type="month" id="month_of" class="form-control form-control-sm" value="<?php echo date("Y-m") ?>"/>
                <h3 class="m-0 font-weight-bold text-white" style="text-align: center;">Total Sales Data Monthly </h3>
            </div>
         
                <div class="chart-area">
                    
                    <div class="chartjs-size-monitor">
                        <div class="chartjs-size-monitor-expand">
                           
                        </div>
                        <div class="chartjs-size-monitor-shrink">
                           
                        </div>
                    </div>
             
                </div>
            </div>
        </div>
    </div>
      <canvas id="myAreaChart" width="669" height="320"  style="display: block; width: 669px; height: 320px;"></canvas>
       </div>
       </div>
  
   <div class="row">
   <div class="col-md-10">
     <div class="panel panel-default">
       <div class="panel-heading">
         <strong>
           <span class="glyphicon"></span>
           <span >Highest Selling Products</span>
         </strong>
       </div>
       <div class="panel-body">
         <table class="table table-striped table-bordered table-condensed">
          <thead>
           <tr>
             <th style="text-align:center;">Product</th>
             <th style="text-align:center;">Total Sold</th>
           <tr>
          </thead>
          <tbody>
              
                <?php 
              $query = "SELECT  SUM(o.ORDEREDQTY) as totalsold, p.PRODESC FROM `tblproduct` p join `tblorder` o
                  WHERE  p.`PROID`=o.`PROID` GROUP BY p.PRODESC  ORDER BY SUM(o.ORDEREDQTY) desc limit 5 ";
              $mydb->setQuery($query);
              $cur = $mydb->loadResultList();

            foreach ($cur as $result) {
            ?>
            <?php
             echo '<tr>';
              echo '<td style="text-align:center;" >'. $result->PRODESC.'</td>';
              echo '<td style="text-align:center;">'. $result->totalsold.'</td>';
              echo '</tr>';

              }

            ?>

              </tr>
          </tbody>
         </table>
       </div>
     </div>
   </div>
   
  
 <div class="table-responsive">      
        <table id="dash-table" class="table" style="font-size:12px" cellspacing="0"> 
        </table>
      </div>
    <script src="js/feather.min.js"></script>      
  <script src="js/jquery.slim.min.js"></script>
  <script src="js/Chart.min.js"></script>
  <script src="js/chart.js"></script>
   <script>
   

var ctxL = document.getElementById("myAreaChart").getContext('2d');

var myAreaChart = new Chart(ctxL, {
type: 'line',
data: {
labels: ["<?php echo implode('","',$days) ?>"],
datasets: [{
label: "Total Sales for the month of <?php echo date("F, Y",strtotime($cdate_from)) ?>",
data: [<?php echo implode(',',$sday) ?>],
backgroundColor: [
'#007bffa3',
 '#17a2b8',
 '#FF0000',
 '#008B8B',
 '#ffff24',
8
],
borderColor: [
'#007bffa3',
],
fill: false,
borderWidth: 3
}
]
},

options: {
responsive: true,
scales:{
    yAxes:[{
      ticks:{
        callback:function(value){
          console.log(value)
          return parseFloat(value).toLocaleString('en-US',{style:'decimal',maximumFractionDigit:2})
        }
      }
    }]
  }
}
});


$('#month_of').change(function() {
  var selectedMonth = this.value;

  $.ajax({
    url: "stats.php", // Replace with your desired URL to fetch the data
    method: 'POST', // Use the appropriate HTTP method
    data: { month: selectedMonth }, // Send the selected month as data
    dataType: 'json',
    success: function(response) {
      // Clear previous chart if it exists
      if (myAreaChart) {
        myAreaChart.destroy();
      }

      // Get canvas element
      var ctxL = document.getElementById("myAreaChart").getContext('2d');

      // Create the chart data
      var chartData = {
        labels: response.labels,
        datasets: [{
          label: "Daily Sales for the month of " + response.monthLabel,
          data: response.sales,
          backgroundColor: response.colors,
          borderColor: response.colors[0],
          fill: false,
          borderWidth: 3
        }]
      };

      // Create the chart options
      var chartOptions = {
        responsive: true,
        scales: {
          yAxes: [{
            ticks: {
              callback: function(value) {
                return parseFloat(value).toLocaleString('en-US', {
                  style: 'decimal',
                  maximumFractionDigits: 2
                });
              }
            }
          }]
        }
      };

      // Create the line chart using Chart.js
      myAreaChart = new Chart(ctxL, {
        type: 'line',
        data: chartData,
        options: chartOptions
      });
    },
    error: function(err) {
      console.log(err);
      alert("An error occurred.");
    }
  });
});



  </script>


  
    