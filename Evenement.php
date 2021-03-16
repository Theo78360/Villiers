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

    <div id="form" >
        <center><a>
                <form method="post" action=""><br><br>
                    <table border="0">
                        <tr>
                            <td>
                                <h2>S'incrire à un Evènement :</h2><br><br>
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
                            <td><label for="Evènement">Evènement :</label>
                            <select id="numA" name="Evènement">
                                    <option value="1">1) Enfant</option>
                                    <option value="2">2) Jeune</option>
                                    <option value="3">3) Adulte</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td><label id="idEv" for="idEv">Numéro Evènement</label>
                            <select id="idEv" name="idEv">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select></td>
                        </tr>
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
		insertContribue($_POST);
		echo"<br/>Inscription réussie </br>";
	}
?>
       </div>
        </center>
    

        


    <div id="titre">
        <a>Evènements :</a>
    </div>
    <div id="enfant">
        <a>1) Enfant :</a>
    </div>
    <image id=actu1 src='images/kermesse.jpg' width='250' height='150' href="https://www.villiers94.fr/actualite/communique-covid-19-20200422/">
        <div id="kermesse"><a> Rejoignez la Kermesse de Villiers le 30 avril à partir de 10h <br>pour que vos enfants s'amusent avec les jeux mis en place<br> par nos bénévoles.<br>Venez nombreux!<br> Des cadeaux sont à gagner !</a></div>
        <div id="jeune">
            <a>2) Jeune :</a>
        </div>
        <image id=actu2 src='images/concert.jpg' width='250' height='150'>
            <div id="concert"><a> Les jeunes du conservatoire organisent un concert de rock sur la<br> place Maurice Berthaux au centre de la ville le 8 mai.<br>Boissons et bonnes musiques garenties !</a></div>
            <div id="adulte">
                <a>3) Adulte :</a>
            </div>
            <image id=actu3 src='images/art.jpg' width='250' height='150'>
                <div id="art"><a> La nouvelle salle des Fêtes de la ville ouvre<br> ses portes et pour cette première édition vous propose<br>un salon d'art et de culture pendant tout le mois de mai <br>Une Vente aux enchères antiques le 23 mai cloturera le salon.</a></div>

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
		insertContribue($_POST);
		echo"<br/>Insertion réussie de la classe </br>";
	}
?>

<?php
$lescontribue=selectAllContribue();

foreach($lescontribue as $unecontribue)
{
	echo "<tr><td>".$unecontribue['idpersonne']."</td>
				<td>".$unecontribue['idEv']."</td>
			</tr>";
}
?>
-->

</html>