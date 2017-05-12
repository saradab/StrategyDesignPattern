<?php
require_once dirname(__FILE__).'/Character.php';

class Queen extends Character
{
    public function fight()
    {
        $this->weapon->useWeapon();
    }
}