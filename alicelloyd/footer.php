<footer>
	Copyright 2014 Alice Lloyd ResStaff. Website by
	<a href="http://andersun.com">Justin Andersun</a>.
	<?php
		$date = new DateTime();
		echo 'Generated at ';
		echo $date->format('H:i');
		echo ' EST.';
	?>
</footer>