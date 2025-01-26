<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="logout.php">
            <?php echo "Welcome<br>" . $_SESSION['uname']; ?>
            <input type="submit" class="btn" name="submit" value="Logout">
        </form>
</body>
</html>