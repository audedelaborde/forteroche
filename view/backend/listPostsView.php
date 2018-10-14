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
        <h2>Liste des chapitres</h2>

        <aside>
            <ul>
                <li><a href="/forteroche/view/backend/admin.php">Accueil</a></li>
                <li><a href="/forteroche/view/backend/listPostsView.php">Voir tous les chapitres</a></li>
                <li><a href="/forteroche/view/backend/addPostView.php">Ecrire un chapitre</a></li>
                <li><a href="/forteroche/view/backend/commentsView.php">Voir tous les commentaires</a></li>
            </ul>
        </aside>


        <?php
        while ($data = $posts->fetch())
        {
        ?>
            <div class="news">
                <h3>
                    <?= htmlspecialchars($data['title']) ?>
                    <em>le <?= $data['creation_date_fr'] ?></em>
                </h3>
                
                <p>
                    <?= nl2br(htmlspecialchars($data['content'])) ?>
                    <br />

                    <a href="index.php?action=post&amp;id=<?= $data['id'] ?>">Lire le chapitre</a>

                    <a href="#">Supprimer le chapitre</a>

                    <em><a href="index.php?action=post&amp;id=<?= $data['id'] ?>">Commentaires de ce chapitre</a></em>
                </p>
            </div>
        <?php
        }
        $posts->closeCursor();
        ?>

        <?php $content = ob_get_clean(); ?>

     
           
    </body>
</html>