<?php
	$user = 'root';
	$password = 'root';
	$db = 'DemoApp';
	$host = 'localhost:8889';
	$conn = new mysqli(
	   $host,
	   $user,
	   $password,
	   $db
	);

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT item FROM todo_list";
	$result = $conn->query($sql);
?>
<html>
	<body>
		<h3>List of Things to Do</h3>
		<ul>
			<?php 
				while($row = $result->fetch_assoc()) {
					echo "<li>" . $row["item"] . "</li>";
				}
			?>
		</ul>
	</body>
</html>