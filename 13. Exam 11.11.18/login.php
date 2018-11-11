<?php
include 'common.php';

$user_repository=new \Repository\UserRepository($db);
$user_service=new \Service\UserService($user_repository);
$user = new \Http\UserHttp($user_service, $data_binder, $template);
$user->login($_POST);