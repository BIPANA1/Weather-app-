<!DOCTYPE html>
<html>
<head>
    <title>Weather App</title>
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
            margin-bottom: 20px;
            color: #333;
        }

        label {
            display: block;
            font-size: 16px;
            margin-bottom: 5px;
            color: #333;
        }

        input[type="text"] {
            width: calc(100% - 20px);
            padding: 10px;
            width: 40%;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Weather App</h1>

    <form action="/get-weather" method="post">
        @csrf
        <label for="city">Enter City:</label>
        <input type="text" id="city" name="city" required>
        <button type="submit">Get Weather</button>
    </form>
</body>
</html>
