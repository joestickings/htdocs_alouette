$(document).ready(function() {

			
			var CurrentTemp_C = getData.data.current_condition[0].temp_C;
			var CurrentTemp_F = getData.data.current_condition[0].temp_F;
			var CurrentTemp_Desc = getData.data.current_condition[0].weatherDesc[0].value;
			var CurrentTemp_Image = getData.data.current_condition[0].weatherIconUrl[0].value;
			var CurrentCloudCover = getData.data.current_condition[0].cloudcover;
			var CurrentHumidity = getData.data.current_condition[0].humidity;
			var CurrentObservationTime = getData.data.current_condition[0].observation_time;
			var CurrentPrecipitation = getData.data.current_condition[0].precipMM;
			var CurrentPressure = getData.data.current_condition[0].pressure;
			var CurrentVisibilityKM = getData.data.current_condition[0].visibility;
			var CurrentVisibilityMiles = Math.round((parseInt(getData.data.current_condition[0].visibility) * 0.621371192));
			var CurrentWindDirection = getData.data.current_condition[0].winddir16Point;
			var CurrentWindDegree = getData.data.current_condition[0].winddirDegree;
			var CurrentWindSpeedMPH = getData.data.current_condition[0].windspeedMiles;
			var CurrentWindSpeedKPH = getData.data.current_condition[0].windspeedKmph;

			var HTMLWeatherOutput = '<div class="weatherData contentFeature clear">';
			
			HTMLWeatherOutput += '<h2>Current weather at Biggin Hill</h2>';
			HTMLWeatherOutput += '<img src="'+CurrentTemp_Image+'" class="weatherImage leftImage" />';
			HTMLWeatherOutput += '<div class="weatherDesc">';
			HTMLWeatherOutput += '<h3>'+CurrentTemp_Desc+'</h3>';
			HTMLWeatherOutput += '<h4>Observation time: '+CurrentObservationTime+' (UTC)</h4>';
			HTMLWeatherOutput += '</div>';
			HTMLWeatherOutput += '<ul>';
			HTMLWeatherOutput += '<li><strong>Temperature:</strong> '+CurrentTemp_C+'&#176;c / '+CurrentTemp_F+'&#176;f</li>';
			HTMLWeatherOutput += '<li><strong>Cloud cover:</strong> '+CurrentCloudCover+'%</li>';
			HTMLWeatherOutput += '<li><strong>Humidity:</strong> '+CurrentHumidity+'%</li>';
			HTMLWeatherOutput += '<li><strong>Precipitation:</strong> '+CurrentPrecipitation+'mm</li>';
			HTMLWeatherOutput += '<li><strong>Pressure:</strong> '+CurrentPressure+'mb</li>';
			HTMLWeatherOutput += '<li><strong>Visibility:</strong> '+CurrentVisibilityMiles+' miles or more ('+CurrentVisibilityKM+'km)</li>';
			HTMLWeatherOutput += '<li><strong>Wind:</strong> '+CurrentWindDirection+' ('+CurrentWindDegree+'&deg;) '+CurrentWindSpeedMPH+'mph ('+CurrentWindSpeedKPH+'kmh)</li>';
			HTMLWeatherOutput += '</ul>';
			HTMLWeatherOutput += '</div>';
			
			HTMLWeatherOutput += '<h2>Biggin Hill 5 day weather forecast</h2>';

			HTMLWeatherOutput += '<ul class="weatherForecast clear">';
			for(i=0; i < getData.data.weather.length; i++)
			{
				
				var SplitDay = getData.data.weather[i].date.split("-");
				var EnglishDate = SplitDay[1]+"/"+SplitDay[2]+"/"+SplitDay[0];
				var convertDay = new Date(EnglishDate);
				
				
				
				var dayName=new Array();
				
				dayName[0]="Sunday";
				dayName[1]="Monday";
				dayName[2]="Tuesday";
				dayName[3]="Wednesday";
				dayName[4]="Thursday";
				dayName[5]="Friday";
				dayName[6]="Saturday";
				
				HTMLWeatherOutput += '<li>';
				HTMLWeatherOutput += '<img src="'+getData.data.weather[i].weatherIconUrl[0].value+'" class="weatherImage leftImage" />';
				HTMLWeatherOutput += '<div class="weatherDesc">';
				HTMLWeatherOutput += '<h3>'+dayName[convertDay.getDay()]+'</h3>';
				HTMLWeatherOutput += '<h4>'+getData.data.weather[i].weatherDesc[0].value+'</h4>';
				HTMLWeatherOutput += '</div>';
				HTMLWeatherOutput += '<p><strong>Min Temp:</strong> '+getData.data.weather[i].tempMinC+'&#176;c / '+getData.data.weather[i].tempMinF+'&#176;f</p>';
				HTMLWeatherOutput += '<p><strong>Max Temp:</strong> '+getData.data.weather[i].tempMaxC+'&#176;c / '+getData.data.weather[i].tempMaxF+'&#176;f</p>';
				HTMLWeatherOutput += '<p><strong>Precipitation:</strong> '+getData.data.weather[i].precipMM+'mm</p>';
				HTMLWeatherOutput += '<p><strong>Wind:</strong> '+getData.data.weather[i].winddir16Point+' ('+getData.data.weather[i].winddirDegree+'&deg;) '+getData.data.weather[i].windspeedMiles+'mph ('+getData.data.weather[i].windspeedKmph+'kmh)</p>';
				HTMLWeatherOutput += '</li>';
			
			}
			HTMLWeatherOutput += '</ul>';
			
			HTMLWeatherOutput += '<div style="clear: both;"><!-- --></div>';
			
			$("#WeatherInformation").append(HTMLWeatherOutput);

});