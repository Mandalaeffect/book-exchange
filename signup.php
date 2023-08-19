


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('https://static1.cbrimages.com/wordpress/wp-content/uploads/2021/11/Death-Note-Light-Yagami-1.jpg');
            background-size: cover;
            background-position: center;
            display: flex;

        }
        .signup-container {
            background-color: #dad7d7;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .signup-container h2 {
            text-align: center;
        }
        .signup-form {
            margin-top: 20px;
        }
        .signup-form label {
            display: block;
            margin-bottom: 5px;
        }
        .signup-form input {
            width: 100%;
            padding: 9px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        .signup-form [type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: blue;
    color: white;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}
</style>
</head>
<body>
    <div class="signup-container" >
        <h2>Sign Up</h2>
        <form class="signup-form" action="" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="Contactno" pattern="[0-9]{10}" placeholder="Enter your phone number" required>
            <input type="submit" id="sign" name="sign">

        </form>
    </div>
</body>
</html>
<?php
$server_name = "localhost";
$username = "root";
$password = "";
$database = "bookexchange";

$conn = mysqli_connect($server_name, $username, $password, $database);

if (!$conn) {
    die("Sorry, connection failed!!!");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $phonenumber = $_POST["Contactno"];
    $rawPassword = $_POST["password"];
    
    // Hash the password securely
    $hashedPassword = password_hash($rawPassword, PASSWORD_DEFAULT);

    // Properly quote and handle column name with space
    $sql = "INSERT INTO `deathnote` (`Sn`, `username`, `email`, `password`, `phonenumber`) VALUES (NULL, '$username', '$email', '$hashedPassword', '$phonenumber')";

    if (mysqli_query($conn, $sql)) {
        header("Location: http://localhost/bookexchange/sucess.html");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>




