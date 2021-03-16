<?php
require_once("fonction.php");
session_start();
auth(1);

?>
<!DOCTYPE html>
<html>
<title>Mairie Villiers</title>
<div id="droite">

</div>
<div id="gauche">

</div>

<head>

    <link rel="stylesheet" type="text/css" href="css/style7.css" />
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
            <li><a href="index-admin.php" title="Accueil" class="active"><i class="fa fa-home"></i>Accueil</a></li>
            <li><a href="Mariage-admin.php" title="Ma Famille"><i class="fa fa-edit"></i>Ma Famille</a>
            </li>
            <li><a href="Enfant-admin.php" title="Scolarité"><i class="fa fa-user"></i>Scolarité</a>
            </li>
            <li><a href="Evenement-admin.php" title="Evènements"><i class="fa fa-inr"></i>Evènements</a>
            </li>
            <li><a href="Association-admin.php" title="Ma Ville"><i class="fa fa-users"></i>Association</a>
            </li>
        </ul>
    </div>

    <div id="form">
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
                                <input type="text" name="idpersonne">
                            </td>
                        </tr>
                        <tr>
                            <td>Prénom du citoyen :
                                <input type="text" name="prenomH">
                            </td>
                        </tr>
                        <tr>
                            <td>Nom du citoyen :
                                <input type="text" name="nomH">
                            </td>
                        </tr>
                        <tr>
                            <td><label for="Evènement">Evènement :</label>
                                <select id="numA" name="Evènement">
                                    <option value="1">1) Enfant</option>
                                    <option value="2">2) Jeune</option>
                                    <option value="3">3) Adulte</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label id="idEv" for="idEv">Numéro Evènement</label>
                                <select id="idEv" name="idEv">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </td>
                        </tr>
                        <td><br><br><input type="reset" name="Annuler" value="Annuler">

                            <input type="submit" name="Valider" value="Valider">
                        </td>
                        </tr>
                    </table>
                </form>
            </a>
    </div>









<div id="tab" class="container">
    <div class="row">
        <div class="col-12">

            <h4>Liste des Inscrits :</h4>
            <table border="1" class="table">
                <thead>
                    <tr>
                        <td>N° de Sécu</td>
                        <td>N° d'inscription</td>
                        <td>Supprimer</td>
                    </tr>
                </thead>
        </div>
    </div>
</div>

            <?php 
	if(isset($_POST['Valider']))
	{
		insertContribue($_POST);
		echo"<br/>Insertion réussie de la classe </br>";
	}
if(isset($_GET['idpersonne']))
	{
		$idpersonne = $_GET['idpersonne'];
		deleteContribue ($idpersonne);
		echo "<br/>Suppression réussie</br>";
	}
$lescontribue=selectAllContribue();

foreach($lescontribue as $unecontribue)
{
	echo "<tr><td>".$unecontribue['idpersonne']."</td>
				<td>".$unecontribue['idEv']."</td>
			 <td><center> <a href='Evenement-admin.php?page=1&idpersonne=".$unecontribue['idpersonne']."'>
					<image src='images/supprimer.png' width='30' height='30'></a></center></td>
			</tr>";
}
?>
</body>

</html>
