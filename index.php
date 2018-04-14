<?php

use Firebase\JWT\JWT;

require 'vendor/autoload.php';

$secret = 'TestJWTGEWIS';
$lidnr = 1234;
$url = 'http://localhost:3000/callback';

$token = JWT::encode([
    'iss' => 'Test',
    'iat' => (new \DateTime())->getTimestamp(),
    'exp' => (new \DateTime('+5 min'))->getTimestamp(),
    'lidnr' => $lidnr
], $secret, 'HS256');

header('Location: ' . $url . '?token=' . $token);
