<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Staff Add</title>

    <link href="adminfront.css" rel="stylesheet" type="text/css">
</head>

<body>

<center>

    <div class="image">
        <img src="images/03.jpg">
    </div>

    <div class="title">
        <h1>Admin View Customer Details</h1>
    </div>

    <div class="sentences">
        <p>Welcome Admin...</p>
    </div>
    <br>
    <br/>

    <form method="post">
        <h3>Enter Customer Username:</h3>
        <input type="text" placeholder="Search" name="search" class="search">
        <button type="submit" name="submit">Search</button>
        <br>
        <br/>
        <br>
        <br/>
        <br>
        <br/>
        <h3>All Customer Details:</h3>
        <button type="submit" name="btn_cus" id="btn_cus" class="btn_cus">Click Here</button>
        <a href="Admin_home.html">
            <button type="button" name="submit" class="previous">Previous</button>
        </a>
    </form>

    <?php

    include "Connection.php";


    ?>

    <div class="container">
        <table class="table">

            <?php

            if(isset($_POST['submit'])){

                $search=$_POST['search'];

                if($search==""){
                    print"<font color='#ff0000'>Error   :  Please fill in the blanks!!!";
                    echo"<br/>";
                }

                $sql = "SELECT * FROM register Where username='$search'";
                $result=mysqli_query($conn,$sql);
                
                if($result){
                    if(mysqli_num_rows($result)>0){
                        echo'<thead class="name">
                        <tr>
                        <th>Customer Name</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Address</th>
                        <th>Username</th>
                        <th>Password</th>
                        </tr>
                        </thead>
                        ';

                        while($row=mysqli_fetch_assoc($result)){
                            echo'<<tbody>;
                            <tr>

                            <td> '.$row['customer_name'].' </td>
                            <td> '.$row['email'].' </td>
                            <td> '.$row['contact'].' </td>
                            <td> '.$row['address'].' </td>
                            <td> '.$row['username'].' </td>
                            <td> '.$row['password'].' </td>
                            
                            </tr>
                            </tbody>
                            ';
                        }
                    }
                    else{
                        print"<font color='#ff0000'>Error   :  Data not found!!!";
                    }
                }
                else{
                    print"<font color='#ff0000'>Error   :  Select the Correct Database!!!";
                }
            }

            ?>
        </table>

        <table class="table">

            <?php

            if(isset($_POST['btn_cus'])){

                $sql = "SELECT * FROM register";
                $result = mysqli_query($conn,$sql);

                if($result){
                    if(mysqli_num_rows($result)>0){
                        echo'<thead class="name">
                        <tr>
                        <th>Customer Name</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Address</th>
                        <th>Username</th>
                        <th>Password</th>
                        </tr>
                        </thead>
                        ';

                        while($row=mysqli_fetch_assoc($result)){
                            echo'<tbody>;
                            <tr>

                            <td> '.$row['customer_name'].' </td>
                            <td> '.$row['email'].' </td>
                            <td> '.$row['contact'].' </td>
                            <td> '.$row['address'].' </td>
                            <td> '.$row['username'].' </td>
                            <td> '.$row['password'].' </td>
                            
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
                    print"<font color='#ff0000'>Error   :  Select the Correct Database!!!";
                }
            }


            ?>
        </table>
    </div>
</center>



</body>

</html>