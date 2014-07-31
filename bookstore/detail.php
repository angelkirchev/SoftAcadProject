<?php session_start();
	$link=mysql_connect("localhost","root","")or die("Can't Connect...");
			
	mysql_select_db("shop",$link) or die("Can't Connect to Database...");
	
	$id=$_GET['id'];
	
	$q="select * from book where b_id=$id";
	
	$res=mysql_query($q,$link) or die("Can't Execute Query..");
	$row=mysql_fetch_assoc($res);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link rel="stylesheet" href="lightbox.css" type="text/css" media="screen" />
	<script src="js/prototype.js" type="text/javascript"></script>
	<script src="js/scriptaculous.js?load=effects" type="text/javascript"></script>
	<script src="js/lightbox.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/java.js"></script>
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
									<h1 class="title"><?php echo $row['b_nm'];?></h1>
									<div class="entry">
										<?php
										
											echo '	<table border="0" width="100%">

												 <tr align="center" bgcolor="#EEE9F3">
													 <td>Item Details</td>
												</tr>

											 </table>
											
											<table border="0" class="book" width="100%" bgcolor="#ffffff">
												<tr> 
													
													<td width="15%" rowspan="3">
														<img src="'.$row['b_img'].'" width="100">
													
													</td>
												</tr>
											
												<tr> 
													<td width="" height="100%">
														<table border="0"  width="100%" height="100%">
															<tr valign="top">
																<td  width="10%">NAME '.$row['b_nm'].'</td>					
															</tr>

															
															<tr>
																<td >ISBN : '.$row['b_isbn'].'</td>
															
																
															</tr>
															
																					
															<tr>
																<td >Publisher : '.$row['b_publisher'].'</td>
															
																
															</tr>											
															
															<tr>
																<td > Edition : '.$row['b_edition'].'</td>
													
																
															</tr>
															
															<tr>
																<td >  PAGES : '.$row['b_page'].'</td>
															
															</tr>
															
															<tr>
																<td > PRICE : '.$row['b_price'].' lv</td>
													
															</tr>
														</table>
										
														
													</td>
												</tr>
											</table>
										
											<table border="0" width="100%">

												 <tr align="center" bgcolor="#EEE9F3">
													 <td>DESCRIPTION</td>
												</tr>
																		
											 </table>
											 
											 '.$row['b_desc'].'
																				

											 
											 <tr><td colspan=2></td></tr>
											
											<table border="0" width="100%">
												
												 <tr align="center" bgcolor="#EEE9F3">';
												 
												 if(isset($_SESSION['status']))
												 {
													echo ' <td><a href="process_cart.php?nm='.$row['b_nm'].'&rate='.$row['b_price'].'">
														<img src="images/addcart.jpg">
													</a></td>';
												}
												else
												{
													echo '<td><img src="images/addcart.jpg"> <a href="register.php"> <h4>Please Login..</h4></a></td>';
												}
												echo '</tr>
											</table>';
										?>
									</div>
				
								</div>
			
							</div>
						<!-- end content -->
							<!-- start sidebar -->
							<div id="sidebar">
									<?php
										include("includes/search.inc.php");
									?>
							</div>
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
