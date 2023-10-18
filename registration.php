<!DOCTYPE html>
<html>
<head>
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

    .registration-container {
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
      padding: 20px;
      width: 300px;
      text-align: center;
    }

    input {
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
  <div class="registration-container">
    <h2>Registration</h2>
    <input type="text" placeholder="First Name">
    <input type="text" placeholder="Last Name">
    <input type="email" placeholder="Email">
    <input type="text" placeholder="Username">
    <input type="password" placeholder="Password">
    <input type="password" placeholder="Confirm Password">
    <a href="" class="button">Submit</a>
  </div>
</body>
</html>
