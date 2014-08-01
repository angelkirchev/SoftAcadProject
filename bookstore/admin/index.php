<?php session_start();
if (!(isset($_SESSION['status']) && $_SESSION['unm'] == "admin")) {
	header("location:../index.php");
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
		include ("includes/head.inc.php");
		?>
</head>
<body>
<!-- start header -->
<div id="header">
	<div id="menu">
		<?php
		include ("includes/menu.inc.php");
		?>
	</div>
</div>
<!-- start page -->

<div id="page">
	<!-- start content -->
	<div id="content">
		<div class="post">
			<h1 class="title">Welcome to Admin Panel</h1>
			<div class="entry">
				<p class="welcomemsg">Hello :  <?php echo $_SESSION['unm']; ?></p>
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
			include ("includes/footer.inc.php");
			?>
</div>
<!-- end footer -->
</body>
</html>
