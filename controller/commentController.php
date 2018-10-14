<?php

require __DIR__ . ('/../manager/Comment.php');

class CommentController
{
    public function listAction()
    {
        $commentManager = new CommentManager();
        $comments = $commentManager->getComments($postId);
        
        foreach ($comments as $comment) {
            echo $comment->getId($postId) . $comment->getAuthor($postId) . $post->getComment($postId) . '<br>';
        }

        //$indexModel = new indexModel();

         // require('/forteroche/view/frontend/listPostsView.php');
        // echo "liste des posts";
    }

    public function addAction($postId, $author, $comment)
    {
        // $affectedLines = postComment($postId, $author, $comment);

        // if ($affectedLines === false) {
        //     // Erreur gérée. Elle sera remontée jusqu'au bloc try du routeur !
        //     throw new Exception('Impossible d\'ajouter le commentaire !');
        // }
        // else {
        //     header('Location: index.php?action=post&id=' . $postId);
        // }
        echo "ajoute un commentaire";
    }

    public function deleteAction(){
        echo "efface un commentaire";
    }

    public function reportAction(){
        echo "signale un commentaire";
    }
}


// require('model/frontend.php');
// try {

//     if ($_GET['action'] == 'add') {
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
    
            // if(!isset($_GET['id']) && $_GET['id'] < 0) {
            //     throw new Exception('Aucun identifiant de billet envoyé');                      
            // }
            // if(empty($_POST['author']) && empty($_POST['comment'])) {
            //     throw new Exception('Tous les champs ne sont pas remplis !');    
            // }
            // else {
            //     addAction($_GET['id'], $_POST['author'], $_POST['comment']);
            // }
//         }
//     }

// catch(Exception $e) { 
//     $errorMessage = $e->getMessage();
//     require('view/frontend/errorView.php');
// }

function listAction()
{
    // $posts = getComments();

    // require('view/frontend/commentsView.php');
    echo "liste des commentaires";
}

function addAction($postId, $author, $comment)
{
    // $affectedLines = postComment($postId, $author, $comment);

    // if ($affectedLines === false) {
    //     // Erreur gérée. Elle sera remontée jusqu'au bloc try du routeur !
    //     throw new Exception('Impossible d\'ajouter le commentaire !');
    // }
    // else {
    //     header('Location: index.php?action=post&id=' . $postId);
    // }
    echo "ajoute un commentaire";
}

function deleteAction(){
    echo "efface un commentaire";
}

function reportAction(){
    echo "signale un commentaire";
}
