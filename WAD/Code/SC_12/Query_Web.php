<?php

include "Connection.php";

$sql = "SELECT * FROM query";
$result = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Query</title>
</head>

<?php

if(isset($_POST['submit'])){

    $C_name = mysqli_real_escape_string($conn, $_POST['C_name']);
    $C_email = mysqli_real_escape_string($conn, $_POST['C_email']);
    $C_contact = mysqli_real_escape_string($conn, $_POST['C_contact']);
    $C_branch = mysqli_real_escape_string($conn, $_POST['C_branch']);
    $C_message = mysqli_real_escape_string($conn, $_POST['C_message']);


    $insert = "INSERT INTO query(customer_name,customer_email,customer_contact
    ,customer_branch,customer_message)
    VALUES('$C_name','$C_email','$C_contact','$C_branch','$C_message')";

    $result=mysqli_query($conn,$insert);

    if($result){
        echo"Query data added Successfully";
        echo'<script type="text/javascript"> alert("Query data added Successfully"")</script>';
    }
    else{
        echo"Query data added Unsuccessfully!";
    }
}


?>

<body>
</body>

</html>
