<?php
if (isset($_GET['channel'])) {
	$channel = $_GET['channel'];
}
// echo "Selected Channel: " . $channel ."</br>";

if (isset($_GET['stream'])) {
	$stream = $_GET['stream'];
}
// echo "Selected Stream: " . $stream ."</br>";

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$conn = mysqli_connect("10.0.1.10", "modem", "modem", "modem");

// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error()) . "</br>";
}
// Print host information
// echo "Connect Successfully. Host info: " . mysqli_get_host_info($conn) . "</br>";

if ($stream == "up") {
	$sql = "SELECT datetime, channel, lock_status, us_channel_type, frequency, width, power FROM upstream WHERE channel LIKE $channel ORDER BY datetime, channel ASC";
}

if ($stream == "down") {
	$sql = "SELECT datetime, channel, lock_status, modulation, frequency, power, snr_mer, corrected, uncorrectables FROM downstream WHERE channel LIKE $channel ORDER BY datetime, channel ASC";
}

$result = $conn->query($sql);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Modem Signal Status</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Arris SB8200</a>
      <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->
      <ul class="navbar-nav px-3">
        <!--<li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Sign out</a>
        </li> -->
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
				  <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
					  <span>Downstream Channels</span>
					  </h6>
					  <li class="nav-item">
						  <a class="nav-link" href="?channel=1&stream=down">
							  <span data-feather="activity"></span>
							  Channel 1
						  </a>
					  </li>
					  <li class="nav-item">
						  <a class="nav-link" href="?channel=2&stream=down">
							  <span data-feather="activity"></span>
							  Channel 2
						  </a>
					  </li>
					  <li class="nav-item">
						  <a class="nav-link" href="?channel=3&stream=down">
							  <span data-feather="activity"></span>
							  Channel 3
						  </a>
					  </li>
					  <li class="nav-item">
						  <a class="nav-link" href="?channel=4&stream=down">
							  <span data-feather="activity"></span>
							  Channel 4
						  </a>
					  </li>
					  <li class="nav-item">
						  <a class="nav-link" href="?channel=5&stream=down">
							  <span data-feather="activity"></span>
							  Channel 5
						  </a>
					  </li>
					  <li class="nav-item">
						  <a class="nav-link" href="?channel=6&stream=down">
							  <span data-feather="activity"></span>
							  Channel 6
						  </a>
					  </li>
					  <li class="nav-item">
						  <a class="nav-link" href="?channel=7&stream=down">
							  <span data-feather="activity"></span>
							  Channel 7
						  </a>
					  </li>
					  <li class="nav-item">
						  <a class="nav-link" href="?channel=8&stream=down">
							  <span data-feather="activity"></span>
							  Channel 8
						  </a>
					  </li>
					  <li class="nav-item">
						  <a class="nav-link" href="?channel=9&stream=down">
							  <span data-feather="activity"></span>
							  Channel 9
						  </a>
					  </li>
					  <li class="nav-item">
						  <a class="nav-link" href="?channel=10&stream=down">
							  <span data-feather="activity"></span>
							  Channel 10
						  </a>
					  </li>
					  <li class="nav-item">
						  <a class="nav-link" href="?channel=11&stream=down">
							  <span data-feather="activity"></span>
							  Channel 11
						  </a>
					  </li>
					  <li class="nav-item">
						  <a class="nav-link" href="?channel=12&stream=down">
							  <span data-feather="activity"></span>
							  Channel 12
						  </a>
					  </li>
					  <li class="nav-item">
						  <a class="nav-link" href="?channel=13&stream=down">
							  <span data-feather="activity"></span>
							  Channel 13
						  </a>
					  </li>
					  <li class="nav-item">
						  <a class="nav-link" href="?channel=14&stream=down">
							  <span data-feather="activity"></span>
							  Channel 14
						  </a>
					  </li>
					  <li class="nav-item">
						  <a class="nav-link" href="?channel=15&stream=down">
							  <span data-feather="activity"></span>
							  Channel 15
						  </a>
					  </li>
					  <li class="nav-item">
						  <a class="nav-link" href="?channel=16&stream=down">
							  <span data-feather="activity"></span>
							  Channel 16
						  </a>
					  </li>
					  <li class="nav-item">
						  <a class="nav-link" href="?channel=17&stream=down">
							  <span data-feather="activity"></span>
							  Channel 17
						  </a>
					  </li>
					  <li class="nav-item">
						  <a class="nav-link" href="?channel=18&stream=down">
							  <span data-feather="activity"></span>
							  Channel 18
						  </a>
					  </li>
					  <li class="nav-item">
						  <a class="nav-link" href="?channel=19&stream=down">
							  <span data-feather="activity"></span>
							  Channel 19
						  </a>
					  </li>
					  <li class="nav-item">
						  <a class="nav-link" href="?channel=20&stream=down">
							  <span data-feather="activity"></span>
							  Channel 20
						  </a>
					  </li>
					  <li class="nav-item">
						  <a class="nav-link" href="?channel=21&stream=down">
							  <span data-feather="activity"></span>
							  Channel 21
						  </a>
					  </li>
					  <li class="nav-item">
						  <a class="nav-link" href="?channel=22&stream=down">
							  <span data-feather="activity"></span>
							  Channel 22
						  </a>
					  </li>
					  <li class="nav-item">
						  <a class="nav-link" href="?channel=23&stream=down">
							  <span data-feather="activity"></span>
							  Channel 23
						  </a>
					  </li>
					  <li class="nav-item">
						  <a class="nav-link" href="?channel=24&stream=down">
							  <span data-feather="activity"></span>
							  Channel 24
						  </a>
					  </li>
					  <li class="nav-item">
						  <a class="nav-link" href="?channel=25&stream=down">
							  <span data-feather="activity"></span>
							  Channel 25
						  </a>
					  </li>
					  <li class="nav-item">
						  <a class="nav-link" href="?channel=26&stream=down">
							  <span data-feather="activity"></span>
							  Channel 26
						  </a>
					  </li>
					  <li class="nav-item">
						  <a class="nav-link" href="?channel=27&stream=down">
							  <span data-feather="activity"></span>
							  Channel 27
						  </a>
					  </li>
					  <li class="nav-item">
						  <a class="nav-link" href="?channel=28&stream=down">
							  <span data-feather="activity"></span>
							  Channel 28
						  </a>
					  </li>
					  <li class="nav-item">
						  <a class="nav-link" href="?channel=29&stream=down">
							  <span data-feather="activity"></span>
							  Channel 29
						  </a>
					  </li>
					  <li class="nav-item">
						  <a class="nav-link" href="?channel=30&stream=down">
							  <span data-feather="activity"></span>
							  Channel 30
						  </a>
					  </li>
					  <li class="nav-item">
						  <a class="nav-link" href="?channel=31&stream=down">
							  <span data-feather="activity"></span>
							  Channel 31
						  </a>
					  </li>
					  <li class="nav-item">
						  <a class="nav-link" href="?channel=32&stream=down">
							  <span data-feather="activity"></span>
							  Channel 32
						  </a>
					  </li>
					  <li class="nav-item">
						  <a class="nav-link" href="?channel=33&stream=down">
							  <span data-feather="activity"></span>
							  Channel 33
						  </a>
					  </li>
				  </ul>
				  
				  <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
					  <span>Upstream Channels</span>
					  </h6>
					  <ul class="nav flex-column mb-2">
						  <li class="nav-item">
							  <a class="nav-link" href="?channel=1&stream=up">
								  <span data-feather="activity"></span>
								  Channel 1
							  </a>
						  </li>
						  <li class="nav-item">
							  <a class="nav-link" href="?channel=2&stream=up">
								  <span data-feather="activity"></span>
								  Channel 2
							  </a>
						  </li>
						  <li class="nav-item">
							  <a class="nav-link" href="?channel=3&stream=up">
								  <span data-feather="activity"></span>
								  Channel 3
							  </a>
						  </li>
					  </ul>
				  </div>
			  </nav>
			  
			  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
				  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<!--					  <h1 class="h2">Dashboard</h1>
					  <div class="btn-toolbar mb-2 mb-md-0">
						  <div class="btn-group mr-2">
							  <button class="btn btn-sm btn-outline-secondary">Share</button>
							  <button class="btn btn-sm btn-outline-secondary">Export</button>
						  </div> 
						  <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
							  <span data-feather="calendar"></span>
							  Last 24hrs
						  </button>
					  </div>--> 
				  </div>

