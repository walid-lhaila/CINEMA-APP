<?php
namespace App\Repositories;

use App\Models\Category;

class CategoryRepository
{
    public function categoryCreate(array $data)
    {
        return Category::create($data);
    }
    public function getAllCategories()
    {
        return Category::all();
    }
    public function deleteCategory($categoryId)
    {
        return Category::destroy($categoryId);
    }
}


