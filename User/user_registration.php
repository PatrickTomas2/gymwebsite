

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('img/gym_image_registration.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card {
            background: rgba(255, 255, 255, 0.7);
            padding: 20px;
            border-radius: 10px;
            width: 100%;
            max-width: 800px;
        }

        .form-label {
            font-size: 20px;
        }

        .center-text {
            text-align: center;
        }

        .center-button {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .form-control {
            background-color: rgba(255, 255, 255, 0.3);
            border: 1px solid grey;    
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h1 class="text-center mb-4">Fitness Gym Registration</h1>

                    <form action="register_backend.php" method="POST">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="fname" class="form-label">First Name:</label>
                                <input type="text" name="fname" class="form-control" placeholder="Enter first name">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="lname" class="form-label">Last Name:</label>
                                <input type="text" name="lname" class="form-control" placeholder="Enter last name">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="gender" class="form-label">Select your gender:</label>
                                <select name="gender" id="gender" class="form-control"> 
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="non-binary">Non-Binary</option>
                                    <option value="bigender">Bigender</option>
                                    <option value="prefer not to say">Prefer not to say</option>
                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="birthdate" class="form-label">Birthday:</label>
                                <input type="date" name="birthdate" class="form-control" >
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="contactNum" class="form-label">Phone Number:</label>
                                <input type="tel" name="contactNum" class="form-control" placeholder="Enter phone number">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="username" class="form-label">Username:</label>
                                <input type="text" name="username" class="form-control" placeholder="Enter Username">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="password" class="form-label">Password:</label>
                                <input type="password" name="password" class="form-control" placeholder="Enter password">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="passwordConfirm" class="form-label">Confirm password:</label>
                                <input type="password" name="passwordConfirm" class="form-control" placeholder="Comfirm password">
                            </div>
                        </div>

                        <div class="center-button">
                            <button type="submit" name="btnRegister" class="btn btn-primary">Register</button>
                        </div>
                    </form>

                    <p class="mt-3 center-text">
                        Already have an account? <a href="login.php" style="color: black">Login</a>

                    </p>
                </div>
            </div>
        </div>
    </div>
        
    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
