<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP Setlist</title>
</head>

<body>
   <h1> IN SETLIST PHP </h1>
	<?php
		$genre = $_GET["w"];
		if ($genre == "Pop")
			echo "White";
		else if ($genre == "Rock")
			echo "Black";
		else if ($genre == "Alternative")
			echo "Down";
		else if ($genre == "Classic Rock")
			echo "Up";
		else if ($genre == "Electronic")
			echo "No";
		else if ($genre == "Regional Mexican")
			echo "Yes";
        else if ($genre == "Hip-Hop")
			echo "Yes";
		else echo "nothing to say!";
	?>
</body>
</html>