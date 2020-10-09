

<html>
<head><title>Weather Report of <?php echo $_GET['q']; ?> </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha256-YLGeXaapI0/5IgZopewRJcFXomhRMlYYjugPLSyNjTY=" crossorigin="anonymous" />
<link rel="stylesheet" type="text/css" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
</head>

<body>




<?php
error_reporting(0);
$get = json_decode(file_get_contents('http://ip-api.com/json/'),true);


date_default_timezone_set($get['timezone']);
$city = $_GET['q'];
 $string = "http://api.openweathermap.org/data/2.5/weather?q=".$city."&units=metric&appid=4c7de572d7adc4dd14ef3cd168af3f24";
 $data = json_decode(file_get_contents($string),true);
 
 $temp = $data['main']['temp'];
 
 $icon = $data['weather'][0]['icon'];


 $visibility = $data['visibility'];
 $visibilitykm = $visibility / 1000;
 $country =  "<h1 class='w3-xxxlarge w3-animate-zoom'><b>".$data['name'].",".$data['sys']['country']."</h1></b>";
 
 $logo = "<center><img src='http://openweathermap.org/img/w/".$icon.".png'></center>";
 $desc = "<b><p>".$data['weather'][0]['description']."</p></b>";
 
 $temperature =  "<b>Temp:".$temp."°C</b><br>";
 $clouds = "<b>Clouds:".$data['clouds']['all']."%</b><br>";
 $humidity = "<b>Humidity:".$data['main']['humidity']."%</b><br>";
 $windspeed = "<b>Wind Speed:".$data['wind']['speed']."m/s</b><br>";
 $pressure = "<b>Pressure:".$data['main']['pressure']."hpa</b><br>";
 $visibility =  "<b>Visibility:".$visibilitykm."Km</b><br>";
 $sunrise = "<b>Sunrise:".date('h:i A', $data['sys']['sunrise'])."</b><br>";
 $sunset = "<b>Sunset:".date('h:i A', $data['sys']['sunset'])."</b>";

 
$currentTime = time();
 
?>

	 <div class="row" id="showWeatherForecast">
  

    <div class="col-12">
      <div class=" bordered" style="background:url('back.jpg') no-repeat ;border-top:0px;background-size: cover; padding-top:10%">
        <div class="row">
          <div class="col-4 mt-5" style="font-size:20px;">
           
            <div class="weather-icon">
              
              <p class="mt-5"><strong>Current Day : </strong><?php echo date("l", $currentTime);?></p>
              <p><strong>Date and Time : </strong><?php echo date("jS F, Y g:i a", $currentTime); ?></p>
              
            </div>
          </div>
          <div class="col-4 mt-5" style="font-size:20px;">
 
              
            <div class="weather-icon text-align-center">
             <?php echo $temperature; ?>
			<?php echo $clouds; ?>
			<?php echo $humidity; ?>
			<?php echo $$windspeed; ?>
			<?php echo $pressure; ?>
			<?php echo $$visibility; ?>
			<?php echo $sunrise; ?>
			<?php echo $sunset; ?>
            </div>
          </div>
          <div class="col-4 mt-5" style="font-size:20px;">
           
            <div class="weather-icon">
              <p><?php 
				echo $country;
				echo $logo; 
				echo "<center><h2>".$desc."</h1></center>";
				?></p>
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 
	
	</div>
</body>
</html>