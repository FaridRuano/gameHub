<?php
class enlacesPag{
    public static function enlacesPagModel($enlacesModel){
        if($enlacesModel == "juego1" || 
         $enlacesModel == "juego2" ||
         $enlacesModel == "juego3" || 
         $enlacesModel == "juego4" || 
         $enlacesModel == "juego5")
         {
             $module="views/interfaces/".$enlacesModel.".php";
         }else if($enlacesModel=="principal")
         {
            $module="views/principal.php";
         }else {
            $module="views/principal.php";
         }
         return $module;
             
    }
}
?>