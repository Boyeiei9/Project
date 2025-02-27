<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        /* ใช้สไตล์เดียวกับหน้า Login */
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

        input {
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
            background-color: #45a049;
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
        <h1>Register</h1>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <label for="name">Name</label>
            <input type="text" name="name" id="name" required>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>

            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>

            <label for="password_confirmation">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required>

            <button type="submit" class="btn">Register</button>
        </form>
        <div class="link">
            <a href="{{ route('login') }}">Already have an account? Login</a>
        </div>
    </div>
</body>

</html>