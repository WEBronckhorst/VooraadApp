<?php

namespace App\Http\Controllers;

use App\Models\Bak;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('bak.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bak.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Bak $bak): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bak $bak)
    {
        return view('bak.edit', compact('bak'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bak $bak): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bak $bak): RedirectResponse
    {
        //
    }
}