<!--          <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->
<?php
		if ($stream == "up") {
            echo '<h2>Channel Stats for ' . $stream . 'stream channel ' . $channel . '</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
					<th class="text-center">Date/Time</th>
					<th class="text-center">Channel</th>
					<th class="text-center">Lock Status</th>
					<th class="text-center">Channel Type</th>
					<th class="text-center">Frequency</th>
					<th class="text-center">Width</th>
					<th class="text-center">Power</th>
                </tr>
              </thead>
              <tbody>';
		  }
		  
  		if ($stream == "down") {
            echo '<h2>Channel Stats for ' . $stream . 'stream channel ' . $channel . '</h2>
            <div class="table-responsive">
              <table class="table table-striped table-sm">
                <thead>
                  <tr>
  					<th class="text-center">Date/Time</th>
  					<th class="text-center">Channel</th>
  					<th class="text-center">Modulation</th>
  					<th class="text-center">Frequency</th>
  					<th class="text-center">Power</th>
  					<th class="text-center">SNR MER</th>
  					<th class="text-center">Corrected</th>
  					<th class="text-center">Uncorrectables</th>
                  </tr>
                </thead>
                <tbody>';
  		  }
		  

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		// Upstream
		if ($stream == "up") {
			echo '<tr>' . 
				'<td align="center">' . $row["datetime"] . '</td>' .
				'<td align="center">' . $row["channel"] . '</td>' .
				'<td align="center">' . $row["lock_status"] . '</td>' .
				'<td align="center">' . $row["us_channel_type"] . '</td>' .
				'<td align="center">' . $row["frequency"] . '</td>' . 
				'<td align="center">' . $row["width"] . '</td>' .
				'<td align="center">' . $row["power"] . '</td>' .
				"</tr>";
		}
		
		// Downstream
		if ($stream == "down") {
			echo '<tr>' . 
			'<td align="center">' . $row["datetime"] . '</td>' .
			'<td align="center">' . $row["channel"] . '</td>' .
			'<td align="center">' . $row["modulation"] . '</td>' .
			'<td align="center">' . $row["frequency"] . '</td>' .
			'<td align="center">' . $row["power"] . '</td>' . 
			'<td align="center">' . $row["snr_mer"] . '</td>' .
			'<td align="center">' . $row["corrected"] . '</td>' .
			'<td align="center">' . $row["uncorrectables"] . '</td>' .
			"</tr>";
		}		
    }
} else {
// Database is empty message
// echo "0 results check the crontab.";
}
?>
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
<!--    <script src="assets/js/popper.min.js"></script> -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="assets/js/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <script src="assets/js/Chart.min.js"></script>
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          datasets: [{
            data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>
  </body>
</html>
<?php
// Close connection
	$conn->close();
?>