<?php
namespace App\Services\Interfaces;

interface CategoryServiceInterface
{
    public function createCategory(array $categoryData);
    public function getAllCategories();
    public function deleteCategory($categoryId);
}
?>
