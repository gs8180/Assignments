<html>
    <head>
        <title>Steudent Details</title>
    </head>
        <body>
            <form action="" method="POST">
            <h2>Student Details in Tabale</h2>
            id:
            <input type="number" name="id">
        Name:
        <input type="text" name="name" placeholder="Enter Name"><br>
        Age:
        <input type="text" name="age" placeholder="Enter Age"><br>

        Gender:
        <input type="radio" name="gender" value="male">Male 
        <input type="radio" name="gender" value="female">Female <br>
        Address: <br>
        <textarea name="address" id=""></textarea><br>
        Course:
        <select name="course">
            <option value="MCA">MCA</option>
            <option value="BCA">BCA</option>
            <option value="BCOM">BCOM</option>
            <option value="MBA">MBA</option>
        </select><br>
        Hobbies: <br>
        <input type="checkbox" name="hobbies[]" value="playing Games">Playing Games <br>
        <input type="checkbox" name="hobbies[]" value="Reading">Reading <br>
        <input type="checkbox" name="hobbies[]" value="Coding">Coding <br><br>
        <input type="submit" name="submit" value="Submit"><br><br>
            </form>
        </body>
        <?php 
        include("connection.php");
            $id=$_POST['id'];
            if(isset($_POST['submit']))
            {
                $name=$_POST['name'];
                $age=$_POST['age'];
                $gender=$_POST['gender'];
                $address=$_POST['address'];
                
        if (isset($_POST['course'])) 
        {
            $course = htmlspecialchars($_POST['course']);
        }
         else
          {
            $course = 'N/A';
        }
        
        if(isset($_POST['hobbies']))
        {
            $hobbies=implode(",",$_POST['hobbies']);
        }
        else
        {
            $hobbies="none";
        }

                mysqli_select_db($conn,'stu') or die ("Couldn't connct database");

                $result=mysqli_query($conn,"insert into student values('$id','$name','$age','$gender','$address','$course','$hobbies')");

                if($result >0)
                {
                    echo "record inserted seccessfully";
                }
                else
                {
                    echo " record not inserted";
                }
                die();
            }
        ?>
        
        
