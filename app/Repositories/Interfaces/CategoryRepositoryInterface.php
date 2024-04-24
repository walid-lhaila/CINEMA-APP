<?php
namespace App\Repositories\Interfaces;
use App\Models\Category;


interface CategoryRepositoryInterface
{
    public function categoryCreate(array $data);
    public function getAllCategories();
    public function deleteCategory($categoryId);
}
