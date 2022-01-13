<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php  include_once "app.php"; ?>
    <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
        <p>
            <label for="">Title</label>
            <input type="text" name="title">
        </p>
        <p>
            <label for="">Content</label>
            <textarea name="content" cols="50" rows="20" ></textarea>
        </p>
        <p>
            <label for="">tags</label>
            <textarea name="tags" cols="50" rows="20" placeholder="Introduce tags divided by comas" ></textarea>
        </p>
        <input type="submit" name="post-btn" value="post">
    </form>
</body>
</html>