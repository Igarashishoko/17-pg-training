<?php
// オープニング
print 'Hello, world!<br>' ;
print 'ようこそPHPパークへ';

$math = 45;
$science = 35;
if ($math >= 30 && $science >= 30){

   if(($math + $science) >= 80){
      print '合格おめでとう！';
    }
}
 ?>


 <?php

print "<br>";

 for ($tate = 1; $tate <= 9; $tate++) {
 	for ($yoko = 1; $yoko <= 9; $yoko++) {
    $ans=$tate * $yoko;

 		print "${ans}";

  }
  print "<br>";
 }





 print "<br>";

 for ($i = 1; $i <= 50; $i++) {

  if($i % 5 == 0 && $i % 3 == 0 )

  {
   print 'FizzBuzz,';

  } elseif($i % 3 == 0 ) {
      print 'Fizz,';


    }  elseif($i % 5 == 0 ) {
          print 'Buzz,';



    }  else { print "${i} ,"; }






  }
