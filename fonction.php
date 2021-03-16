<?php
	function connexion()
	{
		$con=mysqli_connect("localhost","root","","mairie");
		if($con==null)
		{
			echo"</br> Erreur de connexion au serveur !</br>";
		}
		return $con;
	}
	function deconnexion ($con)
	{
		mysqli_close($con);
	} 

function insertEnfant ($tab)
	{
		$con=connexion();
		if($con!=null)
		{
		$requete="insert into enfant values('".$tab['idEf']."','".$tab['nomEf']."','".$tab['prenomEf']."','".$tab['DateEf']."','".$tab['SexeEf']."','".$tab['idE']."','".$tab['idT']."','".$tab['idpersonne']."');";
		mysqli_query($con,$requete);
		deconnexion($con);
		}
	}
	function selectAllEnfant ()
	{
		$con=connexion ();
		if($con!=null)
		{
			$requete="select * from enfant";
			$resultats=mysqli_query($con,$requete);
			deconnexion($con);
			return $resultats;
		}
	}

function deleteEnfant($idEf)
{
	$con=connexion();
	if($con != null)
	{
		$requete="delete from enfant where idEf=".$idEf.";";
		mysqli_query($con,$requete);
		deconnexion($con);
	}
}
	

function insertMariage ($tab)
	{
		$con=connexion();
		if($con!=null)
		{
		$requete="insert into mariage values('".$tab['idpersonne1']."','".$tab['idpersonne2']."','".$tab['Datehm']."','null');";
		mysqli_query($con,$requete);
		deconnexion($con);
		}
	}
	function selectAllMariage ()
	{
		$con=connexion ();
		if($con!=null)
		{
			$requete="select * from mariage";
			$resultats=mysqli_query($con,$requete);
			deconnexion($con);
			return $resultats;
		}
	}
function deleteMariage($idpersonne1)
{
	$con=connexion();
	if($con != null)
	{
		$requete="delete from mariage where idpersonne1=".$idpersonne1.";";
		mysqli_query($con,$requete);
		deconnexion($con);
	}
}


function insertContribue ($tab)
	{
		$con=connexion();
		if($con!=null)
		{
		$requete="insert into contribue values('".$tab['idpersonne']."','".$tab['idEv']."');";
		mysqli_query($con,$requete);
		deconnexion($con);
		}
	}
	function selectAllContribue ()
	{
		$con=connexion ();
		if($con!=null)
		{
			$requete="select * from contribue";
			$resultats=mysqli_query($con,$requete);
			deconnexion($con);
			return $resultats;
		}
	}
function deleteContribue($idpersonne)
{
	$con=connexion();
	if($con != null)
	{
		$requete="delete from contribue where idpersonne=".$idpersonne.";";
		mysqli_query($con,$requete);
		deconnexion($con);
	}
}


function insertParticipe ($tab)
	{
		$con=connexion();
		if($con!=null)
		{
		$requete="insert into participe values('".$tab['idpersonne']."','".$tab['idA']."');";
		mysqli_query($con,$requete);
		deconnexion($con);
		}
	}
	function selectAllParticipe ()
	{
		$con=connexion ();
		if($con!=null)
		{
			$requete="select * from participe";
			$resultats=mysqli_query($con,$requete);
			deconnexion($con);
			return $resultats;
		}
	}

function deleteParticipe($idpersonne)
{
	$con=connexion();
	if($con != null)
	{
		$requete="delete from participe where idpersonne=".$idpersonne.";";
		mysqli_query($con,$requete);
		deconnexion($con);
	}
}

function auth($idad){// fonction qui controle si le lvl de l utilisateur est suffisant
    
    if(isset($_SESSION['idad'])== $idad)
        return true;
    else
        header("Location:admin.php");
}


?>