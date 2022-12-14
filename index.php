<?php
require_once __DIR__ . '/Models/User.php';
require_once __DIR__ . '/Models/PremiumUser.php';
require_once __DIR__ . '/Models/Membership.php';

$user = new User('Clelia','Fradella',80);
$user->name = 'Clelia';

var_dump($user);
$usermembership = new Membership('Premium', 100, date('d/m/Y'));
$userPremium = new PremiumUser('Mattia','Rollo',23, $usermembership);
var_dump($userPremium);

include __DIR__ . '/partials/header.php';
include __DIR__ . '/partials/main.php';
include __DIR__ . '/partials/footer.php'; 