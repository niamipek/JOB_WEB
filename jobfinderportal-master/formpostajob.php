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
				<div class="form-content">
					<div class="form-header">
						<h3><b>Post a job</b></h3>
					</div>
					<p>Please fill with your details</p>
					<div class="form-row">
						<div class="form-holder">
							<select style="font-size: 20px;" id="jtype" name="jtype" class="form-control">
								<option value="Full Time">Full-time</option>
								<option value="Part Time">Part-time</option>
							</select>
						</div>
						<div class="form-holder">
							<input style="font-size: 20px;" id="jname" name="jname" type="text" placeholder="Job name" class="form-control">
						</div>
					</div>
					<div class="form-row">
						<div class="form-holder">
							<input style="font-size: 20px;" id="jsalary" name="jsalary" type="text" placeholder="Job salary ($)" class="form-control">
						</div>
						<div class="form-holder">
							<input style="font-size: 20px;" id="jcompany" name="jcompany" type="text" placeholder="Job company" class="form-control">
						</div>
					</div>
					<div class="form-row">
						<div class="form-holder">
							<input style="font-size: 20px;" id="jlocation" name="jlocation" type="text" placeholder="Job location" class="form-control">
						</div>

					</div>
					<div class="form-header ">
						<input style="height: 60px;width: 200px;border-radius: 50px;background-image:linear-gradient(to right,rgb(255, 195, 110),rgb(255, 146, 91));font-family: 'Muli-SemiBold';font-size: 20px;color: #453e79;text-transform: uppercase; " type='submit' value="Submit">
					</div>
				</div>  
			</div>


</body>

</html>