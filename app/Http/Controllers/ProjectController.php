<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\SaveProjectRequest;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;
use  App\Events\ProjectSaved;
use App\Models\Category;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ProjectController extends Controller
{
    use AuthorizesRequests;


    public function index()
    {
        return view('projects.index', [
            'newProject' => new Project,
            'projects' => Project::with('category')->latest()->paginate(6),
            'deletedProjects' => Project::onlyTrashed()->get(),
        ]);
    }

    public function create()

    {
        $this->authorize('create', $project = new Project);

        return view('projects.create', [
            'project' => $project,
            'categories' => Category::pluck('name', 'id')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SaveProjectRequest $request)
    {
        /*  Project::create(request()->all()); SE HACE PARA LA ASIGNACION MASIVA MIENTRAS NO ESTE PROTEGIDA*/

        /* $fields = request()->validate([
            'title' => 'required',
            'url' => 'required',
            'description' => 'required',

        ]); Forma optima para proteger nuestro fields, sin usar FormRequest */


        $project = new Project($request->validated());

        $this->authorize('create', $project);

        $project->image = $request->file('image')->store('images');

        $project->save();

        ProjectSaved::dispatch($project);

        return redirect()->route('projects.index')->with('status', 'El proyecto fue creado con éxito!');
    }



    public function show(Project $project)
    {



        return view('projects.show', [
            'project' => $project
        ]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function edit(Project $project)
    {

        $this->authorize('update', $project); // Cambiado

        return view('projects.edit', [
            'project' => $project,
            'categories' => Category::pluck('name', 'id')
        ]);
    }

    public function update(Project $project, SaveProjectRequest $request)
    {

        $this->authorize('update', $project);

        if ($request->hasFile('image')) {

            if ($project->image) {
                Storage::delete($project->image);
            }

            $project->fill($request->validated());

            $project->image = $request->file('image')->store('images');

            $project->save();

            ProjectSaved::dispatch($project);
        } else {
            $project->update(array_filter($request->validated()));
        }

        return redirect()->route('projects.show', $project)->with('status', 'El proyecto fue actualizado con éxito!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $this->authorize('delete', $project);


        $project->delete();

        return redirect()->route('projects.index')->with('status', 'El proyecto fue eliminado con éxito!');
    }

    public function forceDelete( $projectUrl)
    {

        $project = Project::withTrashed()->whereUrl($projectUrl)->firstOrFail();
        $this->authorize('forceDelete', $project);


        Storage::delete($project->image);

        $project->forceDelete();

        return redirect()->route('projects.index')->with('status', 'El proyecto fue eliminado permanentemente');
    }

    public function restore( $projectUrl)
    {

        $project = Project::withTrashed()->whereUrl($projectUrl)->firstOrFail();

        $this->authorize('restore', $project);


        $project->restore();

        return redirect()->route('projects.index')->with('status', 'El proyecto fue restaurado con éxito!');
    }
}
