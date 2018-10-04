<?php 
define('__CONFIG__', true);
require_once "inc/config.php"; 
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.17/css/uikit.min.css" />
</head>
<body>

 <div class="uk-section uk-container">
    <?php echo "Hello world. Today is:";
    echo date(" y m d") ?>
    <p>
        <a href="/php_login_system/login.php">Login</a>
        <a href="/php_login_system/register.php">Register</a>
    </p>
    </div>
    <?php require_once "inc/footer.php";
?>
</body>
</html>