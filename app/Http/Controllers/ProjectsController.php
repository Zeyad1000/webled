<?php

namespace App\Http\Controllers;

use App\Models\projects;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = projects::all();
        return view('pages.library', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admins.project.addproject');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'desc' => 'required',
            'photo' => 'required',
            'team_id' => 'required',
        ]);

        $post = new projects();
        $post->title = $validatedData['title'];
        $post->body = $validatedData['body'];
        $post->desc = $validatedData['desc'];
        $post->photo = $validatedData['photo'];
        $post->team_id = $validatedData['team_id'];
        $post->save();

        return redirect()->route('projects.index')
            ->with('success', 'Post created successfully.');
    }
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = projects::find($id);
        return view('pages.admins.project.viewproject', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(projects $projects)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, projects $projects)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(projects $projects)
    {
        //
    }



}
