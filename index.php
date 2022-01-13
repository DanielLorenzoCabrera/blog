<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
        <p>
            <label for="">Title</label>
            <input type="text" name="title">
        </p>
        <p>
            <label for="">Content</label>
            <input type="text" name="content" >
        </p>
        <input type="submit" name="post-btn" value="post">
    </form>
    <?php  include_once "app.php"; ?>
</body>
</html>