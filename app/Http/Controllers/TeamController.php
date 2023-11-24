<?php

namespace App\Http\Controllers;

use App\Models\projects;
use App\Models\team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs =projects::all();
        $posts = team::all();
        return view('pages.home', compact(['posts','blogs']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admins.team.addteam');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'photo' => 'required',
            'facebook' => 'required',
        ]);

        $post = new team();
        $post->name = $validatedData['name'];
        $post->desc = $validatedData['desc'];
        $post->photo = $validatedData['photo'];
        $post->facebook = $validatedData['facebook'];
        $post->save();

        return redirect()->route('team.index')
            ->with('success', 'Post created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = team::find($id);
        return view('pages.profile', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = team::find($id);
        // return view('edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $post = team::find($id);
        $post->update($request->all());
        // return redirect()->route('team.index')
        //     ->with('success', 'Post updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = team::find($id);
        $post->delete();
        // return redirect()->route('team.index')
        //     ->with('success', 'Post deleted successfully');
    }


    public function admin(){
        $posts = team::all();
        return view('pages.admins', compact('posts'));
    }
}
