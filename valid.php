<html>
<head></head>
<body bgcolor="black"  alink="#54A250" link="#040404" vlink="#F40633" style="text-align: center;" ><font color="white">
<?php
          
   $n=$_POST['user'];
   $m=$_POST['pass']; 
   $flag=0;
    

   if ($_SERVER["REQUEST_METHOD"] == "POST") {

   
     
   }   
      include ("connection.php");  
 
 
    $s=mysql_query("select * from login");
    while($result=mysql_fetch_array($s)){
$u=$result['username'];
$p=$result['password'];
if($n==$u && $m==$p){
$flag=1;
 }
}


if($flag==0){echo"<font><br><h1>"."' $n '"."-you are unauthorized user"."</h1></font>";

echo "<br>"."Click on below link to go back and enter correct credentials!!";
echo "<br><br>";
echo "<a href='index.php'>HERE!</a>";




}

else if($flag==1){echo"<br><h1>"."Authorized User"."</h1>";
echo"<br>"."WELCOME<br><br>";
echo"YOU CAN ENTER NEW PLACE DETAILS JUST CLICK BELOW-";
echo"<br><br><a href='add.php'>HERE..</a>";





}

if(!$s){
echo mysql_error();
echo "Try to resolve the problem";
} 
     
     
?>
<br>
    
   </font>
</body>
</html>