<?php

include 'common.php';

$book_repository= new \Repository\BookRepository($db);
$book_service= new \Service\BookService($book_repository);

$user_repository= new \Repository\UserRepository($db);
$user_service= new \Service\UserService($user_repository);
$book=new \Http\BookHttp($template, $book_service, $data_binder, $user_service);
$book->allBooks();
