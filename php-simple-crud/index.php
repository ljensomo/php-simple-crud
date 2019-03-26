<?php
	#include ang connection
	#dapat lagi nasa taas ang connection
	include("functions/connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP Simple Crud</title>
</head>
<body>
	<!-- 
			ACTION ay kung anong file pupuntahan
			ex. ang 'insert.php' ay nasa loob ng 'functions' folder

			REQUIRED sa loob ng input ay para hindi magproceed hanggang wala itong laman
	-->
	<form action="functions/insert.php" method="POST">
		<input type="text" name="firstname" placeholder="Enter Firstname" required><br>
		<input type="text" name="lastname" placeholder="Enter Lastname" required><br>
		<!-- 
			Kailangan lahat ng <input/> tag ay nasa loob ng <form></form> tag
			Kailangan 'submit' ang type ng button para mag proceed
		-->
		<button type="submit">Save</button>
	</form>
	<br><br>
	<table border=1>
		<tr>
			<th>id</th>
			<th>column1</th>
			<th>column2</th>
			<th>actions</th>
		</tr>
		<?php
			$query = "SELECT * FROM tbl_sample";
			$result = $dsn->prepare($query);
			#walang laman ang execute kasi wala naman parameters
			$result->execute();
			while($rows = $result->fetch(PDO::FETCH_ASSOC)){
				?>
				<tr>
					<td><?php echo $rows['id']; ?></td>
					<td><?php echo $rows['column1']; ?></td>
					<td><?php echo $rows['column2']; ?></td>
					<td><a href="functions/delete.php?id=<?php echo $rows['id']; ?>">Delete</a></td>
				</tr>
				<?php
			}
		?>
	</table>
</body>
</html>