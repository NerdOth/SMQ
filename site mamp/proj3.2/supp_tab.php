<?php
include('config.php');

$idt=$_GET['idt'];

$selecta = "SELECT indicateur FROM tableaux_de_bord WHERE id='$idt' ";
$result = mysql_query($selecta);

while($row = mysql_fetch_array($result))
{
        $idi=$row['indicateur'];
}

// on lib�re le r�sultat


// on �crit la requ�te sql de suppression
$sql = "DELETE FROM tableaux_de_bord WHERE id='$idt' "  ;

// on execute la requete
mysql_query($sql);



?>

<script language="Javascript">
<!--
document.location.replace("param_ind.php?id=<?php echo $idi; ?>");
// -->
</script>';