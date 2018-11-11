<?php
include 'common.php';

$user_repository= new \Repository\UserRepository($db);
$user_service=new \Service\UserService($user_repository);
$success= new \Http\SuccessHttp($template);
$success->success();