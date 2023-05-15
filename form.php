<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="text-align: center;">
    <h1>Form</h1>
    <form action="" method="post">
        <input type="text" name="username" placeholder="username" style="padding: 1rem;"><br><br>
        <input type="password" name="password" placeholder="Password" style="padding: 1rem;"><br><br>
        <input type="submit" style="padding:1rem" name="submit"><br><br>
    </form>

    <?php

    if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $pass = $_POST['password'];
        echo "<h2>Username: " . $username . "</h2>";
        echo "<h2>Password: " . $pass . "</h2>";
    }

    ?>
</body>
</html>