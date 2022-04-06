<?php
    include("connect.php");

    $name = $_POST['name'];
    $mobile = $_POST['mob'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    $add = $_POST['add'];
    $image = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $role = $_POST['role'];

    if($cpass!=$pass){
        echo '<script>
                alert("Passwords do not match!");
                window.location = "../routes/register.php";
            </script>';
    }
    else{
        move_uploaded_file($tmp_name,"../uploads/$image");
        $insert = mysqli_query($connect, "INSERT INTO user (name, mobile, password, address, photo, role, status, votes) VALUES ('$name', '$mobile', '$pass', '$add', '$image', '$role', 0, 0)");
        if($insert){
            echo '<script>
                    alert("Registration Successfull! :)");
                    window.location = "../";
                </script>';
        }
        else{
            echo '<script>
                    alert("Some Error Occured... :(");
                    window.location = "../routes/register.php";
                </script>';
        }
    }
    
?>