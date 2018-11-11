<?php
/**
 * Created by PhpStorm.
 * User: jorjomir
 * Date: 11/11/2018
 * Time: 9:35 AM
 */

namespace DTO;


class BookDTO
{
    /**
     * @var int
     */
    private $book_id;
    /**
     * @var string
     */
    private $title;
    /**
     * @var string
     */
    private $author;
    /**
     * @var string
     */
    private $description;
    /**
     * @var string
     */
    private $image;
    /**
     * @var GenreDTO
     */
    private $genre;
    /**
     * @var int
     */

    /**
     * @var UserDTO
     */
    private $user;

    private $added_on;

    /**
     * @return int
     */
    public function getBookId(): int
    {
        return $this->book_id;
    }

    /**
     * @param int $book_id
     */
    public function setBookId(int $book_id): void
    {
        $this->book_id = $book_id;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @param string $author
     */
    public function setAuthor(string $author): void
    {
        $this->author = $author;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    /**
     * @return UserDTO
     */
    public function getUser(): UserDTO
    {
        return $this->user;
    }

    /**
     * @param UserDTO $user
     */
    public function setUser(UserDTO $user): void
    {
        $this->user = $user;
    }

    public function getAddedOn()
    {
        return $this->added_on;
    }

    public function setAddedOn($added_on): void
    {
        $this->added_on = $added_on;
    }

    /**
     * @return GenreDTO
     */
    public function getGenre(): GenreDTO
    {
        return $this->genre;
    }

    /**
     * @param GenreDTO $genre
     */
    public function setGenre(GenreDTO $genre): void
    {
        $this->genre = $genre;
    }




}