<?php include ("connection.php"); ?>

<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>PHP CRUD Opration</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="container">

        <form action="#" method="POST">
            <div class="title">
                Registration Form
            </div>

            <div class="form">
                <div class="input_field">
                    <label>First Name</label>
                    <input type="text" class="input" name="fname" required>
                </div>

                <div class="input_field">
                    <label>Last Name</label>
                    <input type="text" class="input" name="lname" required>
                </div>

                <div class="input_field">
                    <label>Password</label>
                    <input type="text" class="input" name="password" required>
                </div>

                <div class="input_field">
                    <label>Conform Password</label>
                    <input type="text" class="input" name="conpassword" required>
                </div>

                <div class="input_field">
                    <label>Gender</label>
                    <div class="custom_select">
                        <select name="gender" required>
                            <option name="no_select">Select</option>
                            <option name="male">Male</option>
                            <option name="female">Female</option>
                        </select>
                    </div>
                </div>

                <div class="input_field">
                    <label>Email</label>
                    <input type="text" class="input" name="email" required>
                </div>

                <div class="input_field">
                    <label>Phone</label>
                    <input type="number" class="input" name="phone" required>
                </div>

                <div class="input_field">
                    <label>Address</label>
                    <textarea class="textarea" name="address" required></textarea>
                </div>

                <div class="input_field terms">
                    <label class="check">
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                    <p>Agree to terms and conditions</p>
                </div>

                <div class="input_field">
                    <input type="submit" value="Register" class="btn" name="register">
                </div>

            </div>
        </form>
    </div>
</body>
</html>

<?php
    if($_POST['register'])
    {
        $fname =   $_POST['fname'];
        $lname =   $_POST['lname'];
        $pwd =     $_POST['password'];
        $cpwd =    $_POST['conpassword'];
        $gender =  $_POST['gender'];
        $email =   $_POST['email'];
        $phone =   $_POST['phone'];
        $address = $_POST['address'];

        if($fname != "" && $lname != "" && $pwd != "" &&  $cpwd != "" && $gender != "" && $email != "" && $phone != "" && $address != "")
        {
            $query = "INSERT INTO FORM VALUES('$fname', '$lname', '$pwd', '$cpwd', ' $gender', '$email', '$phone', ' $address')";
            $data = mysqli_query($conn, $query);
    
            if($data)
            {
                echo "<script>alert('Data inserted into Database');</script>";
            }
            else 
            {
                echo "<script>alert('Faild');</script>";
            }

        }
        else 
        {
            echo "<script>alert('Fill the Form first');</script>";
        }
    }
?>