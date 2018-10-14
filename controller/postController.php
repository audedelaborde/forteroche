<?php

require __DIR__ . ('/../manager/Post.php');

class PostController
{
    public function listAction()
    {
        $postManager = new PostManager();
        $posts = $postManager->getPosts();
        
        foreach ($posts as $post) {
            echo $post->getId() . $post->getTitle() . $post->getContent() . '<br>';
        }

        //$indexModel = new indexModel();

         // require('/forteroche/view/frontend/listPostsView.php');
        // echo "liste des posts";
    }
}


// function oneAction()
// {
//     echo "affiche le chapitre " . $_GET['id'];
//     $post = getPost($_GET['id']);
    // $comments = getComments($_GET['id']);

//     require('/forteroche/view/frontend/postView.php');
// }
