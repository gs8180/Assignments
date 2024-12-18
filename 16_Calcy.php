<html>
    <head>
        <title>Calculator</title>
    </head>
    <body>
       <form action="" method="post">
       First Number:
        <input type="number" name="n1"><br>
        Second Number:
        <input type="number" name="n2"><br><br>
        <input type="submit" name="add" value="add" >
        <input type="submit" name="mul" value="mul">
        <input type="submit" name="div" value="div">
        <input type="submit" name="sub" value="sub"><br>
        <h3>Answer</h3>
       </form>
    </body>
    <?php 
        $n1=$_POST['n1'];
        $n2=$_POST['n2'];

        if(isset($_POST['add']))
        {
            echo "Sum:-".$n1+$n2;
        }
        if(isset($_POST['mul']))
        {
            echo "Mul:-".$n1*$n2;
        }
        if(isset($_POST['div']))
        {
            echo "Div:-".$n1/$n2;
        }
        if(isset($_POST['sub']))
        {
            echo "Sub:-".$n1-$n2;
        }

    
    ?>
</html>