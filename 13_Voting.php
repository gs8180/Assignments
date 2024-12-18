<!DOCTYPE html>
<head>
    
    <title>voting</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="name" placeholder="Enter Name"><br><br>
        <input type="number" name="age" placeholder="Enter Age"><br><br>

        <button type="submit">Submit</button><br><br>
    </form>
</body>
<?php 
    $name=$_POST['name'];
    $age=$_POST['age'];

    if($age>=18 && $age<=100)
    {
        echo "$name You Eligible For Voting";
    }
    else
    {
        echo "$name You Are Not Eligible For Voting";
    }
?>
</html>