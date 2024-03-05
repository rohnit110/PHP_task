<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myproduct";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle sorting logic
$orderBy = isset($_GET['orderBy']) ? $_GET['orderBy'] : 'id';
$order = isset($_GET['order']) ? $_GET['order'] : 'ASC';

$sql = "SELECT * FROM products ORDER BY $orderBy $order";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sortable Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th a {
            text-decoration: none;
            color: black;
        }
    </style>
</head>

<body>

    <table>
        <thead>
            <tr>
                <th><a href="?orderBy=id&order=<?= ($orderBy === 'id' && $order === 'ASC') ? 'DESC' : 'ASC'; ?>">ID</a></th>
                <th><a href="?orderBy=name&order=<?= ($orderBy === 'name' && $order === 'ASC') ? 'DESC' : 'ASC'; ?>">Name</a></th>
                <th><a href="?orderBy=age&order=<?= ($orderBy === 'age' && $order === 'ASC') ? 'DESC' : 'ASC'; ?>">Age</a></th>
            </tr>
        </thead>
        <tbody>

            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['product_name'] . "</td>";
                    echo "<td>" . $row['price'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3'>No data found</td></tr>";
            }
            ?>

        </tbody>
    </table>

</body>

</html>

<?php
// Close the database connection
$conn->close();
?>