<?php
define("ROOT", realpath(__dir__."/"));
define('WEB_ROOT', substr($_SERVER['SCRIPT_NAME'], 0, strpos($_SERVER['SCRIPT_NAME'], '/index.php')));
define("ROOT_STYLE",WEB_ROOT."/app/views/resources/");

require_once(ROOT . "/root/Apps.php");

Apps::run();





/*###########################################################################################################
#Portion pour affichage débugage total
#
##################################*//*
echo "<hr>Debugage total dans page Index.php racine<br />#######################################<br /><pre>";
//Liste toutes les classes définies dans PHP
echo '<font color="#009900" face="Arial Black">Class disponible</font> :<br>############<br>';
 $ClassTotal = get_declared_classes();
 for( $i = 130; $i < count($ClassTotal); $i++){
	 echo $ClassTotal[$i]."<br>";
 }

//echo '<font color="#009900" face="Arial Black">Fonction disponible dans class</font> :<br>############<br>';
// print_r(get_class_methods(new consulterController()));
 
//Liste toutes les fonctions définies 
echo '<font color="#009900" face="Arial Black"><p></p>Fonction independent des class disponible :</font><br>############<br>';
 $FunctionUser = get_defined_functions();
 print_r($FunctionUser["user"]);


//Retourne la liste des constantes et leurs valeurs
echo '<font color="#009900" face="Arial Black"><p></p>Constantes et leurs valeurs disponible :</font><br>############<br>';
 $ConstanteUser = get_defined_constants(true);
 print_r($ConstanteUser["user"]);
 
echo '<font color="#009900" face="Arial Black"><p></p>Interfaces disponible :</font><br>############<br>';
print_r(get_declared_interfaces());
 
echo '<font color="#009900" face="Arial Black"><p></p>Variable disponible :</font><br>############<br>';
 $VarUser = get_defined_vars();
 print_r($VarUser); 

echo "</pre><br />Fin Débugage Total<br><hr>";
*/
?>
