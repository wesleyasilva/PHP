<?php
include("conn.php");

if(!function_exists("select")){
	function select(){
		$conn = connect();
		$sql = "SELECT * FROM incident";
		$rs = mysqli_query($conn, $sql);
		while($row = mysqli_fetch_assoc($rs)){
			echo "<tr>
    			<td>".$row['id']."</td>
				<td>".$row['day']."</td>
				<td>".$row['hour']."</td>
				<td>".$row['full_name']."</td>
				<td>".$row['department']."</td>
				<td>".$row['supervisor']."</td>
				<td>".$row['title']."</td>
				<td>".$row['description']."</td>
  			</tr>";
		}
		mysqli_close($conn);
	}
}
?>
