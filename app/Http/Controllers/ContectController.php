<?php

namespace App\Http\Controllers;

use App\Models\contect;
use Illuminate\Http\Request;

class ContectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = contect::all();
        return view('pages.admins.contact.view', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admins.contact.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'text' => 'required',

        ]);

        $post = new contect();
        $post->name = $validatedData['name'];
        $post->phone = $validatedData['phone'];
        $post->email = $validatedData['email'];
        $post->text = $validatedData['text'];
        $post->save();

        return redirect()->route('team.index')
            ->with('success', 'Post created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(contect $contect)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(contect $contect)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, contect $contect)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(contect $contect)
    {
        //
    }
}
