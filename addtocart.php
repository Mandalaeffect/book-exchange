

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book CRUD Application</title>
     <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: blueviolet;
            background-image: url('https://thumbs.dreamstime.com/b/open-book-hardback-books-wooden-table-education-background-back-to-school-copy-space-text-75367702.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }
        h1, h2 {
            text-align: center;
            
        }
        form {
            max-width: 400px;
           margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            padding: 10px 20px;
            cursor: pointer;
        }


        ul {
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
            background-color: transparent;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            list-style-type: none;
            padding: 0;
        }
        li {
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }
    </style>
</head>
<body>
    
    
   
    <h2>Add your  book</h2>
    <form action="" method="post">
    Title:<input type="text" name="title" required><br>
       Author <input type="text" name="author" required><br><br>
       
        <input type="submit" value="Create">
    </form>
    
    
    <h2>Your Books</h2>
    <ul>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bookexchange";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        echo "Error!!";
    } else {
        echo "Connection successful";
    }
    $sql = "SELECT * FROM `update`"; // Change 'books' to your actual table name
    $result = $conn->query($sql);
   
    if ($result->num_rows >= 1) {
        while ($row = $result->fetch_assoc()) {
            echo "<li>ID: " . $row['sn'] . " - Title: " . $row["title"] . " - Author: " . $row["author"] . "</li>";
        }
    } else {
        echo "<li>No books found.</li>";
    }
    ?>
    </ul>

</body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookexchange";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    echo "Error!!";
} else {
    echo "Connection successful<br>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
    $title = $_POST["title"];
    $author = $_POST["author"];

    $sql = "INSERT INTO `update` (`sn`, `title`, `author`) VALUES (NULL, '$title', '$author')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Book created successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}




$conn->close();
?>






