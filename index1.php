<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <form class="mt-5 text-center" method="get" action="">
        <input type="text" class="form-control-sm" name="search" value="<?php if (isset($_GET['search'])) {
                                                                            echo $_GET['search'];
                                                                        } ?>" placeholder="Search here">
        <input type="submit" class="btn btn-primary" value="Search">
        <div class="col-lg-2 mx-auto">
            <input type="submit" class="btn btn-primary" name="sort_asc" value="Sort Ascending">
            <input type="submit" class="btn btn-primary" name="sort_desc" value="Sort Descending">
        </div>
    </form>
</body>

</html>
<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'myproduct';
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$orderBy = isset($_GET['orderBy']) ? $_GET['orderBy'] : 'id';
$order = isset($_GET['order']) ? $_GET['order'] : 'ASC';

// Check for ascending or descending button click
if (isset($_GET['sort_asc'])) {
    $sort_order = 'ASC';
} elseif (isset($_GET['sort_desc'])) {
    $sort_order = 'DESC';
}

$result_per_page = 5;
if (!isset($_GET["page"])) {
    $page = 1;
} else {
    $page = $_GET["page"];
}
$start_from = ($page - 1) * $result_per_page;

if (isset($_GET['submit'])) {
    $search = "%" . $_GET['products'] . "%";
    $sql1 = "SELECT * FROM `products` WHERE `product_name` LIKE " . "'" . $search . "'" . " OR `product_description` LIKE " . "'" . $search . "'";
    $sql_count = "SELECT COUNT(id) AS total FROM products WHERE  `product_name` LIKE " . "'" . $search . "'" . " OR `product_description` LIKE " . "'" . $search . "'";
    $result = $conn->query($sql1);
} else {
    $sql1 = "SELECT * FROM products ORDER BY product_id $sort_order LIMIT $start_from, $result_per_page";
    $sql_count = "SELECT COUNT(id) AS total FROM products";
    $result = $conn->query($sql1);
}


$sql1 = "SELECT * FROM products LIMIT $start_from, $result_per_page";
$result = $conn->query($sql1);
echo "<div class='container'>";
echo "<table class='table  text-center table-dark text-light mb-0'>";
echo "<tr class='container row'>
         <th class='col'>Name</th>
         <th class='col'>Description</th>
         <th class='col'>Price</th>
         <th class='col'>Product_id</th>
     </tr>";
echo "</table>";
if (!isset($_GET["search"])) {
    echo "<div class='container'>";
    echo "<table class='table text-center table-striped'>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr class='container row '>";
        echo "<td class='col-3'> {$row['product_name']}</td>";
        echo "<td class='col-3'>  {$row['product_description']}</td>";
        echo "<td class='col-3'>  {$row['price']}</td>";
        echo "<td class='col-3'>  {$row['product_id']}</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "</div>";
} elseif (isset($_GET['search'])) {
    $searchTerm = $_GET['search'];
    $sql = "SELECT * FROM products WHERE CONCAT(id, product_name, product_description, price) LIKE '%$searchTerm%' ORDER BY price $sort_order";
    $filterdata_run = mysqli_query($conn, $sql);

    echo "<table class='table text-center table-striped'>";
    if (mysqli_num_rows($filterdata_run) > 0) {
        foreach ($filterdata_run as $row1) {
            echo "<tr class='container row '>";
            echo "<td class='col-3'> {$row1['product_id']}</td>";
            echo "<td class='col-3'>  {$row1['product_name']}</td>";
            echo "<td class='col-3'>  {$row1['product_description']}</td>";
            echo "<td class='col-3'>  {$row1['price']}</td>";
            echo "</tr>";
        }
        include "Task_PHP\Insert&update\pagination.php";
    } else {
        while ($row = $result->fetch_assoc()) {
            echo "<tr class='container row '>";
            echo "<td class='col-3'> {$row['product_name']}</td>";
            echo "<td class='col-3'>  {$row['product_description']}</td>";
            echo "<td class='col-3'>  {$row['price']}</td>";
            echo "<td class='col-3'>  {$row['product_id']}</td>";
            echo "</tr>";
        }
    }
}
include "Task_PHP\Insert&update\pagination.php";
$conn->commit();

?>
<div class="container">
    <nav class="navbar navbar-expand-sm bg-light">
        <div class="d-flex flex-grow-1"> <!-- Use flex utilities for positioning -->
            <input type="text" class="form-control-sm me-2" name="search" value="<?php if (isset($_GET['search'])) {
                                                                                echo $_GET['search'];
                                                                            } ?>" placeholder="Search here">
            <input type="submit" class="btn btn-primary me-2" value="Search">
        </div>
        <ul class="nav justify-content-end"> <!-- Move ul tag to the end -->
            <li class="nav-item"> <input type="submit" class="btn btn-primary" name="sort_asc" value="Sort Ascending"></li>
            <li class="nav-item"> <input type="submit" class="btn btn-primary" name="sort_desc" value="Sort Descending"></li>
        </ul>
    </nav>
</div>
