<?php
function erreur($err='')
{
   $mess=($err!='')? $err:'Une erreur inconnue s\'est produite';
   exit('<p>'.$mess.'</p>
   <p>Cliquez <a href="/../siteJeux/index.php">ici</a> pour revenir à la page d\'accueil</p></div></body></html>');
}
?>
<?php
define('ERR_IS_CO','Vous ne pouvez pas accéder à cette page si vous n\'êtes pas connecté');
?>
<?php
session_start();
session_destroy();
$titre="Déconnexion";


echo '<p>Vous êtes à présent déconnecté <br />
Cliquez <a href="/../siteJeux/index.php">ici</a> pour revenir à la page principale</p>';
echo '</div></body></html>';
header('Location: /../siteJeux/index.php');
?>