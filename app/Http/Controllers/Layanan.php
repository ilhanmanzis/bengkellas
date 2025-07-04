<?php

namespace App\Http\Controllers;

use App\Models\Layanan as ModelsLayanan;
use App\Models\Profile;
use App\Models\Sosmed;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;

class Layanan extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $layanans = ModelsLayanan::all();
        $kontak = Sosmed::first();
        $profile = Profile::first();

        // Ambil beberapa nama layanan untuk keyword SEO
        $keywords = $layanans->pluck('name')->toArray();

        // SEO Meta
        SEOMeta::setTitle('Layanan Kami | ' . ($profile->name ?? 'Perusahaan Kami'));
        SEOMeta::setDescription('Kami menyediakan berbagai layanan seperti ' . implode(', ', $keywords) . '. Pelajari lebih lanjut tentang layanan yang kami tawarkan.');
        SEOMeta::addKeyword(array_merge(['layanan', 'jasa', 'produk', 'servis'], $keywords));

        // Open Graph
        OpenGraph::setTitle('Layanan Kami | ' . ($profile->name ?? 'Perusahaan Kami'));
        OpenGraph::setDescription('Jelajahi berbagai layanan kami dan temukan solusi terbaik untuk kebutuhan Anda.');
        OpenGraph::setUrl(url('/layanan'));
        OpenGraph::addProperty('type', 'website');


        // Twitter Card
        TwitterCard::setTitle('Layanan Kami | ' . ($profile->name ?? 'Perusahaan Kami'));
        TwitterCard::setSite('@yourtwitterhandle'); // Ganti jika punya akun Twitter

        // Data ke view
        $data = [
            'page' => 'Layanan',
            'title' => 'Layanan',
            'layanans' => $layanans,
            'kontak' => $kontak
        ];


        return view('public/layanan', $data);
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
