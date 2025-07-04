<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Sosmed;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;

class Kontak extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profile = Profile::first();
        $kontak = Sosmed::first();
        // SEO Meta
        SEOMeta::setTitle('Hubungi Kami via WhatsApp | ' . ($profile->name ?? 'Perusahaan Kami'));
        SEOMeta::setDescription('Hubungi kami langsung melalui WhatsApp di nomor ' . $kontak->wa . ' atau lihat informasi kontak lainnya di halaman ini.');
        SEOMeta::addKeyword(['kontak', 'hubungi kami', 'whatsapp', 'layanan pelanggan', 'nomor WA', 'alamat']);

        // Open Graph
        OpenGraph::setTitle('Hubungi Kami via WhatsApp');
        OpenGraph::setDescription('Klik untuk menghubungi kami langsung melalui WhatsApp atau lihat sosial media dan alamat lengkap kami.');
        OpenGraph::setUrl(url('/kontak'));
        OpenGraph::addProperty('type', 'website');


        // Twitter Card
        TwitterCard::setTitle('Hubungi Kami via WhatsApp');
        TwitterCard::setSite('@yourtwitterhandle'); // opsional


        $data = [
            'page' => 'Kontak',
            'title' => 'Kontak',
            'kontak' => $kontak
        ];

        return view('public/kontak', $data);
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
