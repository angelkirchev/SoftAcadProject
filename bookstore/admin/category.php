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
			<h1 class="title"></h1>
			<div class="entry">
				<form action='process_addcategory.php' method='POST'>
						<b>ADD CATEGORY </b>
							  
							<input type='text' name= 'cat' size='25'>
							
							<input type='submit'  value='  ADD  ' id="x">
							
							  
				</form>
				<hr>
				<div><form action='process_addsubcategory.php' method='POST'>
							<b>ADD SUB-CATEGORY </b>
							  
							<u>PARENT CATEGORY :</u>
									  
										<select style="width: 170px;" name="parent">
											<?php
											
												$link=mysql_connect("localhost","root","")or die("Can't Connect...");
					
													mysql_select_db("shop",$link) or die("Can't Connect to Database...");
					
													$query="select * from category ";
					
													$res=mysql_query($query,$link);
													
													while($row=mysql_fetch_assoc($res))
													{
														echo "<option value='".$row['cat_id']."'>".$row['cat_nm'];
														//PASS ID NOT NAME
													}
					
													mysql_close($link);
											?>
										</select></div>
										<div>
									
									  
							<u>SUB-CATEGORY:</u>
									  
										<input type='text' name= 'subcat' size='25'>
										
										<input type='submit'  value='  ADD  ' id="x">
									
									  	
				</form>
				<hr>
				<form action='process_delcategory.php' method='POST'>
							
						<b>DELETE CATEGORY </b>						
							  
								<select style="width: 170px;" name="del">
									<?php
									
										$link=mysql_connect("localhost","root","")or die("Can't Connect...");
			
											mysql_select_db("shop",$link) or die("Can't Connect to Database...");
			
											$query="select * from category ";
			
											$res=mysql_query($query,$link);
											
											while($row=mysql_fetch_assoc($res))
											{
												echo "<option>".$row['cat_nm'];
											}
			
											mysql_close($link);
									?>
								</select>
						
							
							<input type='submit' value='  DELETE ' id="x">
				</form>

				<form action='process_delsubcategory.php' method='POST'>
							<hr>
						<b>DELETE SUB CATEGORY </b>						
							  
								<select style="width: 170px;" name="subcatnm">
									<?php
									
										$link=mysql_connect("localhost","root","")or die("Can't Connect...");
			
											mysql_select_db("shop",$link) or die("Can't Connect to Database...");
			
											$query="select * from category ";
			
											$res=mysql_query($query,$link);
											
											while($row=mysql_fetch_assoc($res))
											{
												echo "<option>".$row['cat_nm'];
												$qq = "select * from subcat where parent_id=".$row['cat_id'];
												
												$ress = mysql_query($qq,$link) or die("wrong delete subcat query..");
												while($roww = mysql_fetch_assoc($ress))
												{
													echo "<option value='".$roww['subcat_id']."'> ---> ".$roww['subcat_nm'];
												}
												
											}
			
											mysql_close($link);
									?>
								</select>
						
							
							<input type='submit' value=' DELETE ' id="x">
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
