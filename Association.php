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

    <link rel="stylesheet" type="text/css" href="css/style3.css" />
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

    <div id="form">
        <center><a>
                <form method="post" action=""><br><br>
                    <table border="0">
                        <tr>
                            <td>
                                <h2>S'incrire à une Association :</h2><br><br>
                            </td>
                        </tr>
                        <br>
                        <tr>
                            <td>N° Sécu sociale du citoyen :
                            <input type="text" name="idpersonne"></td>
                        </tr>
                        <tr>
                            <td>Prénom du citoyen :
                            <input type="text" name="prenomH"></td>
                        </tr>
                        <tr>
                            <td>Nom du citoyen :
                            <input type="text" name="nomH"></td>
                        </tr>
                        <tr>
                            <td><label for="Association">Association :</label>
                            <select id="numA" name="Association">
                                    <option value="1">1) Maison Culture et Jeunesse</option>
                                    <option value="2">2) Association de Chasse</option>
                                    <option value="3">3) Secours populaire</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td><label id="idA" for="idA">Numéro Association</label>
                            <select id="idA" name="idA">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select></td>
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
		insertParticipe($_POST);
		echo"<br/>Inscription réussie </br>";
	}
?>
       </div>
        </center>
    

        


    <div id="titre">
        <a>Association :</a>
    </div>
    <div id="enfant">
        <a>1) Maison Culture et Jeunesse :</a>
    </div>
    <image id=actu1 src='images/mjc.jpg' width='250' height='150' href="https://www.villiers94.fr/actualite/communique-covid-19-20200422/">
        <div id="kermesse"><a> <br><br>Rejoignez la MJC de Villiers pour apprendre à vos enfants à dessiner<br> et à peindre gràce à nos volontaires.<br> Laissez les faire déborder leur inspiration !</a></div>
        <div id="jeune">
            <a>2) Association de Chasse :</a>
        </div>
        <image id=actu2 src='images/chasse.jpg' width='250' height='150'>
            <div id="concert"><a><br><br>La ville de Villiers possède l'une des plus grandes communauté<br> de chasse d'IDF. Venez découvrir l'univers de la chasse <br>à l'aide de nos grands formateurs. </a></div>
            <div id="adulte">
                <a>3) Secours populaire :</a>
            </div>
            <image id=actu3 src='images/secours.jpg' width='250' height='150'>
                <div id="art"><a>Venez en aide aux personnes en nécessité en rejoignant notre<br> association. Nous préparons des paniers repas pour les démunis<br> et effectuons des missions de secours.</a></div>

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
	if(isset($_POST['Valider']))
	{
		insertParticipe($_POST);
		echo"<br/>Insertion réussie de la classe </br>";
	}
?>

<?php
$lesparticipe=selectAllParticipe();

foreach($lesparticipe as $uneparticipe)
{
	echo "<tr><td>".$uneparticipe['idpersonne']."</td>
				<td>".$uneparticipe['idA']."</td>
			</tr>";
}
?>
-->

</html>