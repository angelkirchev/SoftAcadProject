<ul>
	<li id="login">

		<?php
		if (isset($_SESSION['status'])) {
			echo '<h2>Hello :  ' . $_SESSION['unm'] . '</h2>';
		} else {
			echo '<form action="process_login.php" method="POST">
										<h2>LogIn</h2>
											<b>Username:</b>
											<input type="text" name="usernm">
											
											<b>Password:</b>
											 <input type="password" name="pwd">
											<input type="submit" id="x" value="Login" />
										</form>';
		}
		?>
	</li>

	<li id="search">
		<h2>Search</h2>
		<form method="GET" action="search_result.php">
			<fieldset>
				<input type="text" id="s" name="s" value="" />
				<input type="submit" id="x" value="Search" />
			</fieldset>
		</form>
	</li>
	<li>
		<h2>Categories</h2>
		<ul>

			<?php
			$link = mysql_connect("localhost", "root", "") or die("Can't Connect...");

			mysql_select_db("shop", $link) or die("Can't Connect to Database...");

			$query = "select * from category ";

			$res = mysql_query($query, $link);

			while ($row = mysql_fetch_assoc($res)) {
				echo '<li><a href="subcat.php?cat=' . $row['cat_id'] . '&catnm=' . $row["cat_nm"] . '">' . $row["cat_nm"] . '</a></li>';
			}

			mysql_close($link);
			?>
		</ul>
	</li>

</ul>