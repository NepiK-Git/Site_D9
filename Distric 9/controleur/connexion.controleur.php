<?php require "modele/connexion.modele.php";



if (isset($_POST['connexion'])) {
    if (!empty($_POST['pseudo'])) {
        if (!empty($_POST['mdp'])) {
            $pseudo = $_POST['pseudo'];
            $mdp = sha1($_POST['mdp']);
            $requete = getUtilisateur($pseudo, $mdp);
            if ($requete) { // Si l'utilisateur existe
                if($requete['lvl'] == 0) { // Si le compte n'est pas confirmé
                    Alerts::setFlash("<strong>Vous êtes banis.</strong>", "danger");
                } else {
                    $_SESSION['id'] = $requete['id'];
                    $_SESSION['pseudo'] = $requete['pseudo'];
                    $_SESSION['firstName'] = $requete['firstName'];
                    $_SESSION['lastName'] = $requete['lastName'];
                    $_SESSION['datenaiss'] = $requete['datenaiss'];
                    $_SESSION['email'] = $requete['email'];
                    $_SESSION['telephone'] = $requete['telephone'];
                    $_SESSION['age'] = $requete['age'];
                    header('Location: compte');
                }
            } else {
                Alerts::setFlash("Identifiants incorrects.", "danger");
            }
        } else {
            Alerts::setFlash("Veuillez saisir votre mot de passe", "warning");
        }
    } else {
        Alerts::setFlash("Veuillez saisir votre pseudo", "warning");
    }
}

require "vue/connexion.php";

?>