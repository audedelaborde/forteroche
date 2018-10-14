<?php session_start(); 
?>

<?php
//require('controller/adminController.php');

// try { 
//     if (isset($_GET['action'])) {
//         if ($_GET['action'] == 'listPosts') {
//             listPosts();
//         }
//         elseif ($_GET['action'] == 'post') {
//             if (isset($_GET['id']) && $_GET['id'] > 0) {
//                 post();
//             }
//             else {
//                 throw new Exception('Aucun identifiant de billet envoyé');
//             }
//         }
//         elseif ($_GET['action'] == 'addComment') {
//             if (isset($_GET['id']) && $_GET['id'] > 0) {
//                 if (!empty($_POST['author']) && !empty($_POST['comment'])) {
//                     addComment($_GET['id'], $_POST['author'], $_POST['comment']);
//                 }
//                 else {
//                     throw new Exception('Tous les champs ne sont pas remplis !');
//                 }
//             }
//             else {
//                 throw new Exception('Aucun identifiant de billet envoyé');
//             }
//         }
//     }
//     else {
//         listPosts();
//     }
// }
// catch(Exception $e) { 
//     $errorMessage = $e->getMessage();
//     require('view/backend/errorView.php');
// }
?>
 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
        <link href="../../public/css/styles.css" rel="stylesheet" /> 
        <link href="../../public/css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  		<script>tinymce.init({ selector:'textarea' });</script>
    </head>
        
    <body>
        <h1>Billet simple pour l'Alaska - Admin</h1>
        <?php if (isset($_SESSION['login'])){ ?>
            <p>Bienvenue <?php echo $_SESSION['login']; ?> !</p>

        <aside>
            <ul>
              <li><a href="/forteroche/view/backend/admin.php">Accueil</a></li>
                <li><a href="/forteroche/view/backend/listPostsView.php">Voir tous les chapitres</a></li>
                <li><a href="/forteroche/view/backend/addPostView.php">Ecrire un chapitre</a></li>
                <li><a href="/forteroche/view/backend/commentsView.php">Voir tous les commentaires</a></li>
                <!-- <li><a href="commentsView.php">Commentaires signalés</a></li> -->
            </ul>
        </aside>


        <?php } 

        else { ?>

            <p>Veuillez vous connecter pour accéder à l'administration de ce site.</p>

            <form action="../../model/Admin.php" method="post">
                <p>
                    <label for="login">Pseudo : </label>
                    <input type="text" name="login">
                </p>
                <p>
                    <label for="password">Mot de passe : </label>
                    <input type="password" name="password">
                </p>
                <p>
                    <label for="checkbox">Rester connecté : </label>
                    <input type="checkbox" name="checkbox">
                </p>
                <p>
                    <input type="submit" name="submit" value="Se connecter">
                </p>
            </form>

        <?php } ?>

        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="../../public/js/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>