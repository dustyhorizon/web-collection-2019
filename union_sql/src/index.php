

<!DOCTYPE html>
<html>
<?php 
	if(!empty($_GET['q']) && isset($_GET['submit'])){
		$myPDO = new PDO('sqlite:./byorderoftheunionandgladiator.db');
		$result = $myPDO->query("SELECT name,description FROM user where id='".$_GET['q']."'");
		print "--name--" . " | " . "--description--" ."<br>";
	    foreach($result as $row)
	    {
        	print $row['name'] . " | " . $row['description'] . "<br>";

    	}

	}
?>
<head>
	<title></title>
</head>
<body>
	<h1>Union SQL</h1>
	<br>
	<p>Try searching for the flag!!!</p>
	<br>
	<form>
		Search Query: <input type="text" name="q"><input type="submit" name="submit">
	</form>
</body>
</html>

