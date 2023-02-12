<?php

namespace App\Http\Controllers;

use App\Models\subtype_kabel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SubtypeKabelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
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
    public function show(subtype_kabel $subtype_kabel): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(subtype_kabel $subtype_kabel): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, subtype_kabel $subtype_kabel): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(subtype_kabel $subtype_kabel): RedirectResponse
    {
        //
    }
}
