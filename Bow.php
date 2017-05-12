<?php
require_once dirname(__FILE__).'/WeaponInterface.php';

class Bow implements WeaponInterface
{
    public function useWeapon()
    {
        echo 'I am using a Bow!';
    }
}