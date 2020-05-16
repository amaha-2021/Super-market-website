<?php
include "includes/common.php";
include "includes/head.php";
$result=$_GET['id'];
echo "<h3><center>For more details of ".$result." scan here:</center></h3>"
?>
<!DOCTYPE html>
<html>
<head>
	<title>image</title>
</head>
<body><center><img src="img\<?php echo $result; ?>.jpg" style="width:500px;height:400px;" ></center>												
</body>
</html> 