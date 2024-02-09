<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Staff Details</title>

    <link href="adminfront.css" rel="stylesheet" type="text/css">
</head>

<body>

<center>

    <div class="image">
        <img src="images/03.jpg">
    </div>

    <div class="title">
        <h1>Admin Staff Details</h1>
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

    <form method="post">
        <h3>Enter Staff Member Contact No:</h3>
        <input type="text" placeholder="Search" name="search">
        <button type="submit" name="br_staff" id="br_staff" class="branch_s">Search</button>
        <br>
        <br/>
        <br>
        <br/>
        <h3>All Staff Details :</h3>
        <button type="submit" name="all_staff" id="all_staff" class="all_staff">Click Here</button>
        <a href="Admin_home.html">
            <button type="button" name="all_staff" class="previous">Previous</button>
        </a>
    </form>

    <?php

    include "Connection.php";
    $sql = "SELECT * FROM staff";
    $result = mysqli_query($conn,$sql);

    ?>

    <div class="container">

        <table class="table">
            
        <?php

            if(isset($_POST['br_staff'])){
                
                $search=$_POST['search'];

                if($search==""){
                    print"<font color='#ff0000'>Error   :  Please fill in the blanks!!!";
                    echo"<br/>";
                }

                $sql = "SELECT * FROM staff Where contact='$search'";
                $result = mysqli_query($conn,$sql);

                if($result){
                    if(mysqli_num_rows($result)>0){
                        echo'<thead class="name">
                        <tr>
                        <th>Staff Member Name</th>
                        <th>Section</th>
                        <th>Age</th>
                        <th>Address</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>Branch</th>
                        <th>Salary</th>
                        <th>Username</th>
                        <th>Password</th>
                        </tr>
                        </thead>
                        ';

                        while($row=mysqli_fetch_assoc($result)){
                            echo'<tbody>;

                            <tr>

                            <td> '.$row['staff_member_name'].' </td>
                            <td> '.$row['section'].' </td>
                            <td> '.$row['age'].' </td>
                            <td> '.$row['address'].' </td>
                            <td> '.$row['contact'].' </td>
                            <td> '.$row['email'].' </td>
                            <td> '.$row['branch'].' </td>
                            <td> '.$row['salary'].' </td>
                            <td> '.$row['username'].' </td>
                            <td> '.$row['password'].' </td>
                            </tr>
                            </tbody>
                            ';
                        }
                    }
                    else{
                        print"<font color='#ff0000'>Error    :  Data not Found!!!";
                    }
                }
                else{
                    print"<font color='#ff0000'>Error    :  Select the Correct Database!!!";
                }
            }


        ?>
        </table>
        

        <table class="table1">

            
            <?php

                if(isset($_POST['all_staff'])){

                    $sql = "SELECT * FROM staff";
                    $result = mysqli_query($conn,$sql);

                    if($result){
                        if(mysqli_num_rows($result)>0){
                            echo'<thead class="name">
                        <tr>
                        <th>Staff Member Name</th>
                        <th>Section</th>
                        <th>Age</th>
                        <th>Address</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>Branch</th>
                        <th>Salary</th>
                        <th>Username</th>
                        <th>Password</th>
                        </tr>
                        </thead>
                        ';
                        
                        while($row=mysqli_fetch_assoc($result)){
                            echo'<tbody>;

                            <tr>

                            <td> '.$row['staff_member_name'].' </td>
                            <td> '.$row['section'].' </td>
                            <td> '.$row['age'].' </td>
                            <td> '.$row['address'].' </td>
                            <td> '.$row['contact'].' </td>
                            <td> '.$row['email'].' </td>
                            <td> '.$row['branch'].' </td>
                            <td> '.$row['salary'].' </td>
                            <td> '.$row['username'].' </td>
                            <td> '.$row['password'].' </td>
                            </tr>
                            </tbody>
                            ';
                        }

                        }
                        else{
                            print"<font color='#ff0000'>Error    :  Data not Found!!!";
                        }
                    }
                    else{
                        print"<font color='#ff0000'>Error    :  Select the correct Database!!!";
                    }
                }

            ?>
        </table>

    </div>
</center>


</body>

</html>