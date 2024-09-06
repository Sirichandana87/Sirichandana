
<!-- <html>
    <head>
    <title>Donation Data</title>
    <style>
        table {
            border-collapse: collapse;
            width:100%
        }
        th, td {
            padding: 8px;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1> Donated data</h1>
    <?php
// Step 1: Establish a database connection
$host = "localhost";
$username = "root";
$password = "";
$database = "database";

$connection = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Step 2: Retrieve the data
$query = "SELECT * FROM donateform";
$result = mysqli_query($connection, $query);

// Step 3: Fetch the data
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Step 4: Store the retrieved data (optional)
// You can manipulate or process the data further before displaying it

// Step 5: Display the data
foreach ($data as $row) {
    echo $row['manufactured-date']; // Display the value of column1
    echo $row['expiry-date']; 
    echo $row['quantity'];
    echo $row['brand-name'];// Display the value of column2
    // ... continue displaying other columns
}
?>
</body>
</html> -->
<!DOCTYPE html>
<html>
<head>
    
    <title style="align-text:center;">Donated Medicine</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
            margin-left:auto;
            margin-right:auto;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1 style="text-align:center;">Donation Data</h1>

    <?php
    // Step 1: Establish a database connection
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "database";

    $connection = mysqli_connect($host, $username, $password, $database);

    // Check connection
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Step 2: Retrieve the data
    $query = "SELECT * FROM donateform";
    $result = mysqli_query($connection, $query);

    // Step 3: Fetch the data
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // Step 4: Display the data in a table
    if (!empty($data)) {
        echo "<table>";
        echo "<tr>";
        echo"<th>tablet-name</th>";
        echo "<th>manufactured-date</th>";
        echo "<th>expiry-date</th>";
        echo "<th>quantity</th>";
        echo "<th>brand-name</th>";
        // ... continue with other column headers
        echo "</tr>";

        foreach ($data as $row) {
            echo "<tr>";
            echo "<td>" . $row['tablet-name']."</td>";
            echo "<td>" . formatDateString($row['manufactured-date']) . "</td>";
            echo "<td>" . $row['expiry-date'] . "</td>";
            echo "<td>" . $row['quantity'] . "</td>";
            echo "<td>" . $row['brand-name'] . "</td>";
            // ... continue with other columns
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No data found.";
    }

    // Function to format the date string (assuming 'column1' contains a date)
    function formatDateString($dateString) {
        $date = date_create($dateString);
        return date_format($date, 'Y-m-d');
    }
    ?>

</body>
</html>
