<?php
require('controller/frontend.php');

try { 
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'listPosts') {
            listPosts();
        }
        elseif ($_GET['action'] == 'post') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                post();
            }
            else {
                // Erreur ! On arrête tout, on envoie une exception, donc au saute directement au catch
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
        elseif ($_GET['action'] == 'addComment') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                    addComment($_GET['id'], $_POST['author'], $_POST['comment']);
                }
                else {
                    // Autre exception
                    throw new Exception('Tous les champs ne sont pas remplis !');
                }
            }
            else {
                // Autre exception
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
    }
    else {
        listPosts();
    }
}
catch(Exception $e) { //S'il y a une erreur
    $errorMessage = $e->getMessage();
    require('view/frontend/errorView.php');
}

// Quant au contrôleur frontal, on peut le modéliser à l'aide d'une classe Routeur dont la méthode principale analyse la requête entrante pour déterminer l'action à entreprendre. On parle souvent de routage de la requête.

//Routeur.php

// require_once 'Controleur/ControleurAccueil.php';
// require_once 'Controleur/ControleurBillet.php';
// require_once 'Vue/Vue.php';

// class Routeur {

//   private $ctrlAccueil;
//   private $ctrlBillet;

//   public function __construct() {
//     $this->ctrlAccueil = new ControleurAccueil();
//     $this->ctrlBillet = new ControleurBillet();
//   }

  //    // Recherche un paramètre dans un tableau
  // private function getParametre($tableau, $nom) {
  //   if (isset($tableau[$nom])) {
  //     return $tableau[$nom];
  //   }
  //   else
  //     throw new Exception("Paramètre '$nom' absent");
  // }

//   // Traite une requête entrante
//   public function routerRequete() {
//     try {
//       if (isset($_GET['action'])) {
//         if ($_GET['action'] == 'billet') {
//           if (isset($_GET['id'])) {
//             $idBillet = intval($_GET['id']);
//             if ($idBillet != 0) {
//               $this->ctrlBillet->billet($idBillet);
//             }
//             else
//               throw new Exception("Identifiant de billet non valide");
//           }
//           else
//             throw new Exception("Identifiant de billet non défini");
//         }
//         else
//           throw new Exception("Action non valide");
//       }
//       else {  // aucune action définie : affichage de l'accueil
//         $this->ctrlAccueil->accueil();
//       }
//     }
//     catch (Exception $e) {
//       $this->erreur($e->getMessage());
//     }
//   }

//   // Affiche une erreur
//   private function erreur($msgErreur) {
//     $vue = new Vue("Erreur");
//     $vue->generer(array('msgErreur' => $msgErreur));
//   }
// }

//Le fichier principal index.php est maintenant simplifié à l'extrême. Il se contente d'instancier le routeur puis de lui faire router la requête.

//index.php

// <?php

// require 'Controleur/Routeur.php';

// $routeur = new Routeur();
// $routeur->routerRequete();


//L'ajout de nouvelles fonctionnalités se fait à présent en trois étapes :

// ajout ou enrichissement de la classe modèle associée ;
// ajout ou enrichissement d'une vue utilisant le gabarit pour afficher les données ;
// ajout ou enrichissement d'une classe contrôleur pour lier le modèle et la vue.