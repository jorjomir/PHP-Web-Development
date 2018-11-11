<?php
include 'common.php';

$book_repository= new \Repository\BookRepository($db);
$book_service=new \Service\BookService($book_repository);
$genre_repository= new \Repository\GenreRepository($db);
$genre_service=new \Service\GenreService($genre_repository);
$user_repository= new \Repository\UserRepository($db);
$user_service=new \Service\UserService($user_repository);
$task=new \Http\BookHttp($template, $book_service, $data_binder, $user_service);
$task->edit($book_service, $user_service, $genre_service, $_POST, $_GET);