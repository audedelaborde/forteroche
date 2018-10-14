<?php session_start(); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <?php $title = 'Billet simple pour l\'Alaska - Admin'; ?>
         <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  		<script>tinymce.init({ selector:'textarea' });</script>
    </head>
    <body>
         <?php ob_start(); ?>
  
       	<h1>Billet simple pour l'Alaska - Admin</h1>
        <h2>Liste des commentaires</h2>

        <aside>
            <ul>
               <li><a href="/forteroche/view/backend/admin.php">Accueil</a></li>
                <li><a href="/forteroche/view/backend/listPostsView.php">Voir tous les chapitres</a></li>
                <li><a href="/forteroche/view/backend/addPostView.php">Ecrire un chapitre</a></li>
                <li><a href="/forteroche/view/backend/commentsView.php">Voir tous les commentaires</a></li>
            </ul>
        </aside>

        <a href="commentsView.php">Commentaires signalés</a>
        
        <a href="#">Supprimer ce commentaire</a>

        <?php $content = ob_get_clean(); ?>


		<?php require('../view/frontend/template.php'); ?>

     
           
    </body>
</html>