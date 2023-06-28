<?php
    $servername="localhost";
    $username="root";
    $password="";
    $db_name="database1";
    $conn=new mysqli($servername,$username,$password,$db_name);
    if($conn->connect_error){
        die("connection Failed!!".$conn->connect_error);
    }
        if (isset($_POST['submit'])) {
        $username = $_POST['user'];
        $password = $_POST['pass'];

        $sql = "select * from login where username = '$username' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        
        if($count == 1){  
            header("Location: welcome.php");
        }  
        else{  
            echo  '<script>
                        window.location.href = "LoginPage.php";
                        alert("Login failed. Invalid username or password!!")
                    </script>';
        }     
    }
?>