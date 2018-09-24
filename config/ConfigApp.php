<?php

class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [

      ''=> 'personajesController#Home',
      'home'=> 'personajesController#Home',
      'borrar'=> 'personajesController#Borrarpersonaje',
      'completada'=> 'personajesController#Completarpersonaje'
    ];

}

 ?>
