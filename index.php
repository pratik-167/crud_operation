<?php
require_once("db.php");
$sql = "SELECT * FROM users ORDER BY userId DESC";
$result = mysqli_query($conn,$sql);
?>
<html>
<head>
<title>CRUD Operation</title>

</head>
<body style="background-color: yellow;font-family: sans-serif;">
	<h2 style="text-align: center;">CRUD Operation using PHP MySQL</h2><br>
<form name="frmUser" method="post" action="">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>

<table border="50" cellpadding="10" cellspacing="1" width="900" align="center">
<tr style="color: white;font-weight: bold;background-color: blue">
<td>Employee Name</td>
<td>Designation</td>
<td>Mobile Number</td>
<td>Salary</td>
<td>Actions</td>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><?php echo $row["employeename"]; ?></td>
<td><?php echo $row["designation"]; ?></td>
<td><?php echo $row["mobilenumber"]; ?></td>
<td><?php echo $row["salary"]; ?></td>
<td><a style="text-decoration: none;padding: 10px 15px;background-color: green;color: white;border-radius: 5px" href="edit_user.php?userId=<?php echo $row["userId"]; ?>">Edit</a> &nbsp; <a style="text-decoration: none;padding: 10px 15px;background-color: red;color: white;border-radius: 5px" href="delete_user.php?userId=<?php echo $row["userId"]; ?>">Delete</a></td>
</tr>
<?php
$i++;
}
?>
</table><br><br><br>
<div style="text-align: center;"><button style="padding: 10px 15px;background-color: blue;border-radius: 5px;cursor: pointer;"><a href="add_user.php" style="text-decoration: none;color: white">Add New Employee</a></button></div>
</form>
</div>
</body></html>