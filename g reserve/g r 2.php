<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-image: url('https://ibb.co/JrWS3f4'); /* Replace with your image URL */
            background-size: cover;
            background-position: center;

        }

        .login-container { /*for centering the login table */
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        .login-container input { /*for the input of username and pass*/
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .login-container button { /*pour le button login */
            width: 100%;
            padding: 10px;
            background: #007bff;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            margin-bottom: 10px;
        }
        .login-container button:hover {
            background: #0056b3;
        }
        .login-container a {
            color: #007bff;
            text-decoration: none;
            font-size: 14px;
        }
        .login-container a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body style="background-image : url('https://ibb.co/JrWS3f4'); background-repeat: no-repeat;">

<div class="login-container">
    <h1>Login</h1>
    <form action="/login" method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit"> <a href="g r 1.php">Login</a> </button>
    </form>
    <p>Don't have an account? <a href="g r 3.php">Sign Up</a></p>


</div>
</body>
</html>
