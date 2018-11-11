<?php
/**
 * Created by PhpStorm.
 * User: jorjomir
 * Date: 11/7/2018
 * Time: 8:22 PM
 */

namespace DTO;


class CategoryDTO
{
    /**
     * @var int
     */
    private $category_id;
    /**
     * @var string
     */
    private $name;

    /**
     * @return int
     */
    public function getCategoryId(): int
    {
        return $this->category_id;
    }

    /**
     * @param int $category_id
     */
    public function setCategoryId(int $category_id): void
    {
        $this->category_id = $category_id;
    }

    /**
     * @return int
     */


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