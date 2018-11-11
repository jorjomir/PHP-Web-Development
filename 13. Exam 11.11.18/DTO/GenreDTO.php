<?php
/**
 * Created by PhpStorm.
 * User: jorjomir
 * Date: 11/11/2018
 * Time: 9:38 AM
 */

namespace DTO;


class GenreDTO
{
    /**
     * @var int
     */
    private $genre_id;
    /**
     * @var string
     */
    private $name;

    /**
     * @return int
     */
    public function getGenreId(): int
    {
        return $this->genre_id;
    }

    /**
     * @param int $genre_id
     */
    public function setGenreId(int $genre_id): void
    {
        $this->genre_id = $genre_id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

}