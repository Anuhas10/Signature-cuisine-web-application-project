<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link rel="stylesheet" href="Reg.css">

</head>

<body>

<center>

    <div class="image">
        <img src="images/03.jpg">

    </div>

    <div class="title">
    <h2>Customer Registration</h2>
    </div>

    <div class="sentences">
        <p>Register and enjoy your Foods</p>
    </div>

    <br>

<?php

/*$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$db = 'sig_cuisine';*/

/*$conn = mysqli_connect('127.0.0.1','root',"",'sig_cuisine');//important

if(!$conn){
    die('Could not connect :'.mysqli);
}

if($conn){
    echo"<font color='#009900'> Database connected successfully ";
    echo"<br/>";
}*/

include "Connection.php";
    $sql= "SELECT * FROM register";
    $result = mysqli_query($conn,$sql);


?>

<div class="card-container">
    <div class="tab1">

        <form name="form" method="post" action="">
            <table border="4">
                <thead>
                    <tr>
                        <th>Customer Name</th>
                        <td>
                        <input type="text" name="customername" id="customername">
                        </td>
                    </tr>

                    <tr>
                        <th>E-mail</th>
                        <td>
                            <input type="text" name="cusemail" id="cusemail">
                        </td>
                    </tr>

                    <tr>
                        <th>Contact</th>
                        <td>
                            <input type="text" name="cuscontact" id="cuscontact">
                        </td>
                    </tr>

                    <tr>
                        <th>Address</th>
                        <td>
                            <input type="text" name="cusaddress" id="cusaddress">
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
                            <input type="password" name="password" id="password">
                        </td>
                    </tr>

                    <tr id="btna">
                        <td colspan="2">
                            <button type="submit" name="submit" value="">Add Details</button>
                        </td>

                    </tr>

                    <tr id="btna1">
                        <td colspan="2">
                            <button type="reset" name="reset" value="">Reset</button>
                        </td>
                    </tr>
                </thead>
            </table>
        </form>
<?php

if(isset($_POST['submit'])){
    $customername = mysqli_real_escape_string($conn,$_POST['customername']);
    $cusemail = mysqli_real_escape_string($conn,$_POST['cusemail']);
    $cuscontact = mysqli_real_escape_string($conn,$_POST['cuscontact']);
    $cusaddress = mysqli_real_escape_string($conn,$_POST['cusaddress']);
    $username = mysqli_real_escape_string($conn,$_POST['username']);

    $password = md5($_POST['password']);

    if($customername=="" && $cusemail=="" && $cuscontact=="" && $cusaddress=="" && $username=="" && $password=="")
    {
        echo'<script type="text/javascript">alert("ERROR    : Please fill in the blanks!!!")</script>';
        print"<font color='#FF0000'>Error    : Please fill in the blanks!!!";
    }
    else
    {
        $insert = "INSERT INTO register(customer_name, email, contact, address, username, password)
        VALUES('$customername', '$cusemail', '$cuscontact', '$cusaddress', '$username', '$password')";

        $result=mysqli_query($conn,$insert);

        if($result)
        {
            echo"<font color='#009900'> Data regisiter Succesfully";
            echo"<br/>";
            echo'<script type="text/javascript">alert("Data register successfully!")</script>';
        }

        else
        {
            echo '<script type="text/javascript"> alert("Data regisiter Unuccesfully") </script>';
            print"<font color='#FF0000'>Error    :   Data regisiter Unuccesfully !!!!!!!! ";
            echo"<br/>";
        }
    }
    
}


?>
    </div>
</div>

<a href="Web.php">
    <button type="button" name="submit" class="back">Back</button>
</a>
</center>

</body>

</html>
