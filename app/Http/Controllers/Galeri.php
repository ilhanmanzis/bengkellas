<?php

namespace App\Http\Controllers;

use App\Models\Galeri as ModelsGaleri;
use App\Models\Profile;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;

class Galeri extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profile = Profile::first();
        // SEO Meta
        SEOMeta::setTitle('Galeri Kami | ' . $profile->name);
        SEOMeta::setDescription($profile->motto1 . ', ' . $profile->sekilas_info1);

        // Open Graph
        OpenGraph::setTitle('Galeri Kami | ' . $profile->name);
        OpenGraph::setDescription($profile->motto1 . ', ' . $profile->sekilas_info1);
        OpenGraph::setUrl(url('/galeri'));
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addImage(asset('storage/' . ($profile->logo)));

        // Twitter Card
        TwitterCard::setTitle('Galeri Kami | ' . $profile->name);
        TwitterCard::setSite('@yourtwitterhandle');
        $data = [
            'page' => 'Galeri',
            'title' => 'Galeri',
            'galeris' => ModelsGaleri::all()
        ];

        return view('public/galeri', $data);
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
        //
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
