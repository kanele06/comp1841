<?php

$output = "";

if (isset($_POST['val1'])) {
	$val1 = $_POST['val1'];
	$val2 = $_POST['val2'];
	$calc = $_POST['calc'];

	switch ($calc) {

		case "area":
			$result = $val1 * $val2;
			$output = "Area = " . $result;
			break;

		case "perimeter":
			$result = ($val1 + $val2) * 2;
			$output = "Perimeter = " . $result;
			break;

		case "avg":
			$result = ($val1 + $val2) / 2;
			$output = "Average = " . $result;
			break;

		case "bmi":
			$result = $val1 / ($val2 * $val2);
			$output = "BMI = " . round($result, 2);
			break;

		case "minute":
			$result = ($val1 * 60) + $val2;
			$output = "Total Minutes = " . $result;
			break;

		case "max":

			if ($val1 > $val2) {
				$result = $val1;
			} else {
				$result = $val2;
			}

			$output = "Max Value = " . $result;
			break;
	}
}

include 'templates/form.html.php';

?>