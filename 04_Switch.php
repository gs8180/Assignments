<html>
<form action="" method="post">
    <p>Enter choice <br>
        1. print table 2 <br>
        2. print table 3 <br>
    </p>
    <input type="number" name="choice"><br>

    <button type="submit">print</button>
</form>
</html>
<?php 
    $choice=$_POST['choice'];
    echo "your choice is $choice";

    switch($choice)
    {
        Case 1:
            $num=1;
            while($num<=10)
            {
                echo "<br>".(2*$num);
                $num++;
            }
        Case 2:
            $num=1;
            while($num<=10)
            {
                echo "<br>".($num*3);
                $num++;
            }
        Case 3:
        default:
        echo "<br> Select choice Between 1 To 2.";
    }
?>
