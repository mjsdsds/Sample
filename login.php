<?php 
session_start();
include "./connection/connection.php";

$msg = '';


if (isset($_POST['login']) && !empty($_POST['email']) && !empty($_POST['password'])) {
   $email=$_POST['email'];
   $password = $_POST['password'];
   
   $email = mysqli_real_escape_string($conn, $email);
   $password = mysqli_real_escape_string($conn, $password);

   $query = "SELECT * FROM user WHERE email='$email' AND password='$password'";
   $result = mysqli_query($conn, $query);

   if (mysqli_num_rows($result) > 0) {
   
    $_SESSION['valid'] = true;
    $_SESSION['timeout'] = time();
    $_SESSION['email'] = $email;
    header("Location: index.php");
    exit();
 } else {
    
    $msg = "You have entered wrong email or password";
 }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Sign Up</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('https://images.unsplash.com/photo-1506748686214-e9df14d4d9d0?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&q=80&w=1080');
            background-size: cover;
            background-position: center;
            color: white;
        }
        .container {
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            padding: 30px;
            max-width: 400px;
            margin-top: 100px;
        }
        .form-section { display: none; }
        .form-section.active { display: block; }
    </style>
</head>
<body>

<div class="container mt-5">
    <div id="loginForm" class="form-section active">
        <h2>Login</h2>
        <form action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <div class="form-group">
                <label for="loginEmail">Email address</label>
                <input type="email" class="form-control" id="loginEmail" name="email" placeholder="Enter email" required>
            </div>
            <div class="form-group">
                <label for="loginPassword">Password</label>
                <input type="password" class="form-control" id="loginPassword" name="password" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-primary" name="login">Login</button>
            <p class="mt-3">Don't have an account? <a href="#" id="showSignUp">Sign up here</a></p>
        </form>
    </div>

    <div id="signUpForm" class="form-section">
        <h2>Sign Up</h2>
        <form>
            <div class="form-group">
                <label for="signupName">Name</label>
                <input type="text" class="form-control" id="signupName" placeholder="Enter name" required>
            </div>
            <div class="form-group">
                <label for="signupEmail">Email address</label>
                <input type="email" class="form-control" id="signupEmail" placeholder="Enter email" required>
            </div>
            <div class="form-group">
                <label for="signupPassword">Password</label>
                <input type="password" class="form-control" id="signupPassword" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-success">Sign Up</button>
            <p class="mt-3">Already have an account? <a href="#" id="showLogin">Login here</a></p>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function() {
        $('#showSignUp').click(function(e) {
            e.preventDefault();
            $('#loginForm').removeClass('active');
            $('#signUpForm').addClass('active');
        });

        $('#showLogin').click(function(e) {
            e.preventDefault();
            $('#signUpForm').removeClass('active');
            $('#loginForm').addClass('active');
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
