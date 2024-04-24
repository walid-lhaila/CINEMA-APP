<?php
namespace App\Services;

use App\Models\Category;
use App\Repositories\CategoryRepository;
use App\Services\Interfaces\CategoryServiceInterface;

class CategoryService implements CategoryServiceInterface
{
    protected $categoryRepository;
    public function __construct(CategoryRepository $categoryRepository){
        $this->categoryRepository = $categoryRepository;
    }

    public function createCategory(array $categoryData)
    {
        $category = Category::create($categoryData);
        return $category;
    }
    public function getAllCategories()
    {
        return $this->categoryRepository->getAllCategories();
    }
    public function deleteCategory($categoryId)
    {
        return $this->categoryRepository->deleteCategory($categoryId);
    }
}


