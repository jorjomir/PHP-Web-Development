<?php
include 'common.php';

$task_repository= new \Repository\TaskRepository($db);
$task_service=new \Service\TaskService($task_repository);
$user_repository= new \Repository\UserRepository($db);
$user_service=new \Service\UserService($user_repository);
$task=new \Http\TaskHttp($template, $task_service, $user_service, $data_binder);
$task->dashboard();