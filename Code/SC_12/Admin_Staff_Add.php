<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Staff Add</title>

    <link href="adminfront1.css" rel="stylesheet" type="text/css">
</head>

<body>

<center>

    <div class="image">
        <img src="images/03.jpg">
    </div>

    <div class="title">
        <h1>Admin Satff Add</h1>
    </div>

    <div class="sentences">
        <p>Welcome Admin...</p>
    </div>
    <br>
    <br/>
    <br>
    <br/>
    <br>
    <br/>

    <?php
    include "Connection.php";

    ?>

    <table border="4">
        <thead>
            <tr>
                <th>Staff Member Name</th>
                <td>
                    <form name="form" method="post" action="">
                    <input type="text" name="staffname" id="staffname"> 
                </td>
            </tr>
            <tr>
                <th>Section</th>
                <td>
                    <select id="section" name="section">
                        <option value="cuisine section">Cuisine Section(Chef)</option>
                        <option value="bakery">Bakery</option>
                        <option value="waiter">Waiter</option>
                        <option value="delivery">Delivery</option>
                    </select>
                </td>
            </tr>
        </thead>

        <tbody>
            <tr>
                <th>Age</th>
                <td>
                    <input type="text" name="age" id="age">
                </td>
            </tr>
            <tr>
                <th>Address</th>
                <td>
                    <input type="text" name="address" id="address">
                </td>
            </tr>
            <tr>
                <th>Contact</th>
                <td>
                    <input type="text" name="contact" id="contact">
                </td>
            </tr>
            <tr>
                <th>Email</th>
                <td>
                    <input type="text" name="email" id="email">
                </td>
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
                <th>Salary</th>
                <td>
                    <input type="text" name="salary" id="salary">
                </td>
            </tr>
            <tr>
                <th>Username</th>
                <td>
                    <input type="text" name="username" id="username">
                </td>
            </tr>
            <tr>
                <th>Password</th>
                <td>
                    <input type="text" name="password" id="password">
                </td>
            </tr>

            <tr id="btna">
                <td colspan="2">
                    <button type="submit" name="submit" id="btn" value="">Add Details</button>
                </td>
            </tr>
            <tr id="btna">
                <td colspan="2">
                    <button type="reset" name="reset" id="btn" value="">Reset</button>
                </td>
            </tr>
        </tbody>
    </table>
</form>

<br>
<br/>


<?php

    if(isset($_POST['submit'])){

        $staffname = mysqli_real_escape_string($conn, $_POST['staffname']);
        $section = mysqli_real_escape_string($conn, $_POST['section']);
        $age = mysqli_real_escape_string($conn, $_POST['age']);
        $address = mysqli_real_escape_string($conn, $_POST['address']);
        $contact = mysqli_real_escape_string($conn, $_POST['contact']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $branch = mysqli_real_escape_string($conn, $_POST['branch']);
        $salary = mysqli_real_escape_string($conn, $_POST['salary']);
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        $insert = "INSERT INTO staff(staff_member_name, section, age, address, contact, email, branch, salary, username, password)
        VALUES('$staffname', '$section', '$age', '$address', '$contact', '$email', '$branch', '$salary', '$username', '$password')";
        
        $result=mysqli_query($conn,$insert);

        if($result){
            echo"<font color='#009900'> Staff Details added Successfull...";
            echo"<br/>";
            echo'<script type="text/javascript"> alert("Staff Details added Successfull") </script>';
        }
        else{
            echo'<script type="text/javascript"> alert("Staff Details added Unsuccessfull!!!") </script>';
            print"<font color='#ff0000'>Error   : Staff Details added Unsuccessfull!!!";
            echo"<br/>";
        }
    }

?>

<a href="Admin_home.html">
    <button type="button" name="previous" class="previous">Previous</button>
</a>

</center>

</body>

</html>