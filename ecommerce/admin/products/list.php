<?php
		check_message(); 
		?> 
		 <style>
.message{
color: blue;
border:1px solid #000;
background: lightgray;
padding: 10px;
}
</style>
<head>
<script>
function confirmDelete() {
	var selector = document.getElementsByName('selector[]');
    var selectedCount = 0;
    var messageElement = document.getElementById('deleteMessage');

    for (var i = 0; i < selector.length; i++) {
        if (selector[i].checked) {
            selectedCount++;
        }
    }

    if (selectedCount === 0) {
        messageElement.textContent = 'Select a record to delete!';
        messageElement.style.color = 'red';
        messageElement.style.fontWeight = 'bold';
        messageElement.style.padding = '10px';
        messageElement.style.border = '1px solid #ccc';
        messageElement.style.backgroundColor = '#f9f9f9';
    } else if (confirm("Are you sure you want to delete the selected products?")) {
        // If confirmed and records are selected, submit the form
        document.getElementById("deleteForm").submit();
    }
}

    </script>
</head>
				 
				  
		<div class="row">
       	 <div class="col-lg-12">
			<div id="deleteMessage"></div>
            <h1 class="page-header">List of Products  <a href="index.php?view=add" class="btn btn-primary btn-xs  ">  <i class="fa fa-plus-circle fw-fa"></i> New</a>  </h1>
       		</div>
			   
   		 </div>
   		 	
			    <form action="controller.php?action=delete" id="deleteForm" Method="POST">  	
			    <div class="table-responsive">				
				<table id="dash-table"  class="table table-striped table-bordered table-hover "  style="font-size:12px" cellspacing="0" >
					
				  <thead>
				  	<tr> 
				  		<th width="1%">#</th>
				  		<th width="50">Image</th>
				  		<th>Owner</th>
				  		<th>Contact Number</th>
				  	
				  		<th>Product</th> 
				  		<th>Description</th>
				  		<!-- <th>Category</th> -->
				  		<th>Price</th>
				  		<th>Discount%</th>  
				  		<th>Discounted Price</th>  
				  		<th>Stocks</th>
						<th>Stocks Status</th>
				  	
				

				  		<!-- <th>Action</th>  -->
				  		 
				  	</tr>	
				  </thead> 	

			  <tbody>
			

			<?php
			$query = "SELECT * FROM `tblpromopro` pr , `tblproduct` p , `tblcategory` c
					WHERE pr.`PROID`=p.`PROID` AND  p.`CATEGID` = c.`CATEGID` ";
			$mydb->setQuery($query);
			$cur = $mydb->loadResultList();

			foreach ($cur as $result) {
				echo '<tr>';
				echo '<td width="1%" align="center"><input type="checkbox" name="selector[]" id="selector[]" value="' . $result->PROID . '"/></td>';
				echo '<td style="padding:0px;">
					<a class="PROID" href="" data-target="#productmodal"  data-toggle="modal"  data-id="' . $result->PROID . '">
					<img  title="' . $result->CATEGORIES . '" style="width:100px;height:50px;padding:0;"  src="' . web_root . 'admin/products/' . $result->IMAGES . '">
					</a>
				</td>';
				echo '<td><a title="edit" href="' . web_root . 'admin/products/index.php?view=ownernameedit&id=' . $result->PROID . '"><i class="fa fa-pencil "></i>' . $result->OWNERNAME . '</a></td>';
				echo '<td><a title="edit" href="' . web_root . 'admin/products/index.php?view=ownernumberedit&id=' . $result->PROID . '"><i class="fa fa-pencil "></i>' . $result->OWNERPHONE . '</a></td>';

				echo '<td><a title="edit" href="' . web_root . 'admin/products/index.php?view=edit&id=' . $result->PROID . '"><i class="fa fa-pencil "></i>' . $result->CATEGORIES . '</a></td>';

				echo '<td> <a title="edit" href="' . web_root . 'admin/products/index.php?view=productdescedit&id=' . $result->PROID . '"><i class="fa fa-pencil "></i>' . $result->PRODESC . '</a></td>';
				echo '<td> <a title="edit" href="' . web_root . 'admin/products/index.php?view=priceedit&id=' . $result->PROID . '"> <i class="fa fa-pencil "></i> &#8369 ' . number_format($result->PROPRICE, 2) . '</a></td>';
				echo '<td>' . number_format($result->PRODISCOUNT, 0) . '% </td>';
				echo '<td> &#8369 ' . number_format($result->PRODISPRICE) . '</td>';
				echo '<td width="4%"> <a title="edit" href="' . web_root . 'admin/products/index.php?view=stockedit&id=' . $result->PROID . '"><i class="fa fa-pencil "></i>' . $result->PROQTY . '</a></td>';
				// Check if stock is below 5 or out of stock
				if ($result->PROQTY >= 1 && $result->PROQTY <= 9) {
					echo '<td style="color: red;">Low Stock</td>';
				} else if ($result->PROQTY <= 0) {
					echo '<td style="color: red;">Out of Stock</td>';
				} else {
					echo '<td>In Stock</td>';
				}

				echo '</tr>';
			}
			?>


				  </tbody>
					
				 	
				</table>
			<div class="btn-group">
       			 <button type="button" class="btn btn-default" onclick="confirmDelete()">
            <i class="fa fa-trash fw-fa"></i>  Delete</button>
    		</div>
				</div>
				</form>
 
 		<div class="modal fade" id="productmodal" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button class="close" data-dismiss="modal" type=
                                    "button">x</button>

                                    <h4 class="modal-title" id="myModalLabel">Image.</h4>
                                </div>

                                <form action="<?php echo web_root; ?>admin/products/controller.php?action=photos" enctype="multipart/form-data" method=
                                "post">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <div class="rows">
                                                <div class="col-md-12">
                                                    <div class="rows">
                                                        <div class="col-md-8">

                                                            <input class="proid" type="hidden" name="proid" id="proid" value="">
                                                              <input name="MAX_FILE_SIZE" type=
                                                            "hidden" value="1000000"> <input id=
                                                            "photo" name="photo" type=
                                                            "file">
                                                        </div>

                                                        <div class="col-md-4"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button class="btn btn-default" data-dismiss="modal" type=
                                        "button">Close</button> <button class="btn btn-primary"
                                        name="savephoto" type="submit">Upload Photo</button>
                                    </div>
                                </form>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
