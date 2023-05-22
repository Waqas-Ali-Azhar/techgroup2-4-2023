<?php
	$students = array(
		array(74, 96, 83),
		array(71, 97, 80),
		array(78, 92, 86),
		array(80, 98, 72),
		array(65, 81, 76),
		array(84, 87, 63),
		array(69, 75, 66),
		array(61, 70, 78),
		array(72, 93, 85),
		array(70, 88, 71),
	);
	$studentCount = count($students);
	$englishSum = 0;
	$mathsSum = 0;
	$scienceSum = 0;
	foreach ($students as $key => $student) {
		$english = $student[0];
		$maths = $student[1];
		$science = $student[2];
		$totalMarks = $english + $maths + $science;
		echo nl2br("Marks for student " . ($key + 1) . " are: " . $totalMarks . "\n");
		$englishSum += $english;
		$mathsSum += $maths;
		$scienceSum += $science;
	}
	$englishAverage = $englishSum / $studentCount;
	$mathsAverage = $mathsSum / $studentCount;
	$scienceAverage = $scienceSum / $studentCount;
	echo nl2br("Average English marks for the whole class: " . $englishAverage . "\n");
	echo nl2br("Average Maths marks for the whole class: " . $mathsAverage . "\n");
	echo nl2br("Average Science marks for the whole class: " . $scienceAverage . "\n");
?>
