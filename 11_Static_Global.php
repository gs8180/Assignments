<?php 
    $str1="This Is Gloable Variable";
    function Num()
    {
        $str2="This Is Static Variable <br>";
        echo $str2;
    }
    Num();
    echo $str1;
?>