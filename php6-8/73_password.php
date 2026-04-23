<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="password" name="password" placeholder="password">
        <br>
        <input type="submit" value="submit">
        <?php
    if(isset($_POST['password']))
        {
            echo "password: " . $_POST['password'];
        }
    ?>
    </form>
</body>
</html>