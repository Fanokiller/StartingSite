
<?php
session_start();
    try
    {
        $bdd = new PDO('mysql:host=localhost;port=3308;dbname=Site;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
        $id_login = $bdd->prepare('SELECT user_id FROM utilisateur WHERE user_login = :user_login AND user_password = :user_password');
        $id_login->execute(array('user_login' => $_POST['user_name'],'user_password' => $_POST['user_password']));
        $test_login = $id_login->fetch();
    if (!$test_login){
            header('Location: /../siteJeux/traitement/erreur.php');
    }
    else{
            $_SESSION['user_login']=$_POST['user_name'];
            $_SESSION['user_password']=$_POST['user_password'];
            echo ('vous êtes connecté');
            header('Location: /../siteJeux/index.php');
    }
?>
