
<?php
try
{
    $bdd = new PDO('mysql:host=localhost;port=3308;dbname=site;charset=utf8', 'root', '');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

// if (isset($_POST['J_titre']) && isset($_POST['J_editeur']) /*&& isset($_POST['J_type']) && isset($_POST['jour']) && isset($_POST['mois']) && isset($_POST['annees'])*/) {

    if (strlen($_POST['J_titre']) != 0 && strlen($_POST['J_editeur']) != 0 /*&& strlen($_POST['J_type']) !=0)*/) {
        // $contenu_binaire=file_get_contents($_FILES['user_image']['tmp_name']);
        // $image = base64_encode($contenu_binaire);
        $req = $bdd->prepare('INSERT INTO jeux (J_titre,J_editeur,J_type) VALUES (:J_titre, :J_editeur,:J_type)');
        $req->execute(array(
            'J_titre' => $_POST['J_titre'],
            'J_editeur' => $_POST['J_editeur'],
            'J_type' => $_POST['J_type']
            #'user_image' => $image
            ));
        header('Location: /../siteJeux/traitement/succes.php');
    } else {
        header('Location: /../siteJeux/traitement/erreur.php');
    }

// } else {
//     header('Location: /../siteJeux/traitement/erreur.php');

// }

?>
<?php include __DIR__ . '/../foot.php' ?>