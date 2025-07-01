<?php

namespace App\Http\Controllers;

use App\Models\Portofolio as ModelsPortofolio;
use Illuminate\Http\Request;

class Portofolio extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'page' => 'Portofolio',
            'title' => 'Portofolio',
            'portofolios' => ModelsPortofolio::all()
        ];

        return view('public/portofolio', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
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
    public function show(string $id)
    {
        $data = [
            'page' => 'Portofolio',
            'title' => 'Portofolio',
            'portofolio' => ModelsPortofolio::find($id)
        ];

        return view('public/show_portofolio', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
