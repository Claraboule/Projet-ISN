<?php
// Connexion à MySQL
mysql_connect("XXXXXXX", "root", "password");
mysql_select_db("nom_Base");
 
// ETAPE 1 : on vérifie si l'IP se trouve déjà dans la table
// Pour faire ça, on n'a qu'à compter le nombre d'entrées dont le champ "ip" est l'adresse ip du visiteur
$retour = mysql_query('SELECT COUNT(*) AS nbre_entrees FROM connectes WHERE ip=\'' . $_SERVER['REMOTE_ADDR'] . '\'');
$donnees = mysql_fetch_array($retour);
  
if ($donnees['nbre_entrees'] == 0) // L'ip ne se trouve pas dans la table, on va l'ajouter
{
    mysql_query('INSERT INTO connectes VALUES(\'' . $_SERVER['REMOTE_ADDR'] . '\', ' . time() . ')');
}
else // L'ip se trouve déjà dans la table, on met juste à jour le timestamp
{
    mysql_query('UPDATE connectes SET timestamp=' . time() . ' WHERE ip=\'' . $_SERVER['REMOTE_ADDR'] . '\'');
}
  
  
$timestamp_5min = time() - (60 * 5); // 60 * 5 = nombre de secondes écoulées en 5 minutes
$retour = mysql_query('SELECT COUNT(*) AS nbre_entrees FROM connectes WHERE timestamp>\'' . $timestamp_5min . '\'');
$donnees = mysql_fetch_array($retour);
  
if ($donnees['nbre_entrees'] == 1)// respect du singulier
{
  echo '<strong>' . $donnees['nbre_entrees'] . '</strong> visiteur connecté<br />';
}
else
{
  echo '<strong>' . $donnees['nbre_entrees'] . '</strong> visiteurs connectés<br />';
}
  
$jour = date('d');
$mois = date('m');
$annee = date('Y');
$aujourd_hui = mktime(0, 0, 0, $mois, $jour, $annee);
$retour = mysql_query('SELECT COUNT(*) AS nbre_entrees FROM connectes WHERE timestamp>\'' . $aujourd_hui . '\'');
$donnees = mysql_fetch_array($retour);
  
if ($donnees['nbre_entrees'] == 1)// respect du singulier
{
  echo '<strong>' . $donnees['nbre_entrees'] . '</strong> visiteur aujourd\'hui<br />';
}
else
{
echo '<strong>' . $donnees['nbre_entrees'] . '</strong> visiteurs aujourd\'hui<br />';
} 
  
$retour = mysql_query('SELECT COUNT(*) AS nbre_entrees FROM connectes');
$donnees = mysql_fetch_array($retour);
  
echo '<strong>' . $donnees['nbre_entrees'] . '</strong> visites au total<br />';
 
?>