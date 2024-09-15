<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function catalog()
    {
        $catalogItems = [];
        for ($i = 1; $i <= 100; $i++) {
            $catalogItems[] = [
                'image_url' => 'https://via.placeholder.com/150?text=Image+' . $i,
                'name' => 'Product ' . $i,
                'price' => rand(10000, 100000)
            ];
        }

        $catalogItems = collect($catalogItems);

        // Ambil current page dari query string, default adalah 1
        $currentPage = LengthAwarePaginator::resolveCurrentPage();

        // Tentukan berapa item per halaman (misalnya 10)
        $perPage = 12;

        // Potong data sesuai dengan halaman saat ini
        $currentPageItems = $catalogItems->slice(($currentPage - 1) * $perPage, $perPage)->values();

        // Buat LengthAwarePaginator
        $paginatedItems = new LengthAwarePaginator(
            $currentPageItems, // Item di halaman saat ini
            $catalogItems->count(), // Total item
            $perPage, // Item per halaman
            $currentPage, // Halaman saat ini
            ['path' => request()->url(), 'query' => request()->query()] // URL dan query string
        );
        return view('pages.catalog', ['catalogItems' => $paginatedItems]);
    }

    public function simpanPinjam()
    {
        return view('pages.simpanPinjam');
    }

    public function dataMasyarakat()
    {
        return view('pages.dataMasyarakat');
    }
}
