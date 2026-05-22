<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Calculation Form</title>

	<style>

		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
			min-height: 100vh;
			display: flex;
			justify-content: center;
			align-items: center;
			position: relative;
			background: white;
			overflow: hidden;
		}

		body::before {
			content: "";
			position: absolute;
			inset: 0;
			z-index: 0;

			background-image:
			radial-gradient(
				circle at top left,
				rgba(56, 193, 182, 0.5),
				transparent 70%
			);

			filter: blur(80px);
			background-repeat: no-repeat;
		}

		.container {
			position: relative;
			z-index: 1;

			width: 400px;
			background: rgba(255,255,255,0.9);

			padding: 30px;

			border-radius: 16px;

			box-shadow:
			0 8px 25px rgba(0,0,0,0.1);

			backdrop-filter: blur(10px);
		}

		h1 {
			text-align: center;
			margin-bottom: 25px;
			color: #222;
		}

		label {
			display: block;
			margin-top: 15px;
			font-weight: bold;
			color: #333;
		}

		input,
		select {
			width: 100%;
			padding: 12px;
			margin-top: 6px;

			border: 1px solid #ccc;
			border-radius: 8px;

			box-sizing: border-box;

			font-size: 15px;
		}

		input[type="submit"] {

			background-color: #38c1b6;
			color: white;

			border: none;

			margin-top: 25px;

			font-size: 16px;
			font-weight: bold;

			cursor: pointer;

			transition: 0.3s;
		}

		input[type="submit"]:hover {
			background-color: #2da79d;
		}

		.result {

			margin-top: 25px;

			padding: 15px;

			background-color: rgba(56, 193, 182, 0.1);

			border-left: 5px solid #38c1b6;

			border-radius: 8px;

			font-size: 18px;

			font-weight: bold;

			color: #111;
		}

	</style>

</head>

<body>

<div class="container">

	<h1>Calculation Form</h1>

	<form action="" method="post">

		<label for="val1">
			Input 1
		</label>

		<input
			type="number"
			step="any"
			name="val1"
			id="val1"
			value="<?php echo $val1; ?>"
		>

		<label for="val2">
			Input 2
		</label>

		<input
			type="number"
			step="any"
			name="val2"
			id="val2"
			value="<?php echo $val2; ?>"
		>

		<label for="calc">
			Choose Calculation
		</label>

		<select name="calc" id="calc">

			<option value="area">
				Calculate Area
			</option>

			<option value="perimeter">
				Calculate Perimeter
			</option>

			<option value="avg">
				Calculate Average
			</option>

			<option value="bmi">
				Calculate BMI
			</option>

			<option value="minute">
				Calculate Total Minutes
			</option>

			<option value="max">
				Find Max Value
			</option>

		</select>

		<input type="submit" value="Calculate">

	</form>

	<div class="result">
		<?php echo $output; ?>
	</div>

</div>

</body>
</html>