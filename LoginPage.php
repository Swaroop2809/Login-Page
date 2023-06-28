<?php
include("login.php");
?>
<!DOCTYPE html>
<html>
<head>
  <style>
    body {
      background-color: #1c1b2e;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      font-family: Arial, sans-serif;
    }

    ::placeholder {
      color: rgb(221, 221, 221);
    }

    .container {
      width: 500px;
      display: flex;
      justify-content: center;
      flex-direction: column;
      align-items: center;
      border: 2px solid red;
      border-radius: 10px;
      box-shadow: 0 0 30px white;
      padding: 5px;
    }

    .nav-bar {
      text-align: center;
      margin-bottom: 20px;
    }

    .logo {
      color: #fff;
      font-size: 45px;
    }

    .logo-highlight {
      color: purple;
    }



    .login-heading {
      color: white;
      text-align: center;
      font-size: 40px;
    }

    .input-container {
      margin-bottom: 20px;
    }

    .email-input,
    .password-input {
      background-color: transparent;
      border: none;
      border-bottom: 1px solid rgba(255, 255, 255, 0.8);
      padding: 10px;
      color: #fff;
      width: 100%;
      transition: border-color 0.3s;
    }

    .email-input:hover,
    .password-input:hover {
      border-color: purple;
    }

    .email-input:focus,
    .password-input:focus {
      border-color: purple;
      outline: none;
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
      width: 100%;
    }

    input[type="button"]:hover {
      background-color: rgb(101, 101, 101);
      color: #fff;
    }

    .login-button:hover {
      background-color: purple;
      border-color: purple;
    }

    .email-input,
    .password-input {
      background-color: transparent;
      border: none;
      border-bottom: 1px solid rgba(255, 255, 255, 0.8);
      padding: 12px;
      color: #fff;
      width: 100%;
      transition: border-color 0.3s;
      font-size: 28px;
    }
  </style>
</head>

<body>


  <div class="container">
    <nav class="nav-bar">
      <h1 class="logo">TECHNO<span class="logo-highlight">HACKS</span></h1>
    </nav>
    <div class="glass-container">
      <h1 class="login-heading"><b>Login </b></h1>
      <form name="form" action="login.php" onsubmit="return isvalid()" method="POST">
        <div class="input-container">
          <input type="email" class="email-input" name="user" placeholder="Email">
        </div>
        <div class="input-container">
          <input type="password" class="password-input" name="pass" placeholder="Password">
        </div>
        <div class="button-container">
          <button class="login-button" name="submit" value="Login" type="submit">Login</button>
        </div>
      </form>
    </div>
  </div>

  <script>
    function isvalid() {
      var user = document.form.user.value;
      var pass = document.form.pass.value;
      if (user.length == "" && pass.length == "") {
        alert(" Username and password field is empty!!!");
        return false;
      } else if (user.length == "") {
        alert(" Username field is empty!!!");
        return false;
      } else if (pass.length == "") {
        alert(" Password field is empty!!!");
        return false;
      }

    }
  </script>
</body>

</html>