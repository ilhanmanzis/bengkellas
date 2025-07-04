<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;

class TentangKami extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profile = Profile::first();
        SEOMeta::setTitle('Tentang Kami | ' . $profile->name);
        SEOMeta::setDescription(strip_tags($profile->tentang_kami));

        // Open Graph
        OpenGraph::setTitle('Tentang Kami | ' . $profile->name);
        OpenGraph::setDescription(strip_tags($profile->tentang_kami));
        OpenGraph::setUrl(url('/tentangkami'));
        OpenGraph::addProperty('type', 'website');

        // Twitter Card
        TwitterCard::setTitle('Tentang Kami | ' . $profile->name);
        //        TwitterCard::setSite('@yourtwitterhandle'); // opsional
        $data = [
            'page' => 'Tentang Kami',
            'title' => 'Tentang Kami',
            'profile' => $profile
        ];

        return view('public/tentang', $data);
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
