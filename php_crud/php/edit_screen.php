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
    <link rel="stylesheet" href="../styles/edit_screen.css?v=<?php echo time(); ?>">
    <title>Edit Screen</title>
</head>

<body>
    <?php
    require_once "../data/data_base.php";
    $pessoa = getPerson($_GET['id']);
    //echo $pessoa['name'];
    ?>
    <!-- HEADER -->
    <div class="header">
        <div class="top-bar"></div>
    </div>

    <!-- BODY -->
    <div class="body">
        <form name="form" action="../data/edit_person.php?id=<?php echo $pessoa['id']; ?>" method="POST">
            <div class="box-bottom-top">
                <div class="tittle">
                    <h3> Edição de Cadastro</h3>
                </div>
                <div id="exclude-button" class="crud-buttons">
                    <a href="../data/delete_person.php?id=<?php echo $pessoa['id']; ?>">Excluir</a>
                </div>
            </div>
            <div class="box">
                <div class="attribute-row">
                    <div class="atribute-name">Nome:</div>
                    <div class="atribute-value">
                        <input type="text" name="name" value="<?php echo $pessoa['name']; ?>">
                    </div>
                </div>
                <div class="attribute-row">
                    <div class="atribute-name">Email:</div>
                    <div class="atribute-value">
                        <input type="text" name="email" value="<?php echo $pessoa['email']; ?>">
                    </div>
                </div>
                <div class="attribute-row">
                    <div class="atribute-name">Telefone:</div>
                    <div class="atribute-value">
                        <input type="text" name="phone" value="<?php echo $pessoa['phone']; ?>">
                    </div>
                </div>
                <div class="attribute-row">
                    <div class="atribute-name">Nascimento:</div>
                    <div class="atribute-value">
                        <input type="text" name="birth_date" value="<?php echo $pessoa['birth_date']; ?>">
                    </div>
                </div>
            </div>
            <div class="box-bottom-top">
                <div class="crud-buttons">
                    <a href="../php/list_screen.php">Cancelar</a>
                </div>
                <div class="crud-buttons">
                    <input class="send-input" type="submit" value="Salvar">
                </div>
            </div>
        </form>
    </div>


</body>

</html>