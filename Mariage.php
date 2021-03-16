<?php
	require_once("fonction.php");
?>
<!DOCTYPE html>
<html>
<title>Mairie Villiers</title>
<div id="droite">

</div>
<div id="gauche">

</div>

<head>

    <link rel="stylesheet" type="text/css" href="css/style5.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<header>
    <align>
        <div id="img">
            <image src='images/icone.jpg' width='150' height='150'>
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
        <image id=fb src='images/fb.png' width='50' height='50'>
    </a>
    <a href="https://www.youtube.com/channel/UC8Mt0P_A7ariKmLIJpkEbfw">
        <image id=yt src='images/yt.png' width='70' height='70'>
    </a>
    <a href="https://www.villiers94.fr/contactez-nous/">
        <image id=gmail src='images/gmail.png' width='45' height='50'>
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
    <div id="form" class="container" mb-5>
        <center><a>
                <form method="post" action=""><br><br>
                    <table border="0">
                        <tr>
                            <td>
                                <h2>Prise de Rendez-vous Mariage :</h2><br><br>
                            </td>
                        </tr>
                        <br>
                        <tr>
                            <td>N° Sécu sociale du premier citoyen :
                            <input type="text" name="idpersonne1"></td>
                        </tr>
                        <tr>
                            <td>Prénom du premier citoyen : 
                            <input type="text" name="prenomH"></td>
                        </tr>
                        <tr>
                            <td>Nom du premier citoyen :
                            <input type="text" name="nomH"></td>
                        </tr>
                        <tr>
                            <td><label for="Sexe">Sexe :</label>
                            <select id="Sexe" name="Sexe">
                                    <option value="Homme">Homme</option>
                                    <option value="Femme">Femme</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td><br><br>N° Sécu sociale du deuxième citoyen :
                            <input type="text" name="idpersonne2"></td>
                        </tr>
                        <tr>
                            <td>Prénom du deuxième citoyen :
                            <input type="text" name="prenomH"></td>
                        </tr>
                        <tr>
                            <td>Nom du deuxième citoyen :
                            <input type="text" name="nomH"></td>
                        </tr>
                        <tr>
                            <td><label for="Sexe2">Sexe :</label>
                            <select id="Sexe2" name="Sexe">
                                    <option value="Homme2">Homme</option>
                                    <option value="Femme2">Femme</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td><br><br>Date du Mariage :
                            <input type="date" name="Datehm"></td>
                        </tr>
                        <tr>
                            <td><br><br><input type="reset" name="Annuler" value="Annuler">
                            

                                <input type="submit" name="Valider" value="Valider">
                            </td>
                        </tr>
                    </table>
                </form>
            </a>
    </div>
          <center>  <div id="phrase">
            <?php 
	if(isset($_POST['Valider']))
	{
		insertMariage($_POST);
		echo"<br/>Inscription réussie </br>";
	}
?>
       </div>
        </center>
    

        
</body>

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


<!--
<?php
$lesmariage=selectAllMariage();

foreach($lesmariage as $unemariage)
{
	echo "<tr><td>".$unemariage['idpersonne1']."</td>
				<td>".$unemariage['idpersonne2']."</td>
				<td>".$unemariage['Datehm']."</td>
				<td>".$unemariage['DateD']."</td>
			</tr>";
}
?>
-->

</html>