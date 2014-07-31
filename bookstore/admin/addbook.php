<?php session_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>
<body>
<!-- start header -->
<div id="header">
	<div id="menu">
		<?php
			include("includes/menu.inc.php");
		?>
	</div>
</div>
<!-- end header -->
<!-- start page -->

<div id="page">
	<!-- start content -->
	<div id="content">
		<div class="post">
			<h1 class="title"> Book</h1>
			<div class="entry">
				<form action='process_addbook.php' method='POST' enctype="multipart/form-data">
				
						 <div><b>Book Name:</b> 
						<input type='text' name='name' size='40'></div>
						  
						
						<div><b>Category:</b> 
						<select style="width: 200px;" name="cat">
								<?php
									
										$link=mysql_connect("localhost","root","")or die("Can't Connect...");
			
											mysql_select_db("shop",$link) or die("Can't Connect to Database...");
			
											$query="select * from category ";
			
											$res=mysql_query($query,$link);
											
											while($row=mysql_fetch_assoc($res))
											{
												echo "<option disabled>".$row['cat_nm'];
												
												$q2 = "select * from subcat where parent_id = ".$row['cat_id'];
												
												$res2 = mysql_query($q2,$link) or die("Can't Execute Query..");
												while($row2 = mysql_fetch_assoc($res2))
												{	
													echo '<option value="'.$row2['subcat_id'].'"> ---> '.$row2['subcat_nm'];
									
													
												}
												
											}
											mysql_close($link);
								?>
						</select></div>
						  
						
						<div><b>Description:</b> 
						<textarea cols="40" rows="6" name='description' ></textarea></div>
						  
						
						<div><b>Publisher:</b> 
						<input type='text' name='publisher' size='40'></div>
						  
						
						<div><b>Edition:</b> 
						<input type='text' name='edition' size='40'></div>
						  
						
						<div><b>ISBN:</b> 
						<input type='text' name='isbn' size='40'></div>
						  
						
						<div><b>PAGES:</b> 
						<input type='text' name='pages' size='40'></div>
						  
						
						<div><b>PRICE:</b> 
						<input type='text' name='price' size='40'></div>
						  
						
						<div><b>Image:</b> 
						<input type='file' name='img' size='35'></div>
						  
						
						
						<div><b>E-Book:</b> 
						<input type='file' name='ebook'  size='35'><div>
						  
						
						<input  type='submit'  value='   OK   '  id="x">
				</form>
			</div>
			
		</div>
		
	</div>
	<!-- end content -->
	<!-- start sidebar -->
	
	<!-- end sidebar -->
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
<!-- start footer -->
<div id="footer">
			<?php
				include("includes/footer.inc.php");
			?>
</div>
<!-- end footer -->
</body>
</html>
