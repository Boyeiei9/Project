<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
        }
        header {
            background-color:rgb(38, 41, 204);
            color: white;
            padding: 1rem 2rem;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        header h1 {
            margin: 0;
            font-size: 2.5rem;
        }
        .container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 1rem;
            background: white;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
        }
        .intro {
            text-align: center;
            margin-bottom: 2rem;
        }
        .intro h2 {
            font-size: 2rem;
            margin-bottom: 0.5rem;
        }
        .intro p {
            font-size: 1.2rem;
            color: #666;
        }
        .actions {
            text-align: center;
            margin-top: 2rem;
        }
        .actions a {
            display: inline-block;
            text-decoration: none;
            color: white;
            background-color: #4CAF50;
            padding: 0.8rem 1.5rem;
            margin: 0 1rem;
            border-radius: 5px;
            font-size: 1rem;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        .actions a:hover {
            background-color: #45a049;
        }
        footer {
            text-align: center;
            margin-top: 2rem;
            padding: 1rem;
            color: #aaa;
        }
    </style>
</head>
<body>
    <header>
        <h1>Project Management System</h1>
    </header>

    <div class="container">
        <div class="intro">
            <h2>Welcome to Laravel XI</h2>
            <p>Manage your projects efficiently with our simple and powerful system.</p>
        </div>
        
        <div class="actions">
            <a href="{{ route('register') }}">Register</a>
            <a href="{{ route('login') }}">Login</a>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 Laravel XI Project Management. All rights reserved.</p>
    </footer>
</body>
</html>
