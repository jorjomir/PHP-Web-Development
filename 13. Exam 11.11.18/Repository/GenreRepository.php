<?php
/**
 * Created by PhpStorm.
 * User: jorjomir
 * Date: 11/11/2018
 * Time: 10:10 AM
 */

namespace Repository;


use Database\PDODatabase;
use DTO\GenreDTO;

class GenreRepository
{

    /**
     * @var PDODatabase
     */
    private $db;

    /**
     * GenreRepository constructor.
     * @param PDODatabase $db
     */
    public function __construct(PDODatabase $db)
    {
        $this->db = $db;
    }
    public function getAll() {
        $stm=$this->db->query('SELECT GENRE_ID, NAME FROM genres');
        $result=$stm->execute();
        foreach ($result->fetch(GenreDTO::class) as $item) {
            yield $item;
        }
    }
    public function findOne(int $id): GenreDTO
    {
        return $this->db->query("
            SELECT GENRE_ID, NAME
            FROM genres
            WHERE GENRE_ID = ?
        ")->execute([$id])
            ->fetch(GenreDTO::class)
            ->current();
    }

    /**
     * @return \Generator|GenreDTO[]
     */
    public function findAll(): \Generator
    {
        return $this->db->query("
            SELECT GENRE_ID, NAME
            FROM genres
        ")->execute()
            ->fetch(GenreDTO::class);
    }

}