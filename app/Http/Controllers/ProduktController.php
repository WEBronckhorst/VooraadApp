<?php

namespace App\Http\Controllers;

use App\Models\Produkt;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProduktController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        return view('produkt.index')->with('produkt', Produkt::all());
        # code...
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produkt.create');
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
    public function show(Produkt $produkt)
    {
        return view('produkt.show')->with('produkt', $produkt);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produkt $produkt)
    {
        return view('produkt.edit')->with('produkt', $produkt);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produkt $produkt): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produkt $produkt): RedirectResponse
    {
        //
    }
}
