


<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>FormWizard_v1</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="colorlib.com">

	<!-- MATERIAL DESIGN ICONIC FONT -->
	<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.css">

	<!-- STYLE CSS -->
	<link rel="stylesheet" href="assets/css/stylePOST.css">
</head>

<body>
	<div class="wrapper">
		<form action="postmethod.php" id="wizard" method="post">

			<h2></h2>

			<div class="inner">
				<div class="image-holder">
					<img src="form-wizard-1.jpg">
				</div>
				<div class="form-content" >
					<div class="form-header">
						<h3><b>Post a job</b></h3>
					</div>
					<p>Please fill with your details</p>
					<div class="form-row">
						<div class="form-holder">
							<input id="jtype" name="jtype" type="text" placeholder="Job type" class="form-control">
						</div>
						<div class="form-holder">
							<input id="jname" name="jname" type="text" placeholder="Job name" class="form-control">
						</div>
					</div>
					<div class="form-row">
						<div class="form-holder">
							<input id="jsalary" name="jsalary" type="text" placeholder="Job salary" class="form-control">
						</div>
						<div class="form-holder">
							<input id="jcompany" name="jcompany" type="text" placeholder="Job company" class="form-control">
						</div>
					</div>
					<div class="form-row">
						<div class="form-holder">
							<input id="jlocation" name="jlocation" type="text" placeholder="Job location" class="form-control">
						</div>

					</div>
					<div class="button input-box">
						<input type="submit" value="Sumbit" >
					</div>
				</div>
			</div>
			

</body>

</html>