<?php 
include "connect.php";
session_start();
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $uname = $_POST['uname'];    
        $pass = $_POST['password'];
        $sql = "SELECT * FROM users WHERE user_name = '$uname' AND password = '$pass'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            $_SESSION['uname'] = $uname;
            $_SESSION['password'] = $pass;
            header("Location: main.php");
          }
        } else {
            echo "<script>
            window.location.href='main.php';
            alert('Wrong username/password');
            </script>";
        }
    }    
?>