<?php

session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login_screen.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/register_screen.css?v=<?php echo time(); ?>">
    <title>Register Screen</title>
</head>

<body>

    <!-- HEADER -->
    <div class="header">
        <div class="top-bar"></div>
    </div>

    <!-- BODY -->
    <div class="body">
        <form name="form" action="../data/register_person.php"  method="POST">
            <div class="box">
                <div class="attribute-row">
                    <div class="atribute-name">Nome:</div>
                    <div class="atribute-value">
                        <input type="text" name="name">
                    </div>
                </div>
                <div class="attribute-row">
                    <div class="atribute-name">Email:</div>
                    <div class="atribute-value">
                        <input type="text" name="email">
                    </div>
                </div>
                <div class="attribute-row">
                    <div class="atribute-name">Telefone:</div>
                    <div class="atribute-value">
                        <input type="text" name="phone">
                    </div>
                </div>
                <div class="attribute-row">
                    <div class="atribute-name">Nascimento:</div>
                    <div class="atribute-value">
                        <input type="text" name="birth_date">
                    </div>
                </div>
               
            </div>
            <div class="box-bottom">
                <div class="register-button ">
                    <a href="../php/list_screen.php">Cancelar</a>
                </div>
                <div class="register-button">
                    <input class="send-input" type="submit" value="Salvar">
                </div>
            </div>
        </form>
    </div>
</body>

</html>