<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>



<body>
    <div class="registration-container">
        <h2>Registration</h2>
        <form action="registration_submit.php" method="POST">

            <input type="text" name="firstName" placeholder="First Name" style="width: 90%">
            <input type="text" name="lastName" placeholder="Last Name" style="width: 90%">
            <input type="email" name="email" placeholder="Email" style="width: 90%">
            <input type="text" name="username" placeholder="Username" style="width: 90%">
            <input type="password" name="password" placeholder="Password" style="width: 90%">
            <input type="password" name="confirm_password" placeholder="Confirm Password" style="width: 90%">

            <button type="submit" class="button" style="position:center">Submit</a>
        </form>

    </div>
</body>

</html>