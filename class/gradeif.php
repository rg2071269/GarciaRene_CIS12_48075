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
	//Initiate the input
	$score = rand(30,100);
	//Determine the grade
	if($score >= 90){
		$grade = 'A';
	}else if($score >= 80){
		$grade = 'B';
	}else if($score >= 70){
		$grade = 'C';
	}else if($score >= 60){
		$grade = 'D';
	}else{
		$grade = 'F';
	}
	//Output results
	echo "<h1>A score of $score = $grade</h1>";
	

?>

</body>
</html>