<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <?php  include_once "app.php"; ?>
    <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
    <fieldset>
            <label>Title
                <input type="text" name="title">
            </label>
    </fieldset>
    <fieldset>
            <label for="">Content
                <textarea name="content" cols="50" rows="20" ></textarea>
            </label>
            <label> Tags
                <textarea name="tags" cols="50" rows="20" placeholder="Introduce tags divided by comas" ></textarea>
            </label>
    </fieldset>
    <input type="submit" name="post-btn" value="post">
    </form>
</body>
</html>