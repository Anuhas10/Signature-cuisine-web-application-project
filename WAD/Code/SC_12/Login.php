<?php

include"Connection.php";

$sql = "SELECT * FROM register";
$result = mysqli_query($conn,$sql);

?>

<?php

//Customer Login

if(isset($_POST['submit'])){

    if(empty($_POST['username']) || empty($_POST['password'])){
        echo"Please fill the Blanks!";
    }
    else{

        $username=mysqli_real_escape_string($conn,$_POST['username']);
        $password=mysqli_real_escape_string($conn,$_POST['password']);

        $sql="SELECT * FROM register Where username='$username' AND password='$password' LIMIT 1";
        $result=mysqli_query($conn,$sql);

        if(mysqli_num_rows($result)==1){

            echo"Customer User Login Successfull...";
            header("location:Customer_home.html");
        }
        else{
            print"<font color='#FF0000'> Please check your Username or Password!!!";

            echo'<script type="text/javascript"> alert("Login Unsuccessfull!!!") </script>';
        }
    }
}


//Staff Login

if(isset($_POST['btn_staff'])){

    if(empty($_POST['username']) || empty($_POST['password'])){
        echo"Please fill in the blanks!";
    }
    else{
        $username=mysqli_real_escape_string($conn, $_POST['username']);
        $password=mysqli_real_escape_string($conn, $_POST['password']);

        $sql="SELECT * FROM staff Where username='$username' AND password='$password' LIMIT 1";
        $result=mysqli_query($conn,$sql);

        if(mysqli_num_rows($result)==1){
            echo"Staff User Login Successfull...";
            header("location:Staff_home.html");
        }
        else{
            print"<font color='#FF0000'> Please check your Username or Password!!!";
            echo'<script type="text/javascript"> alert("Login Unsuccessfull!!!") </script>';
        }
    }
}

//Admin Login

if(isset($_POST['btn_admin'])){

    if(empty($_POST['username']) || empty($_POST['password'])){
        echo"Please fill in the blanks!!!";
    }

    else{
        $username=mysqli_real_escape_string($conn, $_POST['username']);
        $password=mysqli_real_escape_string($conn, $_POST['password']);

        if($username=="admin" && $password=="1234"){
            echo"User Login Successfull";
            header("location:Admin_home.html");
        }
        else{
            print"<font color='#ff0000'> Please check Your Username or Password!!!";
            echo'<script type="text/javascript"> alert("Login Unsuccessfull!") </script>';
        }
    }
}

?>