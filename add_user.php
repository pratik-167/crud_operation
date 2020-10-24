<?php
if(count($_POST)>0) {
	require_once("db.php");
	$sql = "INSERT INTO users (employeename, designation, mobilenumber, salary) VALUES ('" . $_POST["employeename"] . "','" . $_POST["designation"] . "','" . $_POST["mobilenumber"] . "','" . $_POST["salary"] . "')";
	mysqli_query($conn,$sql);
	$current_id = mysqli_insert_id($conn);
	if(!empty($current_id)) {
		$message = "New Employee Details are Added Successfully";
	}
}
?>
<html>
<head>
<title>Add New Employee</title>

</head>
<body style="background-color: yellow;font-family: sans-serif;"><br><br>
	<div style="text-align: center;"><button style="padding: 10px 15px;background-color: blue;border-radius: 5px;cursor: pointer;"><a href="index.php" style="text-decoration: none;color: white">Show Employees</a></button></div><br><br>
<form name="frmUser" method="post" action="">

<div class="message"><?php if(isset($message)) { echo $message; } ?></div>


<table border="50" cellpadding="10" cellspacing="0" width="600" align="center" >
<td colspan="5" align="center" style="font-size: 20px;background-color: blue;color: white;font-weight: bold">Add New Employee</td>
<tr>
<td><label>Employee Name</label></td>
<td><input type="text" name="employeename" class="txtField"></td>
</tr>
<tr>
<td><label>Designation</label></td>
<td><input type="text" name="designation" class="txtField"></td>
</tr>
<tr>
<td><label>Mobile Number</label></td>
<td><input type="number" name="mobilenumber" class="txtField"></td>
</tr>
<tr>
<td><label>Salary</label></td>
<td><input type="number" name="salary" class="txtField"></td>
</tr>
<tr align="center">
<td colspan="2"><input style="padding: 10px 25px;font-weight:bold;background-color: black;border-radius: 5px;cursor: pointer;color: white" type="submit" name="submit" value="Submit"></td>
</tr>
</table><br><br><br>

</div>
</form>
</body></html>