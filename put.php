<html>
<head> 
<link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body class="back" style="text-align: center;">
<div class="bi"></div>
<div class="co">
<?php
          
   $n=$_POST['place'];
   $m=$_POST['rating']; 
   $w=$_POST['ver'];
   $s=$_POST['ver2'];
   $r=$_POST['ver3']; 
   $x=$_POST['ver4'];
 //  $op1='';
  // $op2='';
  // $op3='';

   if ($_SERVER["REQUEST_METHOD"] == "POST") {

   
     
   }   
      include ("connection.php");  
      if($n!= NULL || $m!= NULL){
 
 
    $ss=mysql_query("insert into places values('$n','$m','$s','$w','$r')");

echo "Adding new place Successfull<br>";

if(!$ss){
echo mysql_error();
echo "<br>". "Try to resolve the problem";
} }

if($x==1){
$sm=mysql_query("select * from places");


echo"<br>"."PLACES IN DATABASE- <br>";
echo"<center><table ><tr>";



while($result=mysql_fetch_array($sm)){

$nam=$result['placename'];
$rr=$result['rate'];
/*$wi=$result['winter'];
$su=$result['summer'];
$ra=$result['rainy'];
if($wi==1){$op1='YES';}
else
$op1='NO';


if($su==1){$op2='YES';}
else
$op2='NO';


if($ra==1){$op3='YES';}
else
$op3='NO';
*/

echo "<td bgcolor=white>  $nam - $rr </td>";

}
echo"</tr></table></center>";

}
     
     
?>
</div>
<br>
    
   
</body>
</html>

