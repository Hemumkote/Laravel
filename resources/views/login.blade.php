<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-form {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding: 25px 30px;
            width: 100%;
            max-width: 400px;
            border-left: 6px solid #007bff;
        }

        .login-form h2 {
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: 700;
            color: #333333;
            text-align: center;
        }

        .login-form label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #555555;
        }

        .login-form input {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #dddddd;
            border-radius: 4px;
            font-size: 14px;
            color: #555555;
            outline: none;
            transition: border-color 0.2s ease-in-out;
        }

        .login-form input:focus {
            border-color: #007bff;
            box-shadow: 0 0 4px rgba(0, 123, 255, 0.3);
        }

        .login-form button {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            border: none;
            color: white;
            border-radius: 4px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease, box-shadow 0.2s ease;
        }

        .login-form button:hover {
            background-color: #0056b3;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .login-form .extra-links {
            text-align: center;
            margin-top: 15px;
        }

        .login-form .extra-links a {
            color: #007bff;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.2s ease;
        }

        .login-form .extra-links a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <form action="{{ route('login') }}" method="POST" class="login-form">
        @csrf
        <h2>Welcome Back</h2>
        <label for="email">Email Address:</label>
        <input type="text" name="email" id="email" placeholder="Enter your email">
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" placeholder="Enter your password">
        <button type="submit">Login</button>
        <div class="extra-links">
            <a href="#">Forgot Password?</a> | <a href="#">Sign Up</a>
        </div>
    </form>
</body>
</html>
