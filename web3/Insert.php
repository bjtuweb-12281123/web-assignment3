
<html>
<body>

<form action="Insert.php" method="post" >
Name: <input type="text" name="name" />
Password: <input type="text" name="password" />
<input type="submit" value="ע��"/>
</form>
<form action="Dengluchenggong.php" method="post" >
Name: <input type="text" name="name" />
Password: <input type="text" name="password" />
<input type="submit" value="��½"/>
</form>

</body>
</html>



<?php

$con = mysql_connect("localhost:3306","root","");
mysql_select_db("xianghanlilian", $con);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }



$sql="INSERT INTO namepassword(name,password)
VALUES
('$_POST[name]','$_POST[password]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

mysql_close($con)

?>

