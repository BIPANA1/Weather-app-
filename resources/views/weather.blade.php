<!DOCTYPE html>
<html>
<head>
    <title>Weather Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 500px;
            margin: 100px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        h1 {
            color: #333;
        }

        p {
            font-size: 18px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Current Weather in {{ $weatherData['name'] }}</h1>
        <p>Temperature: {{ $weatherData['main']['temp'] }} &#8451;</p>
        <p>Pressure: {{ $weatherData['main']['pressure'] }} hPa</p>
        <p>Feels Like: {{ $weatherData['main']['feels_like'] }} &#8451;</p>
        <p>Humidity: {{ $weatherData['main']['humidity'] }}%</p>
        <p>Description: {{ $weatherData['weather'][0]['description'] }}</p>
        <p>Minimum Temperature: {{ $weatherData['main']['temp_min'] }} &#8451;</p>
        <p>Maximum Temperature: {{ $weatherData['main']['temp_max'] }} &#8451;</p>
    </div>
</body>
</html>
