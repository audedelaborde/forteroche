<?php

// require('model/backend.php');

try { 
    if (!isset($_GET['action'])) {
            listAction();
        }
        if ($_GET['action'] == 'list') {
            listAction();
        }

        elseif ($_GET['action'] == 'one') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                oneAction();
            }
            else {
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }

        elseif ($_GET['action'] == 'create') {
            createAction();
        }

        elseif ($_GET['action'] == 'deletePost') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                deletePostAction();
            }
            else {
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }

        elseif ($_GET['action'] == 'update') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                updateAction();
            }
            else {
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }

        elseif ($_GET['action'] == 'deleteCommentAction') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                deleteCommentAction();
            }
            else {
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
    }
catch(Exception $e) { 
    $errorMessage = $e->getMessage();
    require('view/frontend/errorView.php');
}

function listAction(){
    // $posts = getPosts();

	echo "liste des chapitres";
    require('view/backend/listPostsView.php');
}

function oneAction(){
    //$post = getPost($_GET['id']);
//     $comments = getComments($_GET['id']);

	echo "affiche le chapitre" . $_GET['id'];
	//require('view/backend/postView.php');
}

function createAction(){
	echo "crée un chapitre";
}

function deletePostAction(){
	echo "efface le chapitre" . $_GET['id'];
}

function updateAction(){
	echo "modifie le chapitre" . $_GET['id'];
}

function deleteCommentAction(){
	echo "efface le commentaire" . $_GET['id'];
}

// function addComment($postId, $author, $comment)
// {
//     $affectedLines = postComment($postId, $author, $comment);

//     if ($affectedLines === false) {
//         // Erreur gérée. Elle sera remontée jusqu'au bloc try du routeur !
//         throw new Exception('Impossible d\'ajouter le commentaire !');
//     }
//     else {
//         header('Location: index.php?action=post&id=' . $postId);
//     }
// }
