<?php
/*
*  Prototype du MVC pour RecruteAnim
*
* date modifier : 31 octobre 2013
* @since 13 octobre 2013
* @author Angelus76
* @copyright RecruteAnim
* @version 1.20.a
*
*/
define("ROOT", realpath(__dir__ . "/"));
define("WEB_ROOT", substr($_SERVER['SCRIPT_NAME'], 0, strpos($_SERVER['SCRIPT_NAME'], "/index.php")));

define("Apps_Root", ROOT . "/app/");
define("Apps_Views", Apps_Root . "views/");
define("Apps_Pages", Apps_Views . "pages/");
define("Apps_Style", WEB_ROOT . "/app/views/resources/");

require_once(ROOT . "/root/Apps.php");
$StartApps = new Apps();
$StartApps->run();
?>
























<!--  Partie Utile Uniquement Pour Le Dev
      Ligne de débugage -->

<div id="myModal" class="modal hide fade" tabindex="-1" data-replace="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3>Fenetre de Débug !</h3>
  </div>
  <div class="modal-body">
    <pre>
<?php
//Liste toutes les classes définies dans PHP
echo '<font color="#009900" face="Arial Black">Class et Fonction Associé disponible</font> :<br>############<br>';
 $ClassTotal = get_declared_classes();
 for( $i = 130; $i < count($ClassTotal); $i++){
	 echo $ClassTotal[$i]."<br>";
         print_r(get_class_methods($ClassTotal[$i]));
 }

//echo '<font color="#009900" face="Arial Black">Fonction disponible dans class</font> :<br>############<br>';
// print_r(get_class_methods(new consulterController()));
 
//Liste toutes les fonctions définies 
/*echo '<font color="#009900" face="Arial Black"><p></p>Fonction independent des class disponible :</font><br>############<br>';
 $FunctionUser = get_defined_functions();
 print_r($FunctionUser["user"]);

*/

echo '<font color="#009900" face="Arial Black"><p></p>Constantes et leurs valeurs disponible</font> :<br>############<br>';
 $ConstanteUser = get_defined_constants(true);
 print_r($ConstanteUser["user"]);

        /*
          echo '<font color="#009900" face="Arial Black"><p></p>Interfaces disponible :</font><br>############<br>';
          print_r(get_declared_interfaces());

          echo '<font color="#009900" face="Arial Black"><p></p>Variable disponible :</font><br>############<br>';
          $VarUser = get_defined_vars();
          print_r($VarUser);

          echo "</pre><br />Fin Débugage Total<br><hr>";
          /* */
        ?>
    </pre>
  </div>
  <div class="modal-footer">
    <button type="button" data-dismiss="modal" class="btn">Fermer</button>
  </div>
</div>

