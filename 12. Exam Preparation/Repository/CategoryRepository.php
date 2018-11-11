<?php
/**
 * Created by PhpStorm.
 * User: jorjomir
 * Date: 11/8/2018
 * Time: 4:06 PM
 */

namespace Repository;


use Database\PDODatabase;
use DTO\CategoryDTO;

class CategoryRepository
{
    /**
     * @var PDODatabase
     */
    private $db;

    /**
     * UserRepository constructor.
     * @param PDODatabase $db
     */
    public function __construct(PDODatabase $db)
    {
        $this->db = $db;
    }
    public function getAll() {
        $stm=$this->db->query('SELECT CATEGORY_ID, NAME FROM categories');
        $result=$stm->execute();
        foreach ($result->fetch(CategoryDTO::class) as $item) {
            yield $item;
        }
    }
    public function findOne(int $id): CategoryDTO
    {
        return $this->db->query("
            SELECT category_id, name
            FROM categories
            WHERE category_id = ?
        ")->execute([$id])
            ->fetch(CategoryDTO::class)
            ->current();
    }

    /**
     * @return \Generator|CategoryDTO[]
     */
    public function findAll(): \Generator
    {
        return $this->db->query("
            SELECT category_id, name
            FROM categories
        ")->execute()
            ->fetch(CategoryDTO::class);
    }
}