<?PHP
include "../entities/suggestion.php";
include "../core/suggestionC.php";
include "../config.php";
if (isset($_POST['localisation'])and isset($_POST['noteService'])and isset($_POST['serviceGlobal']))  {
$suggestion1=new suggestion(0,2,$_POST['date'],$_POST['localisation'],$_POST['Service'],$_POST['noteService'],$_POST['serviceGlobal']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$suggestion1C=new suggestionC();
$suggestion1C->ajouterSuggestion($suggestion1);
header('Location:suggestion.php');
	
}
else{
	echo "vÃƒÂ©rifier les champs";
}
//*/

?>