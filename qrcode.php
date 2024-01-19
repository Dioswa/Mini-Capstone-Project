<html>
    <title>QR code</title>
 <head>
    <div class="header">
        <a href="homepage.php">Home</a>
        <a href="index.php">Generator</a>
        <a href="qrscanner.php">Scanner</a>
        <a href="display_data.php">Dashboard</a>
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
        </style>
    </body>
</html>
<?php
require_once 'phpqrcode/qrlib.php';
require_once 'connection.php';
$path = 'images/';
$qrcode = $path.time().".png";
$qrimage = time().".png";

if(isset($_REQUEST['sbt-btn']))
{
    $name = $_REQUEST['name'];
    $datetime = date('Y-m-d H:i:s');
    QRcode :: png($name, $qrcode, 'H', 4, 4);

    echo '<style>

        .qr-code-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .qr-code-image {
            width: 23%;
            height: auto;
        }
    </style>';

    echo'<div class="qr-code-container">';
    echo'<img class="qr-code-image" src="'.$qrcode.'">';
    echo'</div>';

      
        $query = mysqli_query($connection,"insert into qrcode set name='$name', qrimage='$qrimage', time='$datetime'");
        if($query)
        
            {
                echo "<script>alert('Data save successfully');</script>";
            }
        
    
    } 

?>