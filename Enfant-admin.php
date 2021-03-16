<?php
require_once("fonction.php");
session_start();
auth(1);
?>
<?php
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=mairie;charset=utf8', 'root', '');
	}
	catch (Exception $e)
	{
	        die('Erreur : ' . $e->getMessage());
	}
	header ('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html>
<title>Mairie Villiers</title>
<div id="droite">

</div>
<div id="gauche">

</div>

<head>

    <link rel="stylesheet" type="text/css" href="css/style9.css" />
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
                                <h2>Inscription de votre Enfant à l'école :</h2><br><br>
                            </td>
                        </tr>
                        <br>
                        <tr>
                            <td>N° de Sécu de l'enfant : 
                            <input type="text" name="idEf"></td>
                        </tr>
                        <tr>
                            <td>Nom de l'enfant :
                            <input type="text" name="nomEf"></td>
                        </tr>
                        <tr>
                            <td>Prénom de l'enfant :
                            <input type="text" name="prenomEf"></td>
                        </tr>
                        <tr>
                            <td>Date de Naissance :
                            <input type="date" name="DateEf"></td>
                        </tr>
                        <tr>
                            <td>
                        <tr>
                            <td><label for="SexeEf">Sexe :</label>
                            <select id="SexeEf" name="SexeEf">
                                    <option value="Homme">Homme</option>
                                    <option value="Femme">Femme</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td><label for="Enfant">Ecole :</label>
                            <select id="nomE" name="nomE">
                                    <option value="1">1) Jean Moulin</option>
                                    <option value="2">2) Paul Eluard</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td><label id="idE" for="idE">Numéro Ecole</label>
                            <select id="idE" name="idE">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td><label for="NomT">Tranche d'âge :</label>
                            <select id="NomT" name="NomT">
                                    <option value="Jeune">1) Jeune</option>
                                    <option value="Enfant">2) Enfant</option>
                                    <option value="Adulte">3) Adulte</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td><label id="idT" for="idT">Numéro Ecole</label>
                            <select id="idT" name="idT">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="2">3</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td>
                        <tr>
                            <td><br>
                                <h3>Responsable légal :</h3>
                            </td>
                        </tr>
                        <tr>
                            <td>N° de Sécu du responsable:
                            <input type="text" name="idpersonne"></td>
                        <tr>
                            <td>Nom du responsable :
                            <input type="text" name="nomH"></td>
                        <tr>
                            <td>Prénom du responsable :
                            <input type="text" name="prenomH"></td>


                        <tr>
                            <td><br><br><input type="reset" name="Annuler" value="Annuler">
                            
                            
                                <input type="submit" name="submit" value="Valider">
                            </td>
                        </tr>
                    </table>
                </form>
            </a>
        </center>
    </div><br><br>
    
<div id="tab" class="container">
 <div class="row">
            <div class="col-12">

<h4>Liste des Inscrits :</h4>
<table border="1" class="table">
<thead>
<tr><td>N° Secu Enfant</td>
    <td>Nom de l'enfant</td>
    <td>Prénom de l'enfant</td>
	<td>Date de l'enfant</td>
    <td>Sexe de l'enfant</td>
	<td>Numéro de l'Ecole</td>
	<td>Numéro de la Tranche d'Age</td>
    <td>N° Secu du responsable légal</td>
    <td>Supprimer</td>
</tr>
</thead>
    </div>
     </div>
       
</div> 
        
<?php 
	if(isset($_POST['submit']))
	{
		insertEnfant($_POST);
		echo"<br/>Insertion réussie de la classe </br>";
	}
    if(isset($_GET['idEf']))
	{
		$idEf = $_GET['idEf'];
		deleteEnfant ($idEf);
		echo "<br/>Suppression réussie</br>";
	}
$lesenfant=selectAllEnfant();

foreach($lesenfant as $uneenfant)
{
	echo "<tr><td>".$uneenfant['idEf']."</td>
				<td>".$uneenfant['nomEf']."</td>
				<td>".$uneenfant['prenomEf']."</td>
				<td>".$uneenfant['DateEf']."</td>
				<td>".$uneenfant['SexeEf']."</td>
				<td>".$uneenfant['idE']."</td>
				<td>".$uneenfant['idT']."</td>
				<td>".$uneenfant['idpersonne']."</td>
        <td><center> <a href='Enfant-admin.php?page=1&idEf=".$uneenfant['idEf']."'>
					<image src='images/supprimer.png' width='30' height='30'></a></center></td>
			</tr>";
}
?>

</body>





</html>
