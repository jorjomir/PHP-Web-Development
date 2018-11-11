<?php
/**
 * Created by PhpStorm.
 * User: jorjomir
 * Date: 11/11/2018
 * Time: 9:48 AM
 */

namespace Repository;


use Database\PDODatabase;
use DTO\BookDTO;
use DTO\GenreDTO;
use DTO\UserDTO;

class BookRepository
{
    /**
     * @var PDODatabase
     */
    private $db;

    /**
     * BookRepository constructor.
     * @param PDODatabase $db
     */
    public function __construct(PDODatabase $db)
    {
        $this->db = $db;
    }
    public function insert(BookDTO $book):bool {
        $stm=$this->db->query("
                INSERT INTO books (title, author, description, image, genre_id, user_id, added_on) 
                VALUES (?,?,?,?,?,?,?)
            ");
        $stm->execute([
            $book->getTitle(),
            $book->getAuthor(),
            $book->getDescription(),
            $book->getImage(),
            $book->getGenre()->getGenreId(),
            $book->getUser()->getUserId(),
            $book->getAddedOn()
        ]);
        return true;
    }

    public function delete(int $book_id) {
        $stm=$this->db->query('DELETE FROM books WHERE BOOK_ID=:book_id');
        $stm->execute(['book_id'=>$book_id,]);
    }

    /**
     * @param int $user_id
     * @return \Generator|BookDTO[]
     */
    public function getMyBooks(int $user_id): \Generator{
        $stm=$this->db->query('SELECT BOOK_ID,TITLE,AUTHOR,DESCRIPTION,IMAGE,GENRE_ID,USER_ID,ADDED_ON,USERNAME, NAME
            FROM books 
            INNER JOIN users USING (USER_ID)
            INNER JOIN genres USING (GENRE_ID) 
            WHERE USER_ID= :user_id');
        $result=$stm->execute(['user_id'=>$user_id])->fetch();
        foreach ($result as $row) {
            $genre= new GenreDTO();
            $genre->setGenreId($row['genre_id']);
            $genre->setName($row['name']);

            $book= new BookDTO();
            $book->setBookId($row['book_id']);

            $book->setTitle($row['title']);
            $book->setBookId($row['book_id']);
            $book->setAuthor($row['author']);
            $book->setDescription($row['description']);
            $book->setImage($row['image']);

            $user= new UserDTO();
            $user->setUserId($row['user_id']);
            $user->setUsername($row['username']);

            $book->setAddedOn($row['added_on']);
            $book->setGenre($genre);
            yield $book;
        }

    }
    public function getAll(): \Generator{
        $stm=$this->db->query('SELECT BOOK_ID,TITLE,AUTHOR,DESCRIPTION,IMAGE,GENRE_ID,USER_ID,ADDED_ON,USERNAME, NAME
            FROM books 
            INNER JOIN users USING (USER_ID)
            INNER JOIN genres USING (GENRE_ID)');
        $result=$stm->execute()->fetch();
        foreach ($result as $row) {
            $genre= new GenreDTO();
            $genre->setGenreId($row['genre_id']);
            $genre->setName($row['name']);

            $book= new BookDTO();
            $book->setBookId($row['book_id']);

            $book->setTitle($row['title']);
            $book->setBookId($row['book_id']);
            $book->setAuthor($row['author']);
            $book->setDescription($row['description']);

            $user= new UserDTO();
            $user->setUserId($row['user_id']);
            $user->setUsername($row['username']);

            $book->setImage($row['image']);
            $book->setUser($user);
            $book->setAddedOn($row['added_on']);
            $book->setGenre($genre);
            yield $book;
        }
    }
    /**
     * @param int $book_id
     * @return BookDTO
     */
    public function getOne(int $book_id): BookDTO{
        $stm=$this->db->query('SELECT BOOK_ID,TITLE,AUTHOR,DESCRIPTION,IMAGE,GENRE_ID,USER_ID,ADDED_ON,USERNAME,NAME
            FROM books 
            INNER JOIN users USING (USER_ID)
            INNER JOIN genres USING (GENRE_ID) 
            WHERE BOOK_ID= :book_id');
        $result=$stm->execute(['book_id'=>$book_id])->fetch();
        foreach ($result as $row) {
            $genre= new GenreDTO();
            $genre->setGenreId($row['genre_id']);
            $genre->setName($row['name']);

            $book= new BookDTO();
            $book->setBookId($row['book_id']);

            $book->setTitle($row['title']);
            $book->setBookId($row['book_id']);
            $book->setAuthor($row['author']);
            $book->setDescription($row['description']);
            $book->setImage($row['image']);

            $user= new UserDTO();
            $user->setUserId($row['user_id']);
            $user->setUsername($row['username']);

            $book->setAddedOn($row['added_on']);
            $book->setGenre($genre);
            return $book;
        }

    }
    public function update(BookDTO $bookDTO, int $id): bool
    {
        $this->db->query("
                UPDATE books
                SET 
                  TITLE = ?,
                  AUTHOR = ?,
                  DESCRIPTION = ?,
                  IMAGE = ?,
                  GENRE_ID = ?
                WHERE BOOK_ID = ?  
            ")->execute([
            $bookDTO->getTitle(),
            $bookDTO->getAuthor(),
            $bookDTO->getDescription(),
            $bookDTO->getImage(),
            $bookDTO->getGenre()->getGenreId(),
            $id
        ]);

        return true;
    }

}