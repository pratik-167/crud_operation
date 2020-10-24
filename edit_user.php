<?php
require_once("db.php");
if(count($_POST)>0) {
	$sql = "UPDATE users set employeename='" . $_POST["employeename"] . "', designation='" . $_POST["designation"] . "', mobilenumber='" . $_POST["mobilenumber"] . "', salary='" . $_POST["salary"] . "' WHERE userId='" . $_POST["userId"] . "'";
	mysqli_query($conn,$sql);
	$message = "Employee Details Successfully Updated.";
}
$select_query = "SELECT * FROM users WHERE userId='" . $_GET["userId"] . "'";
$result = mysqli_query($conn,$select_query);
$row = mysqli_fetch_array($result);
?>
<html>
<head>
<title>Edit Employee Details</title>

</head>
<body style="background-color: yellow;font-family: sans-serif;"><br><br>
	<div style="text-align: center;"><button style="padding: 10px 15px;background-color: blue;border-radius: 5px;cursor: pointer;"><a href="index.php" style="text-decoration: none;color: white">Show Employees</a></button></div><br><br>
<form name="frmUser" method="post" action="">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>

<table border="50" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<td colspan="5" align="center" style="font-size: 20px;background-color: blue;color: white;font-weight: bold">Edit Employee Details</td>
<tr>
<td><label>Employee Name</label></td>
<td><input type="hidden" name="userId" class="txtField" value="<?php echo $row['userId']; ?>"><input type="text" name="employeename" class="txtField" value="<?php echo $row['employeename']; ?>"></td>
</tr>
<tr>
<td><label>Designation</label></td>
<td><input type="text" name="designation" class="txtField" value="<?php echo $row['designation']; ?>"></td>
</tr>
<td><label>Mobile Number</label></td>
<td><input type="number" name="mobilenumber" class="txtField" value="<?php echo $row['mobilenumber']; ?>"></td>
</tr>
<td><label>Salary</label></td>
<td><input type="number" name="salary" class="txtField" value="<?php echo $row['salary']; ?>"></td>
</tr>
<tr align="center">
<td colspan="2"><input style="padding: 10px 25px;font-weight:bold;background-color: black;border-radius: 5px;cursor: pointer;color: white" type="submit" name="submit" value="Update"></td>
</tr>
</table><br><br>

</div>
</form>
</body></html>