<!DOCTYPE html>
<html>
<head>

  <meta http-equiv="refresh" content="15; url="<?php echo $_SERVER['PHP_SELF']; ?>">
 </head>
										   
<body>
   
<h1>62101456,62101639,62106554</h1>
 <?php
$api_url = 'https://api.thingspeak.com/channels/1508001/feeds.json?results=1';
$json_data = file_get_contents($api_url);
$response_data = json_decode($json_data);
$user_data = $response_data->feeds;
$user_data = array_slice($user_data, 0);
?>  
<iframe src="https://thingspeak.com/channels/1508001/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15" 
height="250" width="500" frameBorder="0" title="Iframe Example"></iframe>
 <?php
   foreach ($user_data as $user) {
	echo "Body Temperature: ".$user->field1; 
      echo " C ";
   }?> 
 <br>   
<iframe src="https://thingspeak.com/channels/1508001/maps/channel_show" height="250" width="500" frameBorder="0" title="Iframe Example"></iframe>
<br>         
 </body>
</html>   
