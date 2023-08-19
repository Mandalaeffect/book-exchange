<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Exchange Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            text-align: left;
            align-items: center;
            height: 100vh;
            background-image: url('data:image/jpeg;base64,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');
    
        }
        .form-container + .form-container {
            margin-top: 20px;
        }
        .form-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
            width: 350px;
            text-align: center;
            overflow: hidden;
        }
        .form-container h2 {
            color: #007bff;
            margin-bottom: 15px;
            font-size: 1.5rem;
        }
        .form-container p {
            font-weight: bold;
            margin-bottom: 15px;
            font-size: 1.1rem;
        }
        .form-container label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-container input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: border-color 0.3s;
        }
        .form-container input[type="text"]:focus {
            border-color: #007bff;
        }
        .form-container input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .form-container input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .form-container footer {
            text-align: center;
            margin-top: 20px;
            font-size: 0.9rem;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Book Exchange Form</h2>
        <form method="post" action=""style="text-align: left;font-size: 19px;">
            <p>Book you want to exchange:</p>

            <label for="book_name_exchange">Book name:</label>
            <input type="text" id="book_name_exchange" name="book_name_exchange" required>
            <label for="writer_name_exchange">Writer name:</label>
            <input type="text" id="writer_name_exchange" name="writer_name_exchange" required>
            <label for="location_exchange">Your location:</label>
            <input type="text" id="location_exchange" name="location_exchange" required>
            <input type="submit" value="Submit" >

        </form>
        <br>
        <a href="http://localhost/bookexchange/books%20for%20you.html" style="color: rgb(171, 189, 255); font-size: 19px;"><b>Books for you</b></a>
       
    </div>


    
    </div>
    

</body>
</html>

<?php
$server_name = "localhost";
$username = "root";
$password = "";
$dbname = "bookexchange";

$conn = mysqli_connect($server_name, $username, $password, $dbname);
if (!$conn) {
    die("Connection error: " . mysqli_connect_error());
}
echo "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bookname = $_POST["book_name_exchange"];
    $writername = $_POST["writer_name_exchange"];
    $location = $_POST["location_exchange"];

    // Use prepared statement to prevent SQL injection
    $sql = "INSERT INTO `bookexchange1` (`Sn`, `bookname`, `location`, `writername`) VALUES (NULL, '$bookname', ' $location', '$writername')";
    
    $stmt = mysqli_prepare($conn, $sql);
    if (mysqli_query($conn, $sql)) {
        echo "";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
$response;
 
?>
    




