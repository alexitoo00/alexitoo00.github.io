<!-- process.php -->
<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

$text = $_POST['text'];
$output = wordwrap($text, 60, "<br>");
echo $output;
?>


// // Database connection
// $host = 'sql205.infinityfree.com';
// $user = 'if0_36527925';
// $pass = 'seheSCjoBJ0Z';
// $database = 'if0_36527925_pruebaDB';

// // Create a database connection
// $conn = new mysqli($host, $user, $pass, $database, 3306);

// // Check connection
// if ($conn->connect_error) {
// die("Connection failed: " . $conn->connect_error);
// }

// // Query to retrieve data from your table
// $sql = "SELECT * FROM ListaDeCoches";
// $result = $conn->query($sql);

// if ($result === false) {
// // Handle query error
// echo "Error: " . $conn->error;
// } else {
// // Check if records are found
// if ($result->num_rows > 0) {
// // Display data in an HTML table
// echo "<table border='1'>
    // <tr>
        // <th>ID</th>
        // <th>Name</th>
        // <th>Price</th>
        // </tr>";

    // while ($row = $result->fetch_assoc()) {
    // echo "<tr>
        // <td>" . $row["id"] . "</td>
        // <td>" . $row["NombreCoche"] . "</td>
        // <td>" . $row["Precio"] . "</td>
        // </tr>";
    // }

    // echo "</table>";
// } else {
// echo "No records found.";
// }
// }

// // Close the database connection
// $conn->close();
?>