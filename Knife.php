<?php
require_once dirname(__FILE__).'/WeaponInterface.php';

class Knife implements WeaponInterface
{
   public function useWeapon()
   {
       echo 'I am using a knife!';
   }
}