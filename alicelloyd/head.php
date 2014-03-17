<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="description" content="Welcome to Alice Lloyd Residence Hall
	at the University of Michigan, Ann Arbor. Live Love Lloyd."/>
	<meta name="author" content="Justin Andersun"/>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript" src="script.js"></script>
	<link type="text/css" rel="stylesheet" href="style.css"/>
	<?php
		$currentFile = $_SERVER["PHP_SELF"];
		$parts = Explode('/', $currentFile);
		$parts = $parts[count($parts) - 1];
		$parts = Explode('.', $parts);
		$pageName = $parts[0];
		if($pageName === "index") echo "<title>Alice Lloyd</title>";
		else echo "<title>Alice Lloyd | ", $pageName, "</title>\n";
	?>
</head>