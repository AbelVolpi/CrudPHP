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
    <link rel="stylesheet" href="../styles/list_screen.css?v=<?php echo time(); ?>">
    <title>List Screen</title>
</head>

<body>
    <!-- HEADER -->
    <div class="header">
        <div class="top-bar-search">
            <div class="search-field">
                <form class="search" action="../data/search_data.php">
                    <input type="text" placeholder="Search.." name="searchString">
                    <button> <img class="search-image" src="../res/search.svg"></button>
                </form>
            </div>
        </div>
    </div>

    <!-- BODY -->
    <div class="body">
        <div class="box">
            <div id="table-title">
                <div  id="id-field" class="list-part">Código</div>
                <div class="list-part">Nome</div>
                <div class="list-part">Email</div>
                <div class="list-part">Telefone</div>
                <div class="list-part">Nascimento</div>
                <div class="list-part"></div>
            </div>
            <?php
            require_once "../data/data_base.php";

            if (isset($_GET['searchString'])) {
                $arrayPessoas = search($_GET['searchString']);
            } else {
                $arrayPessoas = getAllPeople();
            }
            foreach ($arrayPessoas as $pessoa) {
            ?>
            <div class="list-item">
                <div id="id-field" class="list-part">
                    <h4>
                        <?php echo $pessoa['id']; ?>
                    </h4>
                </div>
                <div class="list-part">
                    <?php echo $pessoa['name']; ?>
                </div>
                <div class="list-part">
                    <?php echo $pessoa['email']; ?>
                </div>
                <div class="list-part">
                    <?php echo $pessoa['phone']; ?>
                </div>
                <div class="list-part">
                    <?php echo $pessoa['birth_date']; ?>
                </div>
                <div id="edit-field" class="list-part">
                    <a href="edit_screen.php?id=<?php echo $pessoa['id']; ?>">Editar</a>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
        <div class="box-bottom">
            <div class="register-button">
                <a href="register_screen.php">Cadastrar</a>
            </div>
        </div>
    </div>
</body>

</html>