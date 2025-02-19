<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            text-align: center;
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }
        .buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
        }
        .buttons a {
            text-decoration: none;
            padding: 12px 24px;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 500;
            transition: background 0.3s ease;
        }
        .buttons a.login {
            background: #007bff;
            color: white;
        }
        .buttons a.register {
            background: #28a745;
            color: white;
        }
        .buttons a:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Please Log In to Continue</h1>
        <div class="buttons">
            <a href="{{ route('login') }}" class="login">Log In</a>
            <a href="{{ route('register') }}" class="register">Register</a>
        </div>
    </div>
</body>
</html>