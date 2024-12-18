<html>
    <body>

    <form action="">
    Enter the number
    <input type="number" name="n" id="">
    <br>
    <input type="number" name="n1" id="">
    <br>
    <input type="number" name="n2" id="">
    <br>
    <input type="submit" >

</form>

<?php

$n=$_GET['n'];
$n1=$_GET['n1'];
$n3=$_GET['n2'];

echo " this is simple if else<br>";
if($n<$n3 && $n1<$n3)
  echo $n3;
else if($n<$n1 && $n3<$n1)
  echo $n1;
else
  echo $n;

echo "<br>this is nested if<br>";

if($n<$n1)
{
  if($n1<$n3)
    echo $n3;
  else 
    echo $n1;
}
else
  echo $n;


?>

</body>
</html>