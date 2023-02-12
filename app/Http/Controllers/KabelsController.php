<?php

namespace App\Http\Controllers;

use App\Models\Kabels;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class KabelsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('kabels.index', [
            'kabels' => Kabels::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kabels.create');
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
    public function show(Kabels $kabels): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kabels $kabels)
    {
        return view('kabels.edit', [
            'kabels' => $kabels
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kabels $kabels): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kabels $kabels): RedirectResponse
    {
        //
    }
}
