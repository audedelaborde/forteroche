<?php session_start(); 


// Connexion à la base de données
try
{
    //$db = new PDO('mysql:host=db752910020.db.1and1.com;dbname=db752910020;charset=utf8', 'dbo752910020', 'Forteroche1!');
    $db = new PDO('mysql:host=localhost;dbname=db752910020;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}


// Définition des variables
$login = $_POST['login'];
$password = $_POST['password'];

// Hachage du mot de passe
$password_hash = password_hash($password, PASSWORD_DEFAULT);

// Insertion du message à l'aide d'une requête préparée
// $req = $db->prepare('INSERT INTO user (login, password) VALUES(?, ?)');
// $req->execute(array($login, $password_hash));

// $req->closeCursor();  

//  Récupération de l'utilisateur et de son pass hashé
$req = $db->prepare('SELECT id, password FROM user WHERE login = :login');
$req->execute(array(
    'login' => $login));
$resultat = $req->fetch();

// Comparaison du pass envoyé via le formulaire avec la base
//$isPasswordCorrect = (md5($_POST['password']) == $resultat['password']);

// Comparaison du password envoyé via le formulaire avec la base
$isPasswordCorrect = password_verify($password, $resultat['password']);

if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !';
}
else
{
    if ($isPasswordCorrect) {
        // session_start();
       // $_SESSION['id'] = $resultat['id'];
        $_SESSION['login'] = $login;
        // $_SESSION['password'] = $password;
        // echo 'Vous êtes connecté !';
        // Redirection du visiteur vers la page d'admin
        header('Location: backend/admin.php');
    }
    else {
        echo 'Mauvais identifiant ou mot de passe !';
    }
}

$req->closeCursor();


function getPosts()
{
    $db = dbConnect();
    $req = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT 0, 50');

    return $req;
}

