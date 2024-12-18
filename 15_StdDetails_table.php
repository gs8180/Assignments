<html>
    <head>
        <title>Steudent Details</title>
    </head>
        <body>
            <form action="" method="post">
            <h2>Student Details in Tabale</h2>
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
        <input type="checkbox" name="hobbi[]" value="playing Games">Playing Games <br>
        <input type="checkbox" name="hobbi[]" value="Reading">Reading <br>
        <input type="checkbox" name="hobbi[]" value="Coding">Coding <br><br>
        <input type="submit" name="submit" value="Submit"><br><br>
            </form>
        </body>

        <?php 
            $name=$_POST['name'];
            $age=$_POST['age'];
            $gender=$_POST['gender'];
            $address=$_POST['address'];

            if(isset($_POST['course']))
            {
                $course=($_POST['course']);
            }
            else
            {
                $course="N/A";
            }
              
        if(isset($_POST['hobbi']))
        {
            $hobbie=implode(",",$_POST['hobbi']);
        }
        else{
            $hobbie="none";
        }
        if(isset($_POST['submit']))
        {
            ?>
                <table border="2" border-collapse: collapse;>
                    <tr>
                        <td>Name:<td><?php echo $name; ?></td></td>
                    </tr>
                    <tr>
                        <td>Age:<td><?php echo $age; ?></td></td>
                    </tr>
                    <tr>
                        <td>Gender: <td><?php echo $gender ?></td></td>
                    </tr>
                    <tr>
                        <td>Address: <td> <?php echo $address ?></td></td>
                    </tr>
                    <tr>
                        <td>course: <td> <?php echo $course ?></td></td>
                    </tr>
                    <tr>
                        <td>Hobbies: <td> <?php echo $hobbie ?></td></td>
                    </tr>
                </table>
                <?php
        }
        ?>
           
        
       
       
         