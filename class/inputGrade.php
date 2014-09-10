<?php
/*
	Rene Garcia
	sept 8th, 2014
	Purpose: Illustrate Branching Constructs
*/
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Grade</title>
</head>

<body>
<?php
	//utilize the built in capabilities of PHP to grab info passed from a form
	$score = (int)$_GET['score'];
	//Determine the grade
	$grade = ($score >= 90)? 'A':(
			 ($score >= 80)? 'B':(
			 ($score >= 70)? 'C':(
			 ($score >= 60)? 'D': 'F')));

	//Output results
	echo "<h1>A score of $score = $grade</h1>";
	

?>

</body>
</html>