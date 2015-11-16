<?php

	require('./vars.php');

	class UsersConnection
	{
		this->conn = null;

		function __construct()
		{
			this->$conn = new mysqli($host, $login, $pass, $dbname);
		}

		function getUserById($id)
		{
			if ($conn->connect_error)
			{
			    die("Connection failed: " . $conn->connect_error);
			} 

			$sql = "SELECT * FROM $dbname.users WHERE user_id = $id";
			$result = $conn->query($sql);

			if ($result->num_rows > 0)
			{
				while($row = $result->fetch_assoc()) {
			        echo "id: " . $row["user_id"] . " - Username: " . $row["user_name"] . "<br>";
			    }
			}
			else 
			{
			    echo "0 results";
			}
		}

		function __destruct()
		{
			this->conn->close();
		}
	}
?>