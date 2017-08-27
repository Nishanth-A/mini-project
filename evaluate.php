<html>
<head><link rel="stylesheet" type="text/css" href="stylesheet.css"></head>
<body class="back" style="text-align: center;">
<?php
          
  $n=$_POST['name'];
   $a=$_POST['age']; 
   $adv=$_POST['adventure'];
   $mon=$_POST['month']; 
   $fn=$_POST['fun'];
$flag=0;
   if ($_SERVER["REQUEST_METHOD"] == "POST") {

   
     
   }   
      include ("connection.php"); 
      
      $agefac=0;
  if($a<=18)
  $agefac=5;
  else if ($a > 18 && $a < 30) {
    $agefac = 4;
} else if ($a >= 30 && $a < 50) {
    $agefac = 3;
} else if ($a >= 50) {
    $agefac = 2;
}



$domadv=1;
$domfn=1;
$age_influence=0.125;

echo "<h1>"."Thank you $n!"."</h1>"."<br>";
        //predicted fuzzy score
        $ifs=$agefac+$fn+$adv;  // crisp value

//echo"<br>"."$ifs  a  $agefac b $adv ala $fn"."<br>";
        $defuzzyfactor=4;

        $im=mysql_query("select* from places") or die(mysql_error());
        while($rambo=mysql_fetch_array($im)){  // predicted place can be found 
        $moh=$rambo['rate'];
        if($ifs==$moh){
          $age_influence=0.2;

          $defuzzyfactor=5;
        
        }

        }

        if($agefac==5 || $agefac==4)  // for people who are able to have more fun and are more energetic
        {

        if($adv>$fn) // here the adventure factor dominates over the fun factor
        {
          $domadv=0.2;
          $domfn=0.125;
        }
        
          if($fn>$adv)  // here the fun factor dominates over the adventure factor
          {
           $domfn=0.2;
           $domadv=0.125;
         }

        
          if($adv==$fn) //here both the factors are equally dominating
         { 
          $domadv=0.2;
          $domfn=0.2;
         }
       }
else
       if($agefac==3 || $agefac==2)  // for people who are NOT that much able to have more fun and are more energetic
        {

        if($adv>$fn) // here the Religious factor dominates over the NOn Adventerous (boring sober pale straight forward) factor
        {
          $domadv=0.125;
          $domfn=0.2;
        }
         
          if($fn>$adv)  // here Non Adventurous (Boring sober) factor dominates over REligious Factor          {
          { $domfn=0.125;
           $domadv=0.2;
         }

         
          if($adv==$fn) //here both the factors are equally dominating
         { 
          $domadv=0.2;
          $domfn=0.2;
         }
       }

$iage=$agefac* $age_influence;
$iadv=$adv* $domadv;
$ifn=$fn* $domfn;

$pfn=$iage+$iadv+$ifn;

//fuzzy score
$fscore=$pfn/3;


//echo "<br>"."$ifs"."<br>";

