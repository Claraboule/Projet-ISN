
<?php
$SEXE = $_POST['SEXE'];
$Q2 = $_POST['Q2'];
$Q3 = $_POST['Q3'];
$Q4 = $_POST['Q4'];
$Q5 = $_POST['Q5'];
$Q6 = $_POST['Q6'];
$Q7 = $_POST['Q7'];
$Q8 = $_POST['Q8'];
$score = $Q2 + $Q3 + $Q4 + $Q5 + $Q6 + $Q7 + $Q8;

if ($SEXE == 0) 
		{header('Location: ERROR.html');
		exit();}
if ($SEXE == 1 and $score >= 16) 
		{header('Location: variation1.html');
		exit();}

if ($SEXE == 1 and $score <= 16) 
		{header('Location: variation2.html');
		exit();}
			
if ($SEXE == 2 and $score >= 16) 
		{header('Location: variation3.html');
		exit();}

if ($SEXE == 2 and $score <= 16) 
		{header('Location: variation4.html');
		exit();}
			
?>



