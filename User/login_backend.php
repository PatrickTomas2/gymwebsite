<?php
    require "db_conn.php";
    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];


    if (!empty($username) && !empty($password) ){

    $select = "SELECT username, password FROM user_info WHERE username='$username'";
    $result = mysqli_query($conn, $select);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);

                if ($username == $row['username'] && $password == $row['password']) {
                    
                    $_SESSION['username'] = $username;
                    header('Location: new_home_screen.php');
                }else {
                    echo "<script>alert('Invalid credential');</script>";
                    header("refresh:0 URL=login.php");
                }
        }else {
            echo "<script>alert('You are not registered');</script>";
            header("refresh:0 URL=login.php");
        }
    }else {
        echo "<script>alert('Error in query');</script>";
        header("refresh:0 URL=login.php");
    }
    }else {
        echo "<script>alert('fill all fields');</script>";
        header("refresh:0 URL=login.php");
    }
    


?>