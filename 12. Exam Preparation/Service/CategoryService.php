<?php
/**
 * Created by PhpStorm.
 * User: jorjomir
 * Date: 11/10/2018
 * Time: 12:02 AM
 */

namespace Service;


use DTO\CategoryDTO;
use Repository\CategoryRepository;

class CategoryService
{
    /**
     * @var CategoryRepository
     *
     */
    private $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * @param int $id
     * @return CategoryDTO
     * @throws \Exception
     */
    public function getOne(int $id): CategoryDTO
    {
        $category = $this->categoryRepository->findOne($id);

        if($category === null){
            throw new \Exception("Category not found!");
        }

        return $this->categoryRepository->findOne($id);
    }

    /**
     * @return \Generator|CategoryDTO[]
     */
    public function getAll(): \Generator
    {
        return $this->categoryRepository->findAll();
    }
}