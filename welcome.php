<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <style>
        body {
            background-color: #1c1b2e;
            height: 100vh;
            margin: 0;
            color: white;
            font-family: Arial, sans-serif;
        }

        .logo {
            color: #fff;
            font-size: 45px;
        }

        .logo-highlight {
            color: purple;
        }

        .log {

            display: flex;
            justify-content: center;
        }

        .login-button {
            background-color: transparent;
            color: #fff;
            border: 2px solid rgba(255, 255, 255, 0.8);
            border-radius: 4px;
            padding: 10px 20px;
            font-size: 29px;
            cursor: pointer;
            transition: background-color 0.3s, border-color 0.3s;
        }

        .login-button:hover {
            background-color: purple;
            border-color: purple;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="logo">TECHNO<span class="logo-highlight">HACKS</span></h1>
    </div>
    <div class="log">
        <h1>Login Successfull!!</h1>
    </div>
    <div class="button-container">
        <button class="login-button" onclick="logout()" value="Logout">Logout</button>
    </div>

    <script>
        function logout() {
            window.location.href = "LoginPage.php";
            alert("You really want to Logout!!");
        }
    </script>
</body>

</html>