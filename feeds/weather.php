<!DOCTYPE html> 
<html lang="en"> 

<head> 
	<title></title>
    
</head>


<body>

<div id="WeatherFeedContent">
<?php	
	
	error_reporting(0);

	function getDirection($b)
	{
	   $dirs = array('North', 'North East', 'East', 'South East', 'South', 'South West', 'West', 'North West', 'North');
	   return $dirs[round($b/45)];
	}

	$xmlPath = "http://aviationweather.gov.dd/adds/dataserver_current/httpparam?dataSource=metars&requestType=retrieve&format=xml&stationString=EGKB&hoursBeforeNow=10&mostRecent=true";
	$xmlData = simplexml_load_file($xmlPath);


	if($xmlData) {

		$getObservationTime = $xmlData->xpath("/response/data/METAR[1]/observation_time");
		$getObservationDate = new DateTime($getObservationTime[0]);

		$getTemperature = $xmlData->xpath("/response/data/METAR[1]/temp_c");
		$getTemperatureFarenheit = ((9/5) * (int)$getTemperature[0] + 32);

		$getDewpoint = $xmlData->xpath("/response/data/METAR[1]/dewpoint_c");
		$getDewpointFarenheit = ((9/5) * (int)$getDewpoint[0] + 32);

		$getPressure = $xmlData->xpath("/response/data/METAR[1]/altim_in_hg");
		$getPressureMb = number_format((number_format((float)$getPressure[0],2)*33.8637526),0,'.','');

		$getWindDirectionDegrees = $xmlData->xpath("/response/data/METAR[1]/wind_dir_degrees");
		$getWindDirectionBearing = getDirection($getWindDirectionDegrees[0]);

		$getWindSpeedKnots = $xmlData->xpath("/response/data/METAR[1]/wind_speed_kt");
		$getWindSpeedMPH = number_format(((int)$getWindSpeedKnots[0] * 1.15077945),0);

		$getWindGustSpeedKnots = $xmlData->xpath("/response/data/METAR[1]/wind_gust_kt");
		$getWindGustSpeedMPH = number_format(((int)$getWindGustSpeedKnots[0] * 1.15077945),0);

		$getVisibilityMiles = $xmlData->xpath("/response/data/METAR[1]/visibility_statute_mi");
		$getVisibilityKm = number_format(((int)$getVisibilityMiles[0] * 1.609344),0);

		$getCloudCeiling = number_format((float)(($getTemperatureFarenheit-$getDewpointFarenheit)/4.4)*1000,0,'.','');

		$getNumberOfCloudReports = count($xmlData->xpath("/response/data/METAR[1]/sky_condition"));
		$getNumberOfCloudReportsSkyCover = $xmlData->xpath("/response/data/METAR[1]/sky_condition/@sky_cover");
		$getNumberOfCloudReportsCloudBase = $xmlData->xpath("/response/data/METAR[1]/sky_condition/@cloud_base_ft_agl");

		$cloudDefinitions = array(
		    "SKC" => "Clear sky",
		    "CLR" => "Clear",
		    "CAVOK" => "Ceiling and visibility ok",
		    "FEW" => "Few clouds",
		    "SCT" => "Scattered clouds",
		    "BKN" => "Broken clouds",
		    "OVC" => "Overcast",
		    "OVX" => "Obscured",
		);
	
?>

<ul>
	<li><strong>Observation date:</strong><?php echo $getObservationDate->format('l jS F Y'); ?></li>
	<li><strong>Observation time:</strong><?php echo $getObservationDate->format('H:i'); ?></li>
	<li><strong>Temperature:</strong><?php echo $getTemperature[0]; ?>&deg;C (<?php echo $getTemperatureFarenheit; ?>&deg;F)</li>
	<li><strong>Dewpoint:</strong><?php echo $getDewpoint[0]; ?>&deg;C (<?php echo $getDewpointFarenheit; ?>&deg;F)</li>
	<li><strong>Pressure (altimiter):</strong><?php echo number_format((float)$getPressure[0],2); ?> inches Hg (<?php echo $getPressureMb; ?> mb)</li>
	<li>
		<strong>Winds:</strong> 
		From the <?php echo $getWindDirectionBearing; ?> (<?php echo $getWindDirectionDegrees[0]; ?>&deg;) 
		at <?php echo $getWindSpeedKnots[0]; ?> knots (<?php echo $getWindSpeedMPH; ?> mph) 
		<?php if(isset($getWindGustSpeedKnots[0])) { ?>
		gusting to <?php echo $getWindGustSpeedKnots[0]; ?> knots (<?php echo $getWindGustSpeedMPH; ?> mph)
		<?php } ?>
	</li>
	<li><strong>Visibility:</strong><?php echo number_format((float)$getVisibilityMiles[0],0); ?> or more miles (<?php echo $getVisibilityKm; ?>+ km)</li>
	<li><strong>Ceiling:</strong><?php echo $getCloudCeiling; ?> feet</li>
	<?php for($i = 0; $i < $getNumberOfCloudReports; $i++) { ?>
		<li>
		<strong>Coluds:</strong><?php echo $cloudDefinitions["$getNumberOfCloudReportsSkyCover[$i]"]; ?> at <?php echo $getNumberOfCloudReportsCloudBase[$i]; ?> feet
		</li>
	<?php } ?>

</ul>


<?php } else { ?>
<iframe src="http://news.bbc.co.uk/weather/forecast/2098/Next3DaysEmbed.xhtml?target=_parent" allowTransparency="true" width="306" height="435" frameborder="0"></iframe>
<?php } ?>

</div>
</body> 


</html>

