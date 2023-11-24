<?php

namespace App\Http\Controllers;

use App\Models\invoices;
use Illuminate\Http\Request;

class InvoicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = invoices::all();
        return view('pages.admins.invoicess.viewinvoicess', compact('posts'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admins.invoicess.create');
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
            'company' => 'required',
            'stats' => 'required',
            'adrees' => 'required',
        ]);

        $post = new invoices();
        $post->name = $validatedData['name'];
        $post->phone = $validatedData['phone'];
        $post->email = $validatedData['email'];
        $post->company = $validatedData['company'];
        $post->stats = $validatedData['stats'];
        $post->adrees = $validatedData['adrees'];
        $post->save();

        return redirect()->route('team.index')
            ->with('success', 'Post created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = invoices::find($id);
        return view('pages.admins.invoicess.addinvoicess', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(invoices $invoices)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, invoices $invoices)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(invoices $invoices)
    {
        //
    }
}
