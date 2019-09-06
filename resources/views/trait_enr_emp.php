<?php
session_start();

//if (isset($_POST['nom_user'])) { 
  //  echo "runing"; 
//} 


?>
<?php
try
{
$bdd = new PDO('mysql:host=localhost;dbname=hrm', 'root', '');


$req = $bdd->prepare('INSERT INTO employe (nom, prenom, sex,lieunais,datenais) VALUES(:nom,:prenom,:sex,:lieunais,:datenais)');
$req->execute(array("nom"=>$_POST['nom'],
"prenom"=>$_POST['prenom'],
"sex"=>$_POST['origine'],
"lieunais"=>$_POST['lieunais'],
"datenais"=>$_POST['datenais']
    
));
var_dump( $req);
echo $_POST['lieunais']; 

  //  var_dump( $req);

}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}
// On ajoute une entrée dans la table 


    
    


$_SESSION["message"]="ok";
header('Location:general.html');

?>
