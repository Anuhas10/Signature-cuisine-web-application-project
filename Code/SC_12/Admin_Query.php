<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Query Details</title>

    <link href="adminfront.css" rel="stylesheet" type="text/css">
</head>

<body>

<center>

    <div class="image">
        <img src="images/03.jpg">
    </div>

    <div class="title">
        <h1>Admin Customer's Query Expland</h1>
    </div>

    <div class="sentences">
        <p>Welcome Admin...</p>
    </div>

    <div class="container">
        <form method="post">

            <h3>All Customer Queries</h3>
            <button type="submit" name="submit" class="query">Query</button>
            <a href="Admin_home.html">
                <button type="button" name="submit" class="previous">Previous</button>
            </a>
        </form>

        <?php
        
        include "Connection.php";

        ?>

        <table class="table">

            <?php

                if(isset($_POST['submit'])){

                    $sql="SELECT * FROM query";
                    $result=mysqli_query($conn,$sql);

                    if($result){
                        if(mysqli_num_rows($result)>0){
                            echo'<thead class="name">
                            <tr>
                            <th>Customer Name</th>
                            <th>Customer Email</th>
                            <th>Customer Contact</th>
                            <th>Customer Branch</th>
                            <th>Customer Message</th>
                            </tr>
                            </thead>
                            ';

                            while($row=mysqli_fetch_assoc($result)){
                                echo'<tbody>;
                                <tr>

                                <td> '.$row['customer_name'].' </td>
                                <td> '.$row['customer_email'].' </td>
                                <td> '.$row['customer_contact'].' </td>
                                <td> '.$row['customer_branch'].' </td>
                                <td> '.$row['customer_message'].' </td>

                                </tr>
                                </tbody>
                                ';
                            }
                        }
                        else{
                            print"<font color='#ff0000'>Error    :  Data not found!!!";
                        }
                    }
                    else{
                        print"<font color='#ff0000'>Error    :  Select the Correct Database!!!";
                    }
                }



            ?>
        </table>
    </div>
</center>


</body>

</html>