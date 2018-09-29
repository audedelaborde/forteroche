<?php $title = 'Billet simple pour l\'Alaska'; ?>

<?php ob_start(); ?>
<h1>Mon super blog !</h1>
<p>Page d'erreur :</p>




<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>