<?php
	 if (!isset($_SESSION['USERID'])){
      redirect(web_root."admin/index.php");
     }
?>


<div class="row">
       	 <div class="col-lg-10" style="text-align: center;">
            <h1 class="page-header">List of Users </h1>
       		</div>
     
   		 </div>
 	
			    <form action="controller.php?action=delete" Method="POST">  	
			    <div class="table-responsive">				
				<table id="dash-table"  class="table table-striped table-bordered table-hover "  style="font-size:12px" cellspacing="0" >
					
				  <thead>
				  	<tr> 
				  		<th style="text-align: center;">ID</th>
				  		<th style="text-align: center;">First Name</th>
						<th style="text-align: center;">Last Name</th>
						<th style="text-align: center;">Email Address</th>
						<th style="text-align: center;">Username</th>
						<th style="text-align: center;">Gender</th>
						<th style="text-align: center;">City</th>
						<th style="text-align: center;">Contact Number</th>

				  	
				

				  		
				  		 
				  	</tr>	
				  </thead> 	

			  <tbody>
				  	<?php 
				  		$mydb->setQuery("SELECT * FROM  `tblcustomer`");
				  		$cur = $mydb->loadResultList();

						foreach ($cur as $result) { 
				  		echo '<tr>';
				  		echo '<td width="1%" align="center"><input type="checkbox" name="selector[]" id="selector[]" value="'.$result->CUSTOMERID. '"/></td>';
				  		echo '<td style="text-align: center;">'.$result->FNAME.'</td>';
				   		echo '<td style="text-align: center;">'.$result->LNAME.'</td>'; 	
				
				  		echo '<td style="text-align: center;">'.$result->EMAILADD.'</td>';
				  		
				  		echo '<td style="text-align: center;">'. $result->U_USERNAME.'</td>'; 
				  		echo '<td style="text-align: center;">'. $result->GENDER.'</td>';
				  		echo '<td style="text-align: center; column-width: 300px;">'. $result->CITYADD.'</td>';
				  		echo '<td style="text-align: center;">'. $result->PHONE.'</td>';
				  		echo '</tr>';
				  	
			

				  		
				  		
				  		 
				  
				  	} 
				  	?>


				  </tbody>
					
				 	
				</table>

				<div class="btn-group">
				  <button type="submit" class="btn btn-default" name="delete"><i class="fa fa-trash fw-fa"></i> Delete Record</button>
				</div>
				</div>
				</form>

