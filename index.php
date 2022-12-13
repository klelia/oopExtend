<?php
require_once __DIR__ . '/Models/User.php';
require_once __DIR__ . '/Models/PremiumUser.php';
require_once __DIR__ . '/Models/Membership.php';

$io = new User('Clelia','Fradella',80);
$io->name = 'Clelia';

var_dump($io);
$iomembership = new Membership('Premium', 100, date('d/m/Y'));
$iopremium = new PremiumUser('Mattia','Rollo',23, $iomembership);
var_dump($iopremium);

include __DIR__ . '/partials/header.php';
include __DIR__ . '/partials/main.php';
include __DIR__ . '/partials/footer.php'; 