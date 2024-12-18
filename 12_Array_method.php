<pre><?php 
  #  sort()
   # r,a,k,ar,kr

   $arr=array("ram","raj","gopal","akash","ganesh","nivruti","dipak","abhi","gaurav","santosh","dhanu");

   echo "<center><h3>Sort Functioin(Ascending Order)</h3></center>";

   sort($arr);
   print_r($arr);
   for($i=0; $i<=count($arr);$i++)
   {
    echo $arr[$i].", ";
   }

   echo "<center><h3>rSort Functioin(Desending Order)</h3></center>";

   $arr=array("ram","raj","gopal","akash","ganesh","nivruti","dipak","abhi","gaurav","santosh","dhanu");

   rsort($arr);
   print_r($arr);
   for($i=0; $i<=count($arr);$i++)
   {
    echo $arr[$i].", ";
   }
  
   echo "<center><h3>aSort Functioin(Sort Associative Array value in Ascending Order)</h3></center>";

   $ass=array("abhi"=>23,"button"=>20,"cagle"=>25,"demote"=>30);
   asort($ass);
   print_r($ass);

echo "<center><h3>kSort Functioin(Sort Associative Array key in Ascending Order)</h3></center>";
   ksort($ass);
   print_r($ass);

   #using foreach loop

   foreach($ass as $key=>$value)
   {
    echo "key ".$key." value ".$value."<br>";
   }

   echo "<center><h3>arSort Functioin(Sort Associative Array value in Descending Order)</h3></center>";

   arsort($ass);
   print_r($ass);

   echo "<center><h3>krSort Functioin(Sort Associative Array key in Descending Order)</h3></center>";
   krsort($ass);
   print_r($ass);
?>