<?php
	session_start();
    ob_start();
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=mairie;charset=utf8', 'root', '');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
?>
<!DOCTYPE html>
<html>
<title>Mairie Villiers</title>
<div id="droite">

</div>
<div id="gauche">

</div>

<head>

    <link rel="stylesheet" type="text/css" href="css/style6.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<header>
    <align>
        <div id="img">
            <image src='images/icone.jpg' width='150' height='150'></image>
        </div>
        <div id="deb"><b>Mairie de</b><a>Villiers</a></div>
        <div id="connect"><a></a></div>
    </align>
</header>

<body>
    <div id="reseaux">
        <a>Nous contacter :</a><br>
        <p>01 49 41 31 00</p>
    </div>
    <a href="https://www.facebook.com/VilliersSurMarne/">
        <image id=fb src='images/fb.png' width='50' height='50'></image>
    </a>
    <a href="https://www.youtube.com/channel/UC8Mt0P_A7ariKmLIJpkEbfw">
        <image id=yt src='images/yt.png' width='70' height='70'></image>
    </a>
    <a href="https://www.villiers94.fr/contactez-nous/">
        <image id=gmail src='images/gmail.png' width='45' height='50'></image>
    </a>

    <div id="menu_top">

        <ul>
            <li><a class="blanc"><i class="fa fa-home"></i>bfe</a></li>
            <li><a href="index.php" title="Accueil" class="active"><i class="fa fa-home"></i>Accueil</a></li>
            <li><a href="Mariage.php" title="Ma Famille"><i class="fa fa-edit"></i>Ma Famille</a>
            </li>
            <li><a href="Enfant.php" title="Scolarité"><i class="fa fa-user"></i>Scolarité</a>
            </li>
            <li><a href="Evenement.php" title="Evènements"><i class="fa fa-inr"></i>Evènements</a>
            </li>
            <li><a href="Association.php" title="Ma Ville"><i class="fa fa-users"></i>Association</a>
            </li>
        </ul>
    </div>

  <div class="container" id="form">

            <div class="row">
                <div class="col-md-12 mt-4">
                    <h2>Espace de connexion administrateur :</h2>

                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <form class="mt-5" action="#" method="post">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email :</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="email" id="inputEmail3" required pattern="^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Mot de passe :</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="mdp" id="inputPassword3" required pattern="^[A-Za-z0-9]+$">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2">
                                <button type="submit" name="submit" class="btn btn-primary">Connexion</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php
                if(isset($_POST['submit']))
                {
                    $post['email']= $_POST['email'];
                    $post['mdp']= $_POST['mdp'];
                    
                    $error = [];
                    $mdpValide = false;
                    $errorSession = false;
                    if(!empty($_POST))
                    {
                        $post = array_map('strip_tags', $_POST);
                        $post = array_map('trim', $post);

                        
                        $select = $bdd->prepare('SELECT idad,email, mdp FROM admin WHERE email = :email');

                        $select->bindValue(':email', $post['email']);
                        if($select->execute())
                        {
                           $user = $select->fetch();//contient notre utilisateur relatif au le nom
                            if(!empty($user))
                            {
                                // on vérifie le mot de passe saisi et le mot de passe hashé
                                if($post['mdp'] == $user['mdp'])
                                {
                                    //ici le mot de passe est valide
                                    $mdpValide = true;
                                    
                                    $_SESSION['idad'] =$user['idad'];
                                    $_SESSION['email'] =$user['email'];
                                    $_SESSION['mdp']=$user['mdp'];
                                  
                                    
                                    //je redirige vers la page "accueil.php"
                                    header('Location: index-admin.php');
                                    ob_enf_fluch();
                                    die;                                                                                    
                                }
                                else 
                                {
                                    // Le mot de passe est invalide
                                    $error[] = '<div class="alert alert-danger text-center"><center></br>Utilisateur ou mot de passe incorrect(s).</center></div>';
                                }                           
                            }
                            else 
                            {
                                //utilisateur inconnu
                                $error[] = '<div class="alert alert-danger text-center"><center></br>Utilisateur ou mot de passe incorrect(s).</center></div>';
                            }
                        }
                        if(count($error)!=0)
                        {
                            foreach ($error as $key => $value)
                            {
                                echo $value.'<br>';
                            }
                        }
                    }
                }
            ?>

<footer>
    <div id="basg">
        <p>Horaires d'ouverture :<br><br>
            Lundi à jeudi : 8 h 30 - 12 h & 13 h 30 -17 h 15<br>
            Vendredi : 8 h 30 - 12 h & 13 h 30 - 17 h<br>
            Samedi : 8 h 30 - 11 h 45<br>
            Mardi : 13 h 30 - 17 h 15 : fermé (CMAT)
        </p>
        <a>Hôtel de ville :<br><br>
            Place de l'Hôtel-de-Ville<br>
            94350 Villiers-sur-Marne<br>
            Annexe :<br>
            10 chemin des Ponceaux<br>
            94350 Villiers-sur-Marne<br>
        </a>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5717.3054690426225!2d2.5377272030487084!3d48.824658712164215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e60dd923ea21e9%3A0xc083eaee84d3f86a!2sMairie%20de%20Villiers%20sur%20Marne!5e0!3m2!1sfr!2sfr!4v1587736631917!5m2!1sfr!2sfr" width="100" height="50" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
</footer>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>



</html>