//defuzzified
$df=$pfn*$defuzzyfactor;
$fs=round($df);

   echo"<br>"."";


  //here***
   echo "<h1>"."Your fuzzy score = $fscore month is $mon"."</h1>"."<br>";
   echo"<br>"."The age_factor is- $agefac the corresponding Degree of Association is $iage"."<br>";
   echo"<br>"."The adventure_factor is- $adv the corresponding Degree of Association is $iadv"."<br>";
   echo"<br>"."The fun_factor is- $fn the corresponding Degree of Association is $ifn"."<br>";
   echo"<br>"."The Defuzzy value is= $fs"."<br>";

        

 if($mon==1)  // winter can go
        {
                  $em= mysql_query("select * from places where winter=1 ORDER BY rate DESC") or die(mysql_error());   
                  while($result = mysql_fetch_array($em)){ 
               $p=$result['placename'];
               $r=$result['rate'];
               if($r==$fs)
               {echo"$p <br>";
               $flag=1;

               }}
               // 1 means exact place found  0 means exact place not found
                  echo"<br>"."$flag";
                  
                  if($flag==0){
                      
                      echo"<br>"."exact place not found but near by rated places are-"."<br>";
                      $no=mysql_query("select * from places where winter=1 and rate<'$fs' ORDER BY rate") or die(mysql_error());
                      while($resultlow=mysql_fetch_array($no))
                      { $rlow=$resultlow['rate'];}
                    echo"$rlow"."<br>";
                     $low=mysql_query("select * from places where winter=1 and rate='$rlow'") or die(mysql_error());
                    while($finallow=mysql_fetch_array($low)){
                      $lowp=$finallow['placename'];
                    echo"$lowp"."!<br>";}
                  
                    $no2=mysql_query("select * from places where winter=1 and rate>'$fs' ORDER BY rate DESC") or die(mysql_error());
                      while($resulthigh=mysql_fetch_array($no2))
                      { $rhigh=$resulthigh['rate'];}
                    echo"<br>"."$rhigh"."<br>";
                     $high=mysql_query("select * from places where winter=1 and rate='$rhigh'") or die(mysql_error());
                    while($finalhigh=mysql_fetch_array($high)){
                      $lowp=$finalhigh['placename'];
                    echo"$lowp "."!<br>";}
                    
                    
                  }           }


                  
                
                  else if($mon==2) //  summer can go
        {
                  $em= mysql_query("select * from places where summer=1 ORDER BY rate DESC") or die(mysql_error());   
                  while($result = mysql_fetch_array($em)){ 
               $p=$result['placename'];
               $r=$result['rate'];
               if($r==$fs)
               {echo"$p";
               $flag=1;
               }}
                  echo"<br>"."$flag";
                  
                  if($flag==0){
                      
                      echo"<br>"."exact place not found but near by rated places are-"."<br>";
                      $no=mysql_query("select * from places where summer=1 and rate<'$fs' ORDER BY rate") or die(mysql_error());
                      while($resultlow=mysql_fetch_array($no))
                      { $rlow=$resultlow['rate'];}
                    echo"$rlow"."<br>";
                     $low=mysql_query("select * from places where summer=1 and rate='$rlow'") or die(mysql_error());
                    while($finallow=mysql_fetch_array($low)){
                      $lowp=$finallow['placename'];
                    echo"$lowp"."!<br>";}
                  
                    $no2=mysql_query("select * from places where summer=1 and rate>'$fs' ORDER BY rate DESC") or die(mysql_error());
                      while($resulthigh=mysql_fetch_array($no2))
                      { $rhigh=$resulthigh['rate'];}
                    echo"<br>"."$rhigh"."<br>";
                     $high=mysql_query("select * from places where summer=1 and rate='$rhigh'") or die(mysql_error());
                    while($finalhigh=mysql_fetch_array($high)){
                      $lowp=$finalhigh['placename'];
                    echo"$lowp"."!<br>";}
                    
                    
                  }           }
                  else   if($mon==3) // rainy can go
        {
                  $em= mysql_query("select * from places where rainy=1 ORDER BY rate DESC") or die(mysql_error());   
                  while($result = mysql_fetch_array($em)){ 
               $p=$result['placename'];
               $r=$result['rate'];
               if($r==$fs)
               {echo"$p";
               $flag=1;
               }}
                  echo"<br>"."$flag";
                  
                  if($flag==0){
                      
                      echo"<br>"."exact place not found but near by rated places are-"."<br>";
                      $no=mysql_query("select * from places where rainy=1 and rate<'$fs' ORDER BY rate") or die(mysql_error());
                      while($resultlow=mysql_fetch_array($no))
                      { $rlow=$resultlow['rate'];}
                    echo"$rlow"."<br>";
                     $low=mysql_query("select * from places where rainy=1 and rate='$rlow'") or die(mysql_error());
                    while($finallow=mysql_fetch_array($low)){
                      $lowp=$finallow['placename'];
                    echo"$lowp"."!<br>";}
                  
                    $no2=mysql_query("select * from places where rainy=1 and rate>'$fs' ORDER BY rate DESC") or die(mysql_error());
                      while($resulthigh=mysql_fetch_array($no2))
                      { $rhigh=$resulthigh['rate'];}
                    echo"<br>"."$rhigh"."<br>";
                     $high=mysql_query("select * from places where rainy=1 and rate='$rhigh'") or die(mysql_error());
                    while($finalhigh=mysql_fetch_array($high)){
                      $lowp=$finalhigh['placename'];
                    echo"$lowp"."!<br>";}
                    
                    
                  }           }   
        
        
        ?>
    
</body>
</html>