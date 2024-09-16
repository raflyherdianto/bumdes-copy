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
        $datas = [
            ['group' => 'BELUM/TIDAK BEKERJA', 'n' => 1336, 'n_percent' => 31.14, 'male_n' => 683, 'male_percent' => 15.92, 'female_n' => 653, 'female_percent' => 15.22, 'color' => '#14B8A6'],
            ['group' => 'MENGURUS RUMAH TANGGA', 'n' => 324, 'n_percent' => 7.55, 'male_n' => 1, 'male_percent' => 0.02, 'female_n' => 323, 'female_percent' => 7.53, 'color' => '#3B82F6'],
            ['group' => 'PELAJAR/MAHASISWA', 'n' => 478, 'n_percent' => 11.14, 'male_n' => 261, 'male_percent' => 6.08, 'female_n' => 217, 'female_percent' => 5.06, 'color' => '#6366F1'],
            ['group' => 'PENSIUNAN', 'n' => 13, 'n_percent' => 0.30, 'male_n' => 1, 'male_percent' => 0.26, 'female_n' => 2, 'female_percent' => 0.05, 'color' => '#F59E0B'],
            ['group' => 'PEGAWAI NEGERI SIPIL (PNS)', 'n' => 49, 'n_percent' => 1.14, 'male_n' => 33, 'male_percent' => 0.77, 'female_n' => 16, 'female_percent' => 0.37, 'color' => '#FACC15'],
            ['group' => 'TENTARA NASIONAL INDONESIA (TNI)', 'n' => 2, 'n_percent' => 0.05, 'male_n' => 2, 'male_percent' => 0.05, 'female_n' => 0, 'female_percent' => 0.00, 'color' => '#14B8A6'],
            ['group' => 'KEPOLISIAN RI (POLRI)', 'n' => 16, 'n_percent' => 0.37, 'male_n' => 15, 'male_percent' => 0.35, 'female_n' => 1, 'female_percent' => 0.02, 'color' => '#3B82F6'],
            ['group' => 'PERDAGANGAN', 'n' => 4, 'n_percent' => 0.09, 'male_n' => 0, 'male_percent' => 0.00, 'female_n' => 4, 'female_percent' => 0.09, 'color' => '#6366F1'],
            ['group' => 'PETANI/PEKEBUN', 'n' => 79, 'n_percent' => 1.84, 'male_n' => 63, 'male_percent' => 1.47, 'female_n' => 16, 'female_percent' => 0.37, 'color' => '#F59E0B'],
            ['group' => 'TRANSPORTASI', 'n' => 2, 'n_percent' => 0.05, 'male_n' => 2, 'male_percent' => 0.05, 'female_n' => 0, 'female_percent' => 0.00, 'color' => '#FACC15'],
            ['group' => 'KARYAWAN SWASTA', 'n' => 429, 'n_percent' => 10.00, 'male_n' => 252, 'male_percent' => 5.87, 'female_n' => 177, 'female_percent' => 4.13, 'color' => '#14B8A6'],
            ['group' => 'KARYAWAN BUMN', 'n' => 3, 'n_percent' => 0.07, 'male_n' => 3, 'male_percent' => 0.07, 'female_n' => 0, 'female_percent' => 0.00, 'color' => '#3B82F6'],
            ['group' => 'KARYAWAN HONORER', 'n' => 9, 'n_percent' => 0.21, 'male_n' => 6, 'male_percent' => 0.14, 'female_n' => 3, 'female_percent' => 0.07, 'color' => '#6366F1'],
            ['group' => 'BURUH HARIAN LEPAS', 'n' => 1340, 'n_percent' => 31.24, 'male_n' => 745, 'male_percent' => 17.37, 'female_n' => 595, 'female_percent' => 13.87, 'color' => '#F59E0B'],
            ['group' => 'BURUH TANI/PERKEBUNAN', 'n' => 10, 'n_percent' => 0.23, 'male_n' => 4, 'male_percent' => 0.09, 'female_n' => 6, 'female_percent' => 0.14, 'color' => '#FACC15'],
            ['group' => 'GURU', 'n' => 4, 'n_percent' => 0.09, 'male_n' => 3, 'male_percent' => 0.07, 'female_n' => 1, 'female_percent' => 0.02, 'color' => '#14B8A6'],
            ['group' => 'DOKTER', 'n' => 1, 'n_percent' => 0.02, 'male_n' => 1, 'male_percent' => 0.02, 'female_n' => 0, 'female_percent' => 0.00, 'color' => '#3B82F6'],
            ['group' => 'BIDAN', 'n' => 1, 'n_percent' => 0.02, 'male_n' => 0, 'male_percent' => 0.00, 'female_n' => 1, 'female_percent' => 0.02, 'color' => '#6366F1'],
            ['group' => 'PERAWAT', 'n' => 1, 'n_percent' => 0.02, 'male_n' => 0, 'male_percent' => 0.00, 'female_n' => 1, 'female_percent' => 0.02, 'color' => '#F59E0B'],
            ['group' => 'SOPIR', 'n' => 4, 'n_percent' => 0.09, 'male_n' => 4, 'male_percent' => 0.09, 'female_n' => 0, 'female_percent' => 0.00, 'color' => '#FACC15'],
            ['group' => 'PEDAGANG', 'n' => 103, 'n_percent' => 2.40, 'male_n' => 11, 'male_percent' => 0.26, 'female_n' => 92, 'female_percent' => 2.14, 'color' => '#6366F1'],
            ['group' => 'PERANGKAT DESA', 'n' => 2, 'n_percent' => 0.05, 'male_n' => 2, 'male_percent' => 0.05, 'female_n' => 0, 'female_percent' => 0.00, 'color' => '#F59E0B'],
            ['group' => 'WIRASWASTA', 'n' => 80, 'n_percent' => 1.86, 'male_n' => 58, 'male_percent' => 1.35, 'female_n' => 22, 'female_percent' => 0.51, 'color' => '#FACC15'],
            ['group' => 'TOTAL', 'n' => 4290, 'n_percent' => 100.00, 'male_n' => 2158, 'male_percent' => 50.30, 'female_n' => 2132, 'female_percent' => 49.70, 'color' => '#cbd5e1'],
        ];

        $filteredGroups = ['BELUM/TIDAK BEKERJA', 'MENGURUS RUMAH TANGGA', 'PELAJAR/MAHASISWA', 'PENSIUNAN', 'PEGAWAI NEGERI SIPIL (PNS)'];

        $dataChart = array_filter($datas, function ($item) use ($filteredGroups) {
            return in_array($item['group'], $filteredGroups);
        });

        $names = [];
        $colors = [];
        $values = [];

        foreach ($dataChart as $data) {
            $names[] = $data['group'];
            $colors[] = $data['color'];
            $values[] = $data['n'];
        }

        return view('pages.dataMasyarakat', compact('datas', 'names', 'colors', 'values'));

    }
}
