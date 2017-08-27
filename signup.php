<html>
<head></head>
<body bgcolor="black"  alink="green" link="red" vlink="green" style="text-align: center;" ><font color="white">
<?php
          
   $n=$_POST['user'];
   $m=$_POST['pass']; 
     

   if ($_SERVER["REQUEST_METHOD"] == "POST") {

   
     
   }   
      include ("connection.php");  



  $ss=mysql_query("insert into login values('$n','$m')");

//echo "Adding new place Successfull<br>";

if(!$ss){
echo mysql_error();
echo "<br>". "<h1>Click below and go back to resolve the problem</h1>";
echo"<br><a href='sign.php'>HERE!!</a>";
} 

 else{

echo"<br><h1>SUCCESS FULL - NEW USER ADDED</h1>";
echo"<br><a href='index.php'>GO BACK to MAIN PAGE </a>";
    }
?>
<br>
    </font>
   
</body>
</html>