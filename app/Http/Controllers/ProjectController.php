<?php

namespace App\Http\Controllers;
use App\Http\Requests\SaveProjectRequest;
use App\Models\Project;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;


class ProjectController extends Controller
{


    public function index()
    {

        return view('projects.index', [

            'projects' => Project::latest()->paginate(6)
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

        $project->image = $request->file('image')->store('images');

        $project->save();

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
        return view('projects.edit', [
            'project' => $project
        ]);
    }

    public function update(Project $project, SaveProjectRequest $request)
    {

        if ($request->hasFile('image')) {

            if ($project->image) {
                Storage::delete($project->image);
            }

            $project->fill($request->validated());

            $project->image = $request->file('image')->store('images');

            $project->save();

            /* $image = Image::make(Storage::get($project->image));
            

            $image->widen(600)->limitColors(255)->encode();

            Storage::put($project->image, (string) $image);
             */


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

        Storage::delete($project->image);

        $project->delete();

        return redirect()->route('projects.index')->with('status', 'El proyecto fue eliminado con éxito!');
    }

    public function create()
    {
        return view('projects.create', [
            'project' => new Project
        ]);
    }
}
