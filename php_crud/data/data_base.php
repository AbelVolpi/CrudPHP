<?php
function conectDataBase()
{
    $bd = new PDO("mysql:host=localhost;dbname=crud", "root", "");
    if ($bd == null) {
        echo "Erro ao conectar no banco de dados";
    }
    return $bd;
}

function insertPerson($name, $email, $phone, $birth_date)
{
    $con = conectDataBase();
    $sql = "INSERT INTO pessoa VALUES (null, '$name', '$email', '$phone', '$birth_date') ";

    $resultQuery = $con->query($sql);
    if ($resultQuery == null) {
        echo "Erro ao inserir no banco de dados";
        return false;
    }
    return true;
}

function editPerson($id, $name, $email, $phone, $birth_date)
{
    $con = conectDataBase();
    $sql = " UPDATE pessoa set name='$name', email='$email', phone='$phone', birth_date='$birth_date'
    WHERE id=$id";
    $resultQuery = $con->query($sql);

    if ($resultQuery == false) {
        echo "deu erro ao editar";
    }
}

function deletePerson($id)
{
    $con = conectDataBase();
    $sql = "DELETE FROM pessoa WHERE id=$id";
    $resultQuery = $con->query($sql);

    if ($resultQuery == false) {
        echo "deu erro";
    }
}

function getPerson($id)
{
    $con = conectDataBase();
    $sql = "SELECT * FROM pessoa WHERE id=$id";
    $resultQuery = $con->query($sql);

    if ($resultQuery == false) {
        echo "deu erro";
    } else {
        $arrayPessoas = $resultQuery->fetchAll(PDO::FETCH_ASSOC);
    }
    return $arrayPessoas[0];
}


function getAllPeople()
{
    $con = conectDataBase();
    $sql = "SELECT * FROM pessoa";
    $resultQuery = $con->query($sql);
    $arrayPessoas = $resultQuery->fetchAll(PDO::FETCH_ASSOC);
    return $arrayPessoas;
}

function search($string){
    $con = conectDataBase();
    $sql = "SELECT * FROM pessoa WHERE id='$string' or name='$string' or email='$string' or phone='$string' or birth_date='$string'";
    $resultQuery = $con->query($sql);
   
    if ($resultQuery == false) {
        echo "deu erro";
    } else {
        $arrayPessoas = $resultQuery->fetchAll(PDO::FETCH_ASSOC);
    }
   
    return $arrayPessoas;
}

?>