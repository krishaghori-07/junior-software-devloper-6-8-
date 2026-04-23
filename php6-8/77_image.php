<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" enctype="multipart/form-data" method="post">
        <input type="file" name="img"><br>
        <input type="submit" value="upload">

    </form>
    <?php
    if(isset($_FILES['img']))
        {
            echo "filename: " . $_FILES['img']['name'];
        }
    ?>
</body>
</html>