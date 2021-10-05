<!DOCTYPE html>
<html>
<body>

<?php  
date_default_timezone_set("Asia/Jakarta") . '<br>';
echo date("d-m-Y H:i");
for($i=0;$i<=5;$i++){  
for($j=5-$i;$j>=1;$j--){  
echo "* ";  
}  
echo "<br>";  
}  
?>  
</body>
</html>