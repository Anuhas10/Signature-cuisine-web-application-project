<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Place Order</title>

    <link href="place_order.css" rel="stylesheet" type="text/css">
</head>

<body>

<center>

    <div class="image">
        <img src="images/03.jpg">
    </div>

    <div class="title">
        <h1>Place Order</h1>
    </div>

    <div class="sentences">
        <p>Place your order N Taste Our cuisine chefs' curries</p>
    </div>
    <br>
    <br/>
    <br>
    <br/>

    <?php

    include "Connection.php";

    ?>

    <br>
    <br/>


    <div class="tab1">
        <table border="4">
            <thead>
                <tr>
                    <th>Food Name</th>
                    <td>
                        <form name="form" method="post" action="">
                            <select id="foodname" name="foodname">

                                <option value="biriyani">Biriyani</option>
                                <option value="chickenkottu">Chicken Kottu</option>
                                <option value="eggkottu">Egg Kottu</option>
                                <option value="masalakottu">Masala Kottu</option>
                                <option value="cheesemasalakottu">Cheese Masala Kottu</option>
                                <option value="palandicheesekottu">Palandi Cheese Kottu</option>
                                <option value="chickenfriedrice">Chicken Fried Rice</option>
                                <option value="icemilo">Ice Milo</option>
                                <option value="cheeserotti">Cheese Rotti</option>
                                <option value="nasigoreng">Nasi Goreng</option>
                            </select>
                    </td>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <th>Order Date</th>
                    <td><input type="date" name="date" id="date"></td>
                </tr>
                <tr>
                    <th>Order Time</th>
                    <td><input type="time" name="time" id="time"></td>
                </tr>
                <tr>
                    <th>Branch</th>
                    <td>
                        <select id="branch" name="branch">
                            <option value="colombo-05">Colombo-05</option>
                            <option value="onegalleface">One Galle Face Mall</option>
                            <option value="maharagama">Maharagama</option>
                            <option value="kandy">Kandy</option>
                            <option value="piliyandala">Piliyandala</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Customer Name</th>
                    <td><input type="text" name="customer" id="customer"></td>
                </tr>
                <tr>
                    <th>Customer Email</th>
                    <td><input type="text" name="email" id="email"></td>
                </tr>

                <tr id="btna">
                    <td colspan="2">
                    <button type="submit" name="submit" id="btn" value="">Order</button>
                    </td>
                </tr>
                <tr id="btna">
                    <td colspan="2">
                    <button type="reset" name="reset" id="btn" value="">Reset</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</form>
<br>
<br/>
<br>
<br/>
<br>
<br/>


<?php

        if(isset($_POST['submit'])){

            $foodname = mysqli_real_escape_string($conn, $_POST['foodname']);
            $date = mysqli_real_escape_string($conn, $_POST['date']);
            $time = mysqli_real_escape_string($conn, $_POST['time']);
            $branch = mysqli_real_escape_string($conn, $_POST['branch']);
            $customer = mysqli_real_escape_string($conn, $_POST['customer']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);

            
            
                $insert = "INSERT INTO orders(food_name, date, time, branch, customer_name, email)
                VALUES('$foodname', '$date', '$time', '$branch', '$customer', '$email')";
    
                $result=mysqli_query($conn,$insert);
    
                if($result){
                    echo"<font color='#009900'> Order Placed Successfull...";
                    echo"<br/>";
                    echo'<script type="text/javascript"> alert("Order Placed Successfully...")</script>';
                }
                else{
                    echo'<script type="text/javascript"> alert("Data insered Unsuccessfull!!!")</script>';
                    print"<font color='#ff0000'>Error   :  Order detail You Entered Unsuccessfull!!!";
                    echo"<br/>";
                }
            
        }

?>


<a href="Customer_home.html">
    <button type="button" name="submit" class="previous">Previous</button>
</a>



</center>


</body>

</html>