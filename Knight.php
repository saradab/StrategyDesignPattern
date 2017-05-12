<?php
require_once dirname(__FILE__).'/Character.php';

class Knight extends Character
{
    public function fight()
    {
        $this->weapon->useWeapon();
    }
}