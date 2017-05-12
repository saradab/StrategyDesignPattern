<?php
require_once dirname(__FILE__).'/Character.php';
//require_once dirname(__FILE__).'/Sword.php';

class King extends Character
{
    public function __construct()
    {
        $this->weapon = new Sword;
    }
}