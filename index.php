<?php

namespace Challenge;
require_once './vendor/autoload.php';

$game = new LinioChallenge;
$game->play()->print();