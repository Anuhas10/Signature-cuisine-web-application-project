<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin View Orders</title>

    <link href="adminfront.css" rel="stylesheet" type="text/css">
</head>

<body>

<center>

    <div class="image">
        <img src="images/03.jpg">
    </div>

    <div class="title">
        <h1>Admin View Orders</h1>
    </div>

    <div class="sentences">
        <p>Welcome Admin...</p>
    </div>
    <br>
    <br/>
    <br>
    <br/>

    <form method="post">
        <h3>Show all Orders:</h3>
        <button type="submit" name="submit" class="submit">Orders</button>

        <a href="Admin_home.html">
            <button type="button" name="previous" class="previous">Previous</button>
        </a>
    </form>

    <?php
    include "Connection.php";

    ?>

    <div class="container">
        <table class="table">

        <?php

            if(isset($_POST['submit'])){

                $search=$_POST['submit'];

                $sql = "SELECT * FROM orders";
                $result = mysqli_query($conn,$sql);

                if($result){
                    if(mysqli_num_rows($result)>0){
                        echo'<thead class="name">
                        <tr>
                        <th>Food Name</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Branch</th>
                        <th>Customer Name</th>
                        <th>Email</th>
                        </tr>
                        </thead>
                        ';

                        while($row=mysqli_fetch_assoc($result)){
                            echo'<tbody>;
                            
                            <tr>

                            <td> '.$row['food_name'].' </td>
                            <td> '.$row['date'].' </td>
                            <td> '.$row['time'].' </td>
                            <td> '.$row['branch'].' </td>
                            <td> '.$row['customer_name'].' </td>
                            <td> '.$row['email'].' </td>

                            </tr>
                            </tbody>
                            ';
                        }
                    }
                    else{
                        print"<font color='#ff0000'>Error   :  Data not Found!!!";
                    }
                }
                else{
                    print"<font color='#ff0000'>Error   :  Select the Coorect Database!!!";
                }
            }

        ?>
        </table>
    </div>
</center>



</body>

</html>