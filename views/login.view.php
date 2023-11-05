<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
    <style>
    header {
        position: absolute;
        width: 100%;
    }

    footer {
        position: absolute;
        bottom: 0px;
        width: 100%;
    }

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
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        /* Black box shadow */
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

    button.button {
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
        position: relative;
        top: 20px;
    }
    </style>
</head>




<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="login_submit.php" method="POST">
            <input type="text" name="username" placeholder="Username" style="width: 90%;">
            <input type="password" name="password" placeholder="Password" style="width: 90%;">
            <button type="submit" class="button" style="position:center">Login</a>
        </form>

    </div>
</body>

</html>