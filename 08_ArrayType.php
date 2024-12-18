<pre>
<?php 
    echo "<center><h3>Numeric Array <h3></center><br>";
    $arr=array("ram","shyam","sonu","raj");
    foreach($arr as $key=>$value)
    {
        echo "key ".$key."  value ".$value."<br>";
    }

    echo "<center><h3>Associative Array <h3></center><br>";
    $age =array("Ganesh=>23","Rutuja=>21","Dipak=>22","Ram=>19");
    
    foreach($age as $key=>$value)
    {
        echo "key ".$key."  value ".$value."<br>";
    }

    echo "<center><h3>Multidimentional Array <h3></center><br>";

    $mul=array("fruit"=>array("Apple","Mango","Banana"),"age"=>array("yogesh=>22","Nivruti=>21","Vishal=>19"));
    print_r($mul);

    echo "<center><h3>Mix Array <h3></center><br>";

    $mix=array("Mrgs=>23","Ram=>22",4=>"Raghav","Manoj=>85",25=>"Satish");
    print_r($mix);

    foreach($mix as $key=>$value)
    {
        echo "key ".$key."  value ".$value."<br>";
    }

?>