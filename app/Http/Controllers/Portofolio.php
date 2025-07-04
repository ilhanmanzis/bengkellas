<?php

namespace App\Http\Controllers;

use App\Models\Portofolio as ModelsPortofolio;
use App\Models\Profile;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;

class Portofolio extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profile = Profile::first();

        $portofolios = ModelsPortofolio::all();

        // Ambil beberapa nama/judul portofolio untuk keyword (jika ada kolom 'name' atau 'judul')
        $keywords = $portofolios->pluck('name')->toArray();
        // SEO Meta
        SEOMeta::setTitle('Portofolio Proyek Kami | ' . $profile->name);
        SEOMeta::setDescription('Lihat hasil pekerjaan dan proyek terbaik yang telah kami selesaikan.');
        SEOMeta::addKeyword(array_merge(['portofolio', 'hasil kerja', 'proyek', 'galeri'], $keywords));

        // Open Graph
        OpenGraph::setTitle('Portofolio Proyek Kami | ' . $profile->name);
        OpenGraph::setDescription('Jelajahi galeri portofolio kami dan temukan berbagai proyek yang telah kami kerjakan.');
        OpenGraph::setUrl(url('/portofolio'));
        OpenGraph::addProperty('type', 'website');

        // Twitter Card
        TwitterCard::setTitle('Portofolio Proyek Kami | ' . $profile->name);
        TwitterCard::setSite('@yourtwitterhandle'); // opsional
        $data = [
            'page' => 'Portofolio',
            'title' => 'Portofolio',
            'portofolios' => $portofolios
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
