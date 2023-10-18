<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .login-container {
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Black box shadow */
      padding: 20px;
      width: 300px;
      text-align: center;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 3px;
    }

    a.button {
      display: block;
      width: 90%;
      align-items: center;
      padding: 10px;
      margin: 5px;
      background-color: gray;
      border: none;
      color: #fff;
      border-radius: 3px;
      text-decoration: none;
      cursor: pointer;
    }
  </style>
</head>
<body>
<div class="login-container">
    <h2>Login</h2>
    <input type="text" placeholder="Username">
    <input type="password" placeholder="Password">
    <a href="#" class="button">Login</a>
    <a href="#" class="button">Sign Up</a>
  </div>
</body>
</html>