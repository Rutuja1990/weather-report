<!DOCTYPE html>
<head><title>Weather Report</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha256-YLGeXaapI0/5IgZopewRJcFXomhRMlYYjugPLSyNjTY=" crossorigin="anonymous" />

<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>


	<center><br><br>
		<form method="GET" action="get.php">

			<div class="container mt-5">
            <div class="row form-group form-inline" id="rowDiv">

            	<div class="col-12">
            <h2 class="text-center" style="font-size:50px;font-weight:600">
				Get Current Weather
			</h2>
			<div class="mt-5">
      			<input type="text" name="q" required class="form-control input-lg searchTxt">
            <button  type="submit" class="btn searchBtn"><span>Search</span></button>
           
            </div>
			</div>
            
            </div>

            
    </div>
		</form>
	</center>
</body>
</html>





















