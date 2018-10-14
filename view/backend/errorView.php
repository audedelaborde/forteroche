<?php session_start(); 
?>
<?php $title = 'Billet simple pour l\'Alaska'; ?>

<?php ob_start(); ?>
<h1>Billet simple pour l'Alaska - Admin</h1>
<p>Page d'erreur :</p>




<?php $content = ob_get_clean(); ?>

<!-- <?php require('template.php'); ?> -->