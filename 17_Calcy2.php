
<h1>Answer</h1><br>
<?php
        $n1=$_POST['n1'];
        $n2=$_POST['n2'];

        
        if(isset($_POST['add']))
        {
            echo"Sum=". $n1+$n2; 
        }
        if(isset($_POST['sub']))
        {
           echo "Sub=".$n1-$n2;
        }
        if(isset($_POST['mul']))
        {
            echo "Mul=".$n1*$n2;
        }
        if(isset($_POST['div']))
        {
            echo "Div=".$n1/$n2;
        }

    ?>