<?php

abstract class Character
{
    public $weapon;

    public function setWeapon(WeaponInterface $weapon)
    {
        $this->weapon = $weapon;
    }

    public function fight()
    {
        $this->weapon->useWeapon();
    }

}