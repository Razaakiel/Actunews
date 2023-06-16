<?php

/*
 * ************************************************************************************************
 * ****************************************INSCRIPTION*********************************************
 * ************************************************************************************************
 * */
if (!empty(isset($_POST['firstname'])) && !empty(isset($_POST['lastname'])) && !empty(isset($_POST['email'])) && !empty(isset($_POST['password']))) {
    $result = checkUserExist($_POST['email']);
    if (empty($result)){
        inscription($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['password']);
        $register = true;
        header('location: index.php');
    }
}

/**
 * @param $email
 * @return mixed
 * Je vérifie si le mail existe dans la BDD
 */
function checkUserExist($email){
    global $dbh;


    $sql = 'SELECT email FROM user WHERE email = :email';
    $query = $dbh -> prepare($sql);
    $query -> bindValue(':email', $email);
    $query -> execute();
    return $query -> fetch();
}


/**
 * @param string $firstname
 * @param string $lastname
 * @param string $email
 * @param string $password
 * @return void
 * J'enregistre le nouveau user dans la BDD
 */
function inscription(string $firstname, string $lastname, string $email, string $password): void
{
    global $dbh;
    $sql = 'INSERT INTO user (firstname, lastname, email, password, createdAt) VALUES (:firstname, :lastname, :email, :password, :createdAt)';
    $query = $dbh->prepare($sql);
    $query->bindValue(':firstname', $firstname);
    $query->bindValue(':lastname', $lastname);
    $query->bindValue(':email', $email);
    $query->bindValue(':password', $password);
    $query->bindValue(':createdAt', date('Y/m/d h:i:s'));
    $query->execute();
}


/*
 * ************************************************************************************************
 * ******************************************CONNEXION*********************************************
 * ************************************************************************************************
 * */

if(!empty(isset($_POST['email'])) && !empty(isset($_POST['password']))){
    $resultLogin = checkUserLogin($_POST['email'], $_POST['password']);
    if(!empty($resultLogin)){
        $isConnected = true;
        $_SESSION['user'] = $resultLogin['firstname'];

    }
}

/**
 * @param $email
 * @param $password
 * @return mixed
 * Je verifie si l'utilisateur est bien dans ma BDD
 */
function checkUserLogin($email, $password){
    global $dbh;


    $sql = 'SELECT * FROM user WHERE email = :email AND password = :password';
    $query = $dbh -> prepare($sql);
    $query -> bindValue(':email', $email);
    $query -> bindValue(':password', $password);
    $query -> execute();
    return $query -> fetch();
}