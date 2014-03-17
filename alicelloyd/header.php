<header>
	<h1>Alice Lloyd</h1>
	<h2>Residence Hall</h2>
	<nav>
		<?php $pageName=basename($_SERVER['REQUEST_URI'], '.php') ?>
		<a
			<?php
				if ($pageName=='index')	echo "id=\"current\"";
				else echo "class=\"link\"";
			?> href="index.php">Home
		</a>
		<a
			<?php
				if ($pageName=='about')	echo "id=\"current\"";
				else echo "class=\"link\"";
			?> href="about.php">About
		</a>
		<a
			<?php
				if ($pageName=='students')	echo "id=\"current\"";
				else echo "class=\"link\"";
			?> href="students.php">Students
		</a>
		<a
			<?php
				if ($pageName=='staff')	echo "id=\"current\"";
				else echo "class=\"link\"";
			?> href="staff.php">Staff
		</a>
	</nav>
</header>