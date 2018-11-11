<?php
include 'common.php';

$task_repository= new \Repository\TaskRepository($db);
$task_service=new \Service\TaskService($task_repository);
$category_repository=new \Repository\CategoryRepository($db);
$category_service=new \Service\CategoryService($category_repository);
$user_repository= new \Repository\UserRepository($db);
$user_service= new \Service\UserService($user_repository);
$user=new \Http\TaskHttp($template, $task_service, $user_service, $data_binder);
$user->add($_POST, $category_service);