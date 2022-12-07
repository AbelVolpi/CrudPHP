<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/login_screen.css?v=<?php echo time(); ?>">
    <title>Login Screen</title>
</head>

<body>
    <!-- HEADER -->
    <div class="header"></div>

    <!-- body -->
    <div class="main">
        <form method="POST" action="../data/authentication.php" class="login-form">
            <input name="user" type="text" value="" placeholder="Usuário" /> <br />
            <input name="password" type="password" value="" placeholder="Senha" /> <br />
            <input id="button-input" name="sign-in" type="submit" value="Entrar" />
        </form>
    </div>

</body>

</html>