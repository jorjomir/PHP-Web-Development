<?php
/**
 * Created by PhpStorm.
 * User: jorjomir
 * Date: 11/11/2018
 * Time: 10:35 AM
 */

namespace Service;


use DTO\GenreDTO;
use Repository\GenreRepository;

class GenreService
{
    /**
     * @var GenreRepository
     */
    private $genre_repository;

    /**
     * GenreService constructor.
     * @param GenreRepository $genre_repository
     */
    public function __construct(GenreRepository $genre_repository)
    {
        $this->genre_repository = $genre_repository;
    }
    /**
     * @param int $id
     * @return GenreDTO
     * @throws \Exception
     */
    public function getOne(int $id): GenreDTO
    {
        $category = $this->genre_repository->findOne($id);

        if($category === null){
            throw new \Exception("Category not found!");
        }

        return $this->genre_repository->findOne($id);
    }

    /**
     * @return \Generator|GenreDTO[]
     */
    public function getAll(): \Generator
    {
        return $this->genre_repository->findAll();
    }

}