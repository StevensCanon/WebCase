<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Controllers\ProjectController;
use App\Models\Project;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(Category $category)
    {

        $deletedProjects = Project::onlyTrashed()->get(); 

        return view('projects.index', [
            'category' => $category,
            'projects' => $category->projects()->with('category')->paginate(6),
            'deletedProjects' => $deletedProjects, // Pasar la variable
            
        ]);
    }
}
