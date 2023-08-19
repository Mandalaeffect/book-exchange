
<?php
$server_name = "localhost";
$username = "root";
$password = "";
$dbname = "bookexchange";

$conn = mysqli_connect($server_name, $username, $password, $dbname);
if (!$conn) {
    die("Connection error: " . mysqli_connect_error());
}

$sql = "SELECT * FROM donation";
$result = mysqli_query($conn, $sql);

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #ddd;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>
    <h2>Book List</h2>
    <table>
        <tr>
            <th>Sn</th>
            <th>Book Name</th>
            <th>Writer Name</th>
            <th>Location</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row["SN"]; ?></td>
                <td><?php echo $row["bookname"]; ?></td>
                <td><?php echo $row["writername"]; ?></td>
                <td><?php echo $row["location"]; ?></td>
            </tr>
            
        <?php } ?>
    </table>
    <footer>
                Thank you for donating books!
            </footer>
</body>
</html>
