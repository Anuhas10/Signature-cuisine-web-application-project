<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Order View</title>

    <link href="cus_order&view.css" rel="stylesheet" type="text/css">
</head>

<body>

<center>

    <div class="image">
        <img src="images/03.jpg">
    </div>

    <div class="title">
        <h1>Customer Order View</h1>
    </div>

    <div class="sentences">
        <p>Find Your Order In Here</p>
        <p>(Customer Section)</p>
    </div>
    <br>
    <br/>
    <br>
    <br/>
    <br>
    <br/>

    <form method="post">

        <h3>Enter Your Email :</h3>
        <input type="text" placeholder="Search" name="search">
        <button type="button" name="submit" id="submit" name="detail" class="search">Search</button>

        <br>
        </br>
        <br>
        </br>

        <a href="Customer_home.html">
            <button type="button" name="submit" class="previous">Previous</button>
        </a>
    </form>

    <?php

    include "Connection.php";
    $sql = "SELECT * FROM order";
    $result = mysqli_query($conn,$sql);

    ?>

    <div class="container">
        <table class="table">

            <?php

            if(isset($_POST['submit'])){
                
                $search=$_POST['search'];

                if($search==""){
                    print"<font color='#ff0000'>Error    :  Please fill in the blanks!!!";
                    echo"<br/>";
                }

                $sql = "SELECT * FROM order Where email='$search'";
                $result=mysqli_query($conn,$sql);

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

                            <td> '.$row['foodname'].' </td>
                            <td> '.$row['date'].' </td>
                            <td> '.$row['time'].' </td>
                            <td> '.$row['branch'].' </td>
                            <td> '.$row['customer'].' </td>
                            <td> '.$row['email'].' </td>

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
    </div>
</center>


</body>

</html>