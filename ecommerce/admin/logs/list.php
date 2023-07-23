<?php
	 if (!isset($_SESSION['USERID'])){
      redirect(web_root."admin/index.php");
     }

?>

<div class="row">
       	 <div class="col-lg-12">
            <h1 class="page-header">Activity Logs  </h1>
       		</div>
        	<!-- /.col-lg-12 -->
   		 </div>
	 		    <form action="controller.php?action=delete" Method="POST">  
			      <div class="table-responsive">			
				<table id="dash-table" class="table table-striped table-bordered table-hover table-responsive" style="font-size:12px" cellspacing="0">
				
				  <thead>
				  	<tr>
				  		<!-- <th>#</th> -->
				  		<th>User</th>
				  		<th>Date</th>
				  		<th>Action</th>
				  		
				 
				  	</tr>	
				  </thead> 
				  <tbody>
				  	<?php 
				  	 $connection = mysqli_connect("localhost", "root" , "", "db_ecommerce");
				  		$squery = mysqli_query($connection, "select * from tbllogs order by logdate desc ");
                                                while($row = mysqli_fetch_array($squery))
                                                {
                                                    echo '
                                                    <tr>
                                                        <td>'.$row['user'].'</td>
                                                        <td>'.$row['logdate'].'</td>
                                                        <td>'.$row['action'].'</td>
                                                    </tr>
                                                    ';
                                                }
				  		
				  	?>
				  </tbody>
					
				</table>
 
				<!-- <div class="btn-group">
				  <a href="index.php?view=add" class="btn btn-default">New</a>
				  <button type="submit" class="btn btn-default" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>
				</div>
 -->
			</div>
				</form>
	

</div> <!---End of container-->