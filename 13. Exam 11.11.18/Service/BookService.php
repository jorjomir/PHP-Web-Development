<?php
/**
 * Created by PhpStorm.
 * User: jorjomir
 * Date: 11/11/2018
 * Time: 10:33 AM
 */

namespace Service;


use DTO\BookDTO;
use Repository\BookRepository;

class BookService
{
    /**
     * @var BookRepository
     */
    private $book_repository;

    /**
     * BookService constructor.
     * @param BookRepository $book_repository
     */
    public function __construct(BookRepository $book_repository)
    {
        $this->book_repository = $book_repository;
    }
    public function getMyBooks(int $user_id) {
        return $this->book_repository->getMyBooks($user_id);
    }
    public function getAll() {
        return $this->book_repository->getAll();
    }
    public function getOne(int $book_id) {
        return $this->book_repository->getOne($book_id);
    }


    public function delete(int $book_id)
    {
        $this->book_repository->delete($book_id);
    }
    public function add(BookDTO $book) {
        return $this->book_repository->insert($book);

    }

    /**
     * @param BookDTO $bookDTO
     * @param int $id
     * @return bool
     * @throws \Exception
     */
    public function edit(BookDTO $bookDTO, int $id): bool
    {
        $task = $this->book_repository->getOne($id);

        if($task === null){
            throw new \Exception("Task not exist!");
        }

        return $this->book_repository->update($bookDTO, $id);
    }

}