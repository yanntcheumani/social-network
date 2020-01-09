<?php
$bdd = new PDO('mysql:host=localhost;dbname=devils;charset=utf8', 'root', '');


function detect_user_exist($mail)
{
    global $bdd;

    $reqmail = $bdd->prepare("SELECT * FROM membres WHERE mail = ?");
    $reqmail->execute(array($mail));
    return $reqmail->rowCount();
}

function connection($username, $password)
{
    global $bdd;

    /** @var $error */
    $username = htmlspecialchars($username);
    $password = sha1($password);
    $req_conn = $bdd->prepare("SELECT * from membres WHERE username = ? AND pasword = ?");
    $req_conn->execute(array($username, $password));
    $userexist = $req_conn->rowCount();
    if ($userexist == 1) {
        $userinfo = $req_conn->fetch();
        $_SESSION['id'] = $userinfo['id_user'];
        $_SESSION['pseudo'] = $userinfo['username'];
        $_SESSION['mail'] = $userinfo['email'];
        header("Location: profil.php?id=" . $_SESSION['id']);
    } else {
        $error = "</strong> Mauvais mail ou mot de passe ! </strong>";
    }
    return $error;
}

function sign_in($email, $pwd, $uname, $birthday)
{
    global $bdd;

    $uname = htmlspecialchars($uname);
    $email = htmlspecialchars($email);
    $birthday = date($birthday);
    $pwd = sha1($pwd);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

        if (detect_user_exist($email) == 0) {
            $req_signin = $bdd->prepare("insert into membres(username, pasword, email, birthday) VALUES(?, ?, ?, ?)");

            if ($req_signin->execute(array($uname, $pwd, $email, $birthday)))
                $error = "<p style='color: green'> bravo vous êtes inscris cliquez <a href='../templates/connexion.php'>ici </a>pour vous connecter</p>";
            else
                $error = "oups... désoler une erreur c'est produite lors de votre inscription veuillez recommencez s'il vous plaît";
        }else
            $error = "<p style='color: red'> utilisateur déja existant</p>";

    } else
        $error = "<p style='color: red'> veuillez rentrer une email valide s'il vous plaît</p>";
    return $error;
}

function get_infos_user($id_user)
{
    global $bdd;

    $req_infosuser = $bdd->prepare("SELECT * from membres WHERE id_user = ?");

    if ($req_infosuser->execute(array($id_user)))
        return $req_infosuser->fetch();
    else
        return NULL;
}
