<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php


$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';

$conn= mysqli_connect($dbhost,$dbuser,$dbpass);//ist opens a connection with db
if(!$conn)
{
    die('Could not connect: '.mysqli_error($conn));
}
echo'Database Connected successfully';

echo"<br/>";

$db = mysqli_select_db($conn,'sig_cuisine');//select the database

if(!$db)
{
    echo'select the database first';
}

else{
    echo'<br/>Database connected: ';
}

//mysqli close($conn)


?>


</body>

</html>