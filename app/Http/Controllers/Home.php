<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Layanan;
use App\Models\Portofolio;
use App\Models\Profile;
use App\Models\Sosmed;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;

class Home extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profile = Profile::first();
        // SEO Meta
        SEOMeta::setTitle($profile->name);
        SEOMeta::setDescription($profile->motto1 . ', ' . $profile->sekilas_info1);
        SEOMeta::addKeyword(['layanan', 'portofolio', 'jasa', 'bengkel las', 'produk']);

        // Open Graph
        OpenGraph::setTitle($profile->name);
        OpenGraph::setDescription($profile->motto1 . ', ' . $profile->sekilas_info1);
        OpenGraph::setUrl(url('/'));
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addImage(asset('storage/' . ($profile->logo)));

        // Twitter Card
        TwitterCard::setTitle($profile->name);
        TwitterCard::setSite('@yourtwitterhandle');
        $data = [
            'page' => 'Home',
            'title' => $profile->name,
            'profile' => $profile,
            'layanans' => Layanan::limit(3)->get(),
            'portofolios' => Portofolio::limit(3)->get(),
            'banners' => Banner::all(),
            'kontak' => Sosmed::first()
        ];

        return view('public/home', $data);
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
