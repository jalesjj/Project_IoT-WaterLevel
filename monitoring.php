<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Monitoring ketinggian volume air berbasis web</title>

	<link rel="stylesheet" type="text/css" href="css/boots trap.min.css">
	<link rel="stylesheet" type="text/css" href="monitoring.css">
	<script type="text/javascript" src="jquery/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

	

	<!-- ajax untuk proses realtime -->
	<script type="text/javascript">
		$(document).ready(function(){
			setInterval(function(){
				$("#data").load('data.php')
			}, 1000);
		});
	</script>
</head>
<body>


	<!--- Tampilan aplikasi --->
	<div class="container" style="text-align: center;">
		<img src="images/logoair.png" style="width: 120px; margin-top: 25px;">
		<h3>Sistem Monitoring Ketinggian dan Volume Air <br> Berbasis Web</h3>
		<div style="font-size: 20px;">Tangki Air (Tinggi Max : 37 cm)</div>

		<div id="data"></div>

		<a href="index.php" class="back-button">Back</a>
		<!-- logo sosial media koding perangkat (skip, aku kasih komen code nya karena tidak perlu) -->
		<!-- <img src="images/sosmed.png" style="margin-top: 15px;"> -->
	</div>

</body>
</html>