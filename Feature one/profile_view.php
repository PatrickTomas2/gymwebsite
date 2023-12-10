<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .profile-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }

        .profile-avatar {
            width: 100px;
            height: 100px;
            background-color: #3498db;
            border-radius: 50%;
            margin-bottom: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto;
        }

        .profile-avatar span {
            color: #fff;
            font-size: 24px;
        }

        .profile-info h2 {
            color: #333;
            margin-bottom: 10px;
        }

        .profile-info p {
            color: #666;
            margin: 0;
        }
    </style>
</head>
<body>
<?php
    require "db_conn.php";
    session_start();
    

    if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];

    $user_info = "SELECT * FROM user_info WHERE username='$username'";
    $result_user_info = mysqli_query($conn, $user_info);
    if ($result_user_info) {
        if (mysqli_num_rows($result_user_info) > 0) {
            $row = mysqli_fetch_assoc($result_user_info);

            $fname = $row['fname'];
            $lname = $row['lname'];
            
        }
    }
?>

<div class="profile-container">
    <div class="profile-avatar">
    <span><?php echo strtoupper(substr($fname, 0, 1) . substr($lname, 0, 1)) ?></span>
    </div>

    <div class="profile-info">
        <h2><?php echo $fname . " " . $lname?></h2>
        <p>Email: john@example.com</p>
        <!-- Add more information as needed -->
    </div>
</div>


<?php
    }else {
         echo "You need to log in";
        header('Refresh:2; URL=index.html');
    }

?>
</body>
</html>
