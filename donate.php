<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
         body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('data:image/jpeg;base64,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');
            background-repeat: round;
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
            text-align:left;
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
        .form-container input[type="tel"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: border-color 0.3s;
        }
        .form-container input[type="tel"]:focus {
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
        <h2>Book Request Form</h2>
        <form method="post" action="">
            <p>Book you want to donate:</p>
            <label for="book_name_request">Book name:</label>
            <input type="text" id="book_name_request" name="book_name_request"  required>
            <label for="writer_name_request">Writer name:</label>
            <input type="text" id="writer_name_request" name="writer_name_request"  required>
            <label for="location_request">Your location:</label>
            <input type="text" id="location_request" name="location_request" required>
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="Contactno" pattern="[0-9]{10}" placeholder="Enter your phone number" required>
            

            <input type="submit" value="Submit" id="Submit" onclick="validateLocation()">
            
          
        </form>

        <footer>
            Note:you can donatebook copy pen as per you like <br>
            this will be donated in the library of a farwestern area to there library and copies and pen will be donated to the schools 
        </footer>
        <a href=" http://localhost/bookexchange/donationlist.php" style="color: rgb(171, 189, 255); font-size: 19px;"><b>See your donation</b></a>
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
    echo "Connection error";
} else {
    echo "";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bookname = $_POST["book_name_request"];
    $writername = $_POST["writer_name_request"];
    $location = $_POST["location_request"];
    $contact=$_POST["Contactno"];

    $sql = "INSERT INTO `donation` (`SN`, `bookname`, `location`, `writername`,`contact`) VALUES (NULL, '$bookname', '$location', '$writername','$contact')";

    if (mysqli_query($conn, $sql)) {
        echo "";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
$response;
 
?>


