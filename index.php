<!DOCTYPE html>

<html>
<head>
<title>Local Page</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
 <body>
 <?php
 $con=mysqli_connect("localhost","root","","display_images");
$res=mysqli_query($con,"select * from table1");
while($row= mysqli_fetch_array($res))
{
 echo "<tr>";
echo "<td>";?> <img src="<?php echo $row["IMAGE"]; ?>" height="100" width="100"> <?php echo "</td>";
echo "<td>"; echo $row["NAME"]; echo "</td>";
 echo "</tr>";
}
echo "</table>";
?>
</body>
</html>
