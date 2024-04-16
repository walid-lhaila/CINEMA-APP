<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Services\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $categoryServices;
    public function __construct(CategoryService $categoryServices){
        $this->categoryServices = $categoryServices;
    }
    public function categoryStore(Request $request)
    {
        $categoryData = $request->only('name');
        $category = $this->categoryServices->createCategory($categoryData);

        return redirect()->route('categories')->with('success', 'Category created successfully.');
    }

    public function getAllCategories()
    {
        $categories = $this->categoryServices->getAllCategories();
        return response()->json($categories);
    }

    public function deleteCategory($categoryId)
    {
        if (!$categoryId) {
            return response()->json(['error' => 'Category ID is missing'], 400);
        }
        $deleted = $this->categoryServices->deleteCategory($categoryId);

        if ($deleted) {
            return response()->json(['message' => 'Category deleted successfully']);
        } else {
            return response()->json(['error' => 'Failed to delete category'], 500);
        }
    }
}
