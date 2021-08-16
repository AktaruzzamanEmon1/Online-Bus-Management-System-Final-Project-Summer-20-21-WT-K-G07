<?php 
	session_start();
	$id = isset($_SESSION['id']) ? $_SESSION['id'] : ""; 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Manager  List</title>
</head>
<body>

	<h1>Manager List</h1>

	<?php 
		define("filepath", "manager_list.json");
		if($userId === "sadman") {
			function read() {
				$resource = fopen(filepath, "r");
				$fz = filesize(filepath);
				$fr = "";
				if($fz > 0) {
					$fr = fread($resource, $fz);
				}
				fclose($resource);
				return $fr;
			}

			$users_list = read();
			$users_list_array = explode("\n", $users_list);
			echo "<table>";
			echo "<tr><th>Full Name</th>";
			echo "<th>User Name</th>";
			echo "<th>Password</th></tr>";
			echo "<th>Gmail </th></tr>";
			echo "<th>Phone</th></tr>";
			
			for($i = 0; $i < count($users_list_array) - 1; $i++) {
				$users_list_array_decode = json_decode($users_list_array[$i]);
				echo "<tr>";
				echo "<td>" . $users_list_array_decode->name . "</td>";
				echo "<td>" . $users_list_array_decode->uname . "</td>";
				echo "<td>" . $users_list_array_decode->pass . "</td>";
				echo "<td>" . $users_list_array_decode-> gmail. "</td>";
				echo "<td>" . $users_list_array_decode->phone. "</td>";
				echo "</tr>";
			}
			echo "</table>";
		}
		else {
			echo "<h3 style='color:red;'>Unauthorized Access</h3>";
		}

	?>
	<br>
	<p>Click here to <a href="home-page.php">Home</a></p>
	<p>Click here to <a href="logout.php">Logout</a></p>

</body>
</html>