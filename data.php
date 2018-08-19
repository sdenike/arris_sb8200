<?php
// Export data as json for future Chart.js output
// Set header
header('Content-Type: application/json');

// Fetch variables
if (isset($_GET['channel'])) {$channel = $_GET['channel'];}
if (isset($_GET['stream'])) {$stream = $_GET['stream'];}

// Connect to database
$conn = mysqli_connect("10.0.1.10", "modem", "modem", "modem");
if($conn === false){die("ERROR: Could not connect. " . mysqli_connect_error()) . "</br>";}

// If upstream is being fetched
if ($stream == "up") {$sql = "SELECT datetime, channel, lock_status, us_channel_type, frequency, width, power FROM upstream WHERE channel LIKE $channel ORDER BY datetime, channel ASC";}

// If downstream is being fetched
if ($stream == "down") {$sql = "SELECT datetime, channel, lock_status, modulation, frequency, power, snr_mer, corrected, uncorrectables FROM downstream WHERE channel LIKE $channel ORDER BY datetime, channel ASC";}

// Complete query and close connection
$result = $conn->query($sql);
$conn->close();
$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

// Echo JSON
echo json_encode($data);
?>