<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Customer Details</title>

    <link rel="stylesheet" href="Cus_order&detail.css" type="text/css">
</head>
<body>

<center>

    <div class="image">
        <img src="images/03.jpg">
    </div>

    <div class="title">
        <h3>View Customer Details</h3>
    </div>

    <div class="sentences">
        <p>Find Customer Personal Details</p>
        <p>(Staff Section)</p>
    </div>

    <br>
    <br/>
    <br>
    <br/>

    <form method="post">
        <h3>Enter Customer Contact Number :</h3>
        <input type="text" placeholder="Search" name="search">
        <button type="submit" name="submit" id="submit" name="detail" class="search">Search</button>
        <a href="Staff_home.html">
            <button type="button" name="submit" class="previous">Previous</button>
        </a>
    </form>

    <?php
    include "Connection.php";
    $sql= "SELECT * FROM register";
    $result= mysqli_query($conn,$sql);

    ?>

    <div class="container">
        <table class="table">

                <?php

                if(isset($_POST['submit'])){

                    $search=$_POST['search'];

                    if($search==""){
                        print"<font color='#ff0000'>Error  : Please fill in the blanks!!!";
                        echo"</br>";
                    }
                    else{
                        
                        $sql="SELECT * FROM register Where contact='$search'";
                        $result=mysqli_query($conn,$sql);

                        if($result){

                            if(mysqli_num_rows($result)>0){
                                echo'<thead class="name"
                                <tr>
                                <th>Customer Name</th>
                                <th>Email</th>
                                <th>Contact</th>
                                <th>Address</th>
                                <th>Username</th>
                                <th>Password</th>
                                </tr>
                                </thead>';

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
                                print"<font color'#ff0000'>Error   :  Data not found!!!";
                            }
                        }
                        else{
                            print"<font color'#ff0000'>Error   :  Select the correct Database!!!";
                        }
                    }
                }

                ?>
        </table>
    </div>
</center>

</body>

</html>