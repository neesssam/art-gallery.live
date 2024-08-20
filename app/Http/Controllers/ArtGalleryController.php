<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtGalleryController extends Controller
{
    public function featured()
    {
        // Example artwork data
        $artworks = [
            [
                'name' => 'Jane Doe',
                'description' => 'A contemporary artist known for abstract expressionism.',
            ],
            // Add more artists here if needed
        ];

        return view('gallery.featured', ['artworks' => $artworks]);
    }

    public function archive()
    {
        // Logic for archived collections
        return view('gallery.archive', ['artworks' => $this->getArchivedArt()]);
    }

    private function getFeaturedArt()
    {
        return [
            ['title' => 'Urban Impressions', 'artist' => 'Jane Doe'],
            ['title' => 'Concrete Jungle', 'artist' => 'John Smith'],
        ];
    }

    private function getArchivedArt()
    {
        return [
            ['title' => 'Past Collection 1', 'artist' => 'Alice Johnson'],
            ['title' => 'Past Collection 2', 'artist' => 'Bob Brown'],
        ];
    }
}
