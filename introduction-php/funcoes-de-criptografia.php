<?php

// $password = '123456';
// $code = 'MTIzNDU2';

// echo base64_encode($password) . '<br>';
// echo base64_decode($code) . '<br>';

// $password = '123456';
// echo md5($password) . '<br>';

$password = '123456';

echo password_hash($password, PASSWORD_ARGON2I) . '<br>';