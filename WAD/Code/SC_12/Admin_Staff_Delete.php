<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Staff Delete</title>

    <link href="adminfront.css" rel="stylesheet" type="text/css">
</head>

<body>

<center>

    <div class="image">
        <img src="images/03.jpg">
    </div>

    <div class="title">
        <h1>Admin Staff Member Delete</h1>
    </div>

    <div class="sentences">
        <p>Welcome Admin...</p>
    </div>

    <div class="container">
        <div class="type">
            <form method="post" action="Admin_Staff_Delete.php">
                <h3>Delete Staff Member:</h3>

                <h2>Enter Staff Member Username :</h2> 
                <input type="text" name="delete" id="delete">
                <br>
                <br/>
                <br>
                <br/>
                <button type="submit" name="submit" class="delete">Delete</button>
                <a href="Admin_home.html">
                    <button type="button" name="submit" class="previous">Previous</button>
                </a>
            </form>
        </div>

        <?php

        include "Connection.php";

        ?>
    </div>

    <?php

    if(isset($_POST['submit'])){

        $delete=$_POST['delete'];

        if($delete==""){
            print"<font color='#ff0000'>Error    :  Please fill in the blanks!!!";
            echo"<br/>";
        }
        else{

            $sql="DELETE FROM staff Where username='$delete'";
            $result=mysqli_query($conn,$sql);

            if($result){
                echo'<script type="text/javascript"> alert("Data Deleted Successfully...")</script>';
                echo"<font color='#009900'>Data Deleted Successfully...";
            }
            else{
                print"<font color='#ff0000'>Error   :  Some Problem Running when you are deleting data!!!";
            }
        }

    }

    ?>
</center>



</body>

</html>