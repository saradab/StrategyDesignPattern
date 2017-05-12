<?php

abstract class Character
{
    protected $weapon;

    public function setWeapon(WeaponInterface $weapon)
    {
        $this->weapon = $weapon;
    }

    public function fight()
    {
        $this->weapon->useWeapon();
    }

}