<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>day finder</title>
</head>
<body bgcolor="yellow             ">
<form action="" method="POST" style="align: center;">
	<input type="number" name="num">
	<input type="submit" name="submit">

</form>

<?php

if (isset($_POST['submit']))
{
	$weekday=$_POST['num'];

	switch ($weekday) {
		case 1:

		echo "today is monday";
			break;
			case 1:

		echo "today is monday";
			break;
			case 2:

		echo "today is tuesday";
			break;
			case 3:

		echo "today is wednesday";
			break;
			case 4:

		echo "today is thursday";
			break;
			case 5:

		echo "today is friday";
			break;
			case 6:

		echo "today is satureday";
			break;
			case 7:

		echo "today is sunday";
		break;
		default:
			echo "enter a valid number";
			break;
	}
}

?>

</body>
</html>