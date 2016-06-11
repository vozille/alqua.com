

	<?php 
	function FunctionName($a = 11, $b = 22)
	{
		$x = min($a, $b);
		$y = max($a, $b);
		while ($x > 1) {
			$temp = $x;
			$x = $y%$x;
			$y = $temp;
		}
		return $y;
	}
	// $server = "localhost";
	// $user = "root";
	// $password = "fakechintu";
	// $db = "results_db";

	// $conn = mysqli_connect($server, $user, $password, $db);
	// $query = "SELECT * FROM `exam` where student_id = \"1301106106\"";
	// $result = mysqli_query($conn, $query);
	// $rows = array();
	// while($row =  (mysqli_fetch_array($result, MYSQLI_ASSOC))){
	// 	$rows[] = $row;
	// }
	// print_r($rows);
	?>