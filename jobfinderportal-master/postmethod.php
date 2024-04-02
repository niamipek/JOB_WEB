<?php

$jtype=$_POST['jtype'];
$jname = $_POST['jname'];
$jsalary = $_POST['jsalary'];
$jcompany = $_POST['jcompany'];
$jlocation = $_POST['jlocation'];

// Database connection
$conn = new mysqli('localhost', 'root', '', 'job_website');
if ($conn->connect_error) {
	echo "$conn->connect_error";
	die("Connection Failed : " . $conn->connect_error);
} else {
	$stmt = $conn->prepare("INSERT INTO job (jtype, jname, jsalary, jcompany, jlocation) VALUES (?, ?, ?, ?, ?)");
	$stmt->bind_param("sssss", $jtype, $jname, $jsalary, $jcompany, $jlocation);
	$execval = $stmt->execute();
	
	$stmt->close();
	$conn->close();
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
      integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
      crossorigin="anonymous"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-6 mt-5 mx-auto p-3 border rounded">
            <h4>Job has been successfully added</h4>
            
            <p>Click <a href="job_listing.php">here</a> to return to the job listing page, or the website will automatically redirect in   <span id="counter" class="text-danger">7</span> seconds</p>
            <a href="job_listing.php" class="btn btn-success px-5">Return to Find a job page</a> 
        </div>
      </div>
    </div>
	<script>
		window.addEventListener('load',startTheCountdown);
		function startTheCountdown()
		{
			let countdown=10;
			let counter=document.getElementById('counter');
			let id= setInterval(() =>{
				countdown--;
				counter.innerHTML=countdown.toString();
				if(countdown==0)
				{
					clearInterval(id);
					window.location.href='job_listing.php'
				}
			},1000);
		}
	</script>
  </body>
</html>