<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color:rgb(191, 237, 255);
        }
        .container {
            max-width: 400px;
            margin: 5rem auto;
            padding: 2rem;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 1.5rem;
        }
        label {
            font-size: 1rem;
            color: #666;
            margin-bottom: 0.5rem;
            display: block;
        }
        input[type="email"], input[type="password"] {
            width: 100%;
            padding: 0.8rem;
            margin-bottom: 1.5rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }
        .btn {
            width: 100%;
            padding: 0.8rem;
            background-color:rgb(43, 40, 214);
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color:rgb(52, 25, 206);
        }
        .link {
            text-align: center;
            margin-top: 1rem;
        }
        .link a {
            text-decoration: none;
            color:rgb(25, 24, 36);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Forgot Password</h1>
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <label for="email">Enter your email address</label>
            <input type="email" name="email" id="email" required>
            
            <button type="submit" class="btn">Send Password Reset Link</button>
        </form>
        <div class="link">
            <a href="{{ route('login') }}">Back to Login</a>
        </div>
    </div>
</body>
</html>
