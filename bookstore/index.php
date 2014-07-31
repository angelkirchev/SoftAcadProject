<?php session_start(); ?>

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

		<!-- end header -->

		<!-- start page -->

		<div id="page">
			<!-- start content -->
			<div id="content">
				<div class="post">
					<h1 class="title">Welcome to <?php
					if (isset($_SESSION['status'])) {
						echo $_SESSION['unm'];
					} else {
						echo 'Book Shop';
					}
					?></h1>
					<div class="entry">

						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec semper ultrices mauris sed vestibulum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis lobortis eget mi sit amet molestie. Duis quam quam, hendrerit non tortor quis, scelerisque ultricies mauris. Quisque id nisl tristique, pulvinar sapien sit amet, luctus enim. Duis lacinia tortor lectus, sed convallis tellus aliquet lacinia. Maecenas molestie orci in laoreet sodales. Vestibulum eu quam eget nulla scelerisque feugiat eget sit amet lectus. Curabitur accumsan mattis tellus. Phasellus vitae urna a est ornare bibendum. Proin placerat sed ipsum sit amet fringilla. Donec interdum convallis nisl, ut fringilla elit porttitor tincidunt. Pellentesque auctor mi dui, a lobortis augue dictum non. Donec id pretium nunc. Quisque congue varius dolor, id venenatis ante consequat id.

						</p>

						<p>
							Nam in porttitor leo. Suspendisse id iaculis lacus, ac accumsan mi. Nulla bibendum ullamcorper lorem, quis tempor urna condimentum varius. Nam ut libero egestas est volutpat sollicitudin et at ipsum. Sed aliquam ligula nec nunc fermentum, ut aliquam nibh fermentum. Maecenas nec dolor lacus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Cras egestas metus ac pharetra eleifend. Sed rutrum porttitor orci sed convallis.

						</p>
					</div>

				</div>

			</div>
			<!-- end content -->

			<!-- start sidebar -->
			<div id="sidebar">
				<?php
				include ("includes/search.inc.php");
				?>
			</div>
			<!-- end sidebar -->
			<div style="clear: both;">
				&nbsp;
			</div>
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
