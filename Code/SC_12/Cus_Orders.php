<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Orders</title>

    <link rel="stylesheet" href="Cus_order&detail.css" type="text/css">
</head>
<body>

<center>

    <div class="image">
        <img src="images/03.jpg">
    </div>

    <div class="title">
        <h1>Customer Orders</h1>
    </div>

    <div class="sentences">
        <p>Find the Orders</p>
        <p>(Staff Section)</p>
    </div>

    <br>
    <br/>
    <br>
    <br/>

    <form method="post">
        <h3>Enter Customer Name :</h3>
        <input type="text" placeholder="Search" name="search">
        <button type="submit" name="submit" id="submit" name="detail" class="search">Search</button>
        <a href="Staff_home.html">
            <button type="button" name="submit" class="previous">Previous</button>
        </a>
    </form>

    <?php

    include "Connection.php";

    $sql= "SELECT * FROM order";
    $result= mysqli_query($conn,$sql);

    ?>

    <div class="container">

        <table class="table">
            <?php

                if(isset($_POST['submit'])){

                    $search=$_POST['search'];

                    if($search==""){
                        print"<font color='#FF0000'>Eroor  : Please fill in the blank!!!";
                        echo"<br/>";
                    }

                    $sql="SELECT * FROM order Where order='$search'";
                    $result=mysqli_query($conn,$sql);

                    if($result){
                        if(mysqli_num_rows($result)>0){
                            echo'<thead class="name">
                            <tr>
                            <th>Food</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Branch</th>
                            <th>Customer Name</th>
                            <th>Email</th>
                            </tr>
                            </thead>
                            ';

                            while($row=mysqli_fetch_assoc($result)){
                                echo'<tbody>
                                
                                <tr>

                                <td> '.$row['food_name'].' </td>
                                <td> '.$row['date'].' </td>
                                <td> '.$row['time'].' </td>
                                <td> '.$row['branch'].' </td>
                                <td> '.$row['customer_name'].' </td>
                                <td> '.$row['email'].' </td>

                                </tr>
                                
                                </tbody>';
                                echo'<script type="text/javascript" alert("Order details showing successfully...") </script>';

                            }


                        }
                        else{
                            print"<font color='#ff0000'>Error   :  Data not found!!!";
                        }
                        
                    }
                    else{
                        print"<font color='#ff0000'>Error   :  Select the correct database!!!";
                    }
                }

            ?>
        </table>
    </div>

</center>

</body>

</html>