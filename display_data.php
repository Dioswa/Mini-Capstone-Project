<?php
// Retrieve data from the
require_once 'connection.php';
$query = mysqli_query($connection, "SELECT * FROM scannning_details");
?>
<html>
<head>
    <div class="header">
        <a href="homepage.php">Home</a>
        <a href="index.php">Generator</a>
        <a href="qrscanner.php">Scanner</a>
        <a href="display_data.php">Dashboard</a>
    </div>
</head>
    <body>
        <style>
        .header {
            background-color: #333;
            color: #fff;
            padding: 15px;
            text-align: center;
        }
        .header a {
            color: #fff;
            text-decoration: none;
            padding: 15px;
            margin: 100px;
            font-size: larger;
            font-style: normal;
            font-weight: bolder;
        }
        .header a:hover {
            background-color: #555;
        }
        body {
            background-color: lightblue;
        }

        table {
            width: 80%;
            margin: 20 auto;
            border-collapse: collapse;
        }

        th {
            font-size: 1.2em;
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }

        td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }
        </style>
    </body>
<table class="" border="5"style="background-color:aliceblue">
<thead>
<tr align="center">
    <th width="50">ID</th>
    <th width="50">Name</th>
    <th width="120">Time</th>
</tr>
</thead>
<tbody>
<?php
while($row = mysqli_fetch_assoc($query))
{
    echo '<tr>' . PHP_EOL;
    echo '<td>' . $row['id'] . '</td>' . PHP_EOL;
    echo '<td>' . $row['name'] . '</td>' . PHP_EOL;
    echo '<td>' . $row['scanned_at'] . '</td>' . PHP_EOL;
    echo '</tr>' . PHP_EOL;
}
?>
</tbody>
</table>
</html>