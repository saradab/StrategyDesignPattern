<?php
require_once dirname(__FILE__).'/WeaponInterface.php';

class Sword implements WeaponInterface
{
    public function useWeapon()
    {
        echo 'I am using a sword!';
    }
}