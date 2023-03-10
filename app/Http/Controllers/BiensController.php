<?php

namespace App\Http\Controllers;

use App\Models\Biens;
use Illuminate\Http\Request;

class BiensController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $biens=new Biens();
        return view('biens')->with('lignes',$biens->get());
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('form.ajouter');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Biens $biens)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Biens $biens)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Biens $biens)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Biens $biens)
    {
        //
    }
}
