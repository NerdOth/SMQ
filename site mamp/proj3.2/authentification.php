<?php session_start();
require_once ("fonctions.php");
$login=$_POST['login'];
$pass=md5($_POST['pass']);
include('config.php');

$requete = "SELECT * FROM user WHERE login='$login' AND pwd='$pass' ";
//Ex�cution de la requ�te mySQL et
//affectation du nombre de rang�s valides dans la table.
//********************************************
$result=ExecRequete ( $requete , $connexion ) ;
$affected_rows = mysql_num_rows($result);
//Si il y a un enregistrement, la connexion est valide sinon invalide.
//*****************************************************
if($affected_rows == 1) 
{
$_SESSION['user'] = $login;
echo'ok';
}
?>