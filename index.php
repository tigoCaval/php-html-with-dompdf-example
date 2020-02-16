<?php
require_once "./User.php";
/****
 * @author Tiago ACP
 * 
 * Testando algoritmo 
 */
$user = new User();

echo $user->html(50,$user->header,$user->attribute);