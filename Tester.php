<?php
require_once dirname(__FILE__).'/King.php';
require_once dirname(__FILE__).'/Queen.php';
require_once dirname(__FILE__).'/Knight.php';

require_once dirname(__FILE__).'/Sword.php';
require_once dirname(__FILE__).'/Knife.php';
require_once dirname(__FILE__).'/Bow.php';

$king = new King;


$queen = new Queen;
$queen->setWeapon(new Bow);

$king->fight();
$queen->fight();

$king->setWeapon(new Knife);
$king->fight();