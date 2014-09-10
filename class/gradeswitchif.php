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
	//Initiate the input and declare variables.
	$score = rand(30,100);
	//Determine the grade
	switch($score >= 90){
		case true: $grade = 'A';
		default:
	}
	switch($score >= 80 && $score < 90){
		case true:$grade = 'B';
		default:
	}
	switch($score >= 70 && $score < 80){
		case true:$grade = 'C';
		default:
	}
	switch($score >= 60 && $score < 70){
		case true:$grade = 'D';
		default:
	}
	switch($score < 60){
		case true: $grade ='F';
		default:
	}
					
	//Output results
	echo "<h1>A score of $score = $grade</h1>";
	

?>

</body>
</html>