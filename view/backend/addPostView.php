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
  
       	<h1>Billet simple pour l'Alaska - Admin</h1>


		<h2>Ajouter un chapitre :</h2>

		<aside>
		    <ul>
		        <li><a href="/forteroche/view/backend/admin.php">Accueil</a></li>
                <li><a href="/forteroche/view/backend/listPostsView.php">Voir tous les chapitres</a></li>
                <li><a href="/forteroche/view/backend/addPostView.php">Ecrire un chapitre</a></li>
                <li><a href="/forteroche/view/backend/commentsView.php">Voir tous les commentaires</a></li>
		    </ul>
		</aside>

		<form method="post" action="../model/addPost.php" enctype="multipart/form-data">

			<label for="title">Titre du chapitre</label>
			<input type="text" name="title" id="title">

			<label for="content">Contenu du chapitre</label>
			<textarea name="content" id="content"></textarea>

			<label for="image">Ajouter une image (tous formats | max. 1 Go) :</label><br />
			<input type="hidden" name="MAX_FILE_SIZE" value="1000000000" />
			<input type="file" name="image" />

			<input type="submit" name="submit">Publier le chapitre</input>

			<a href="#">Supprimer le chapitre</a>
		</form>
		





	</body>
</html>
