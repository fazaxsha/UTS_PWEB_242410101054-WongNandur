<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    private function getDataTanaman(): array
    {
        return [
            [
                'id'      => 1,
                'nama'    => 'Selada Hijau',
                'varietas'=> 'Butterhead',
                'media'   => 'Polibag',
                'umur'    => 21,
                'status'  => 'Siap Panen',
            ],
            [
                'id'      => 2,
                'nama'    => 'Bayam Merah',
                'varietas'=> 'Red Amaranth',
                'media'   => 'DWC',
                'umur'    => 14,
                'status'  => 'Tumbuh',
            ],
            [
                'id'      => 3,
                'nama'    => 'Kangkung',
                'varietas'=> 'Bangkok',
                'media'   => 'Polibag',
                'umur'    => 18,
                'status'  => 'Siap Panen',
            ],
            [
                'id'      => 4,
                'nama'    => 'Pakcoy',
                'varietas'=> 'Pakcoy Super',
                'media'   => 'Polibag',
                'umur'    => 9,
                'status'  => 'Tumbuh',
            ],
            [
                'id'      => 5,
                'nama'    => 'Tomat Cherry',
                'varietas'=> 'Sweet 100',
                'media'   => 'Bucket',
                'umur'    => 45,
                'status'  => 'Berbuah',
            ],
            [
                'id'      => 6,
                'nama'    => 'Basil',
                'varietas'=> 'Sweet Basil',
                'media'   => 'DWC',
                'umur'    => 7,
                'status'  => 'Semai',
            ],
            [
                'id'      => 7,
                'nama'    => 'Sawi Putih',
                'varietas'=> 'Napa',
                'media'   => 'Polibag',
                'umur'    => 30,
                'status'  => 'Siap Panen',
            ],
            [
                'id'      => 8,
                'nama'    => 'Cabe Rawit',
                'varietas'=> 'Lokal',
                'media'   => 'Bucket',
                'umur'    => 3,
                'status'  => 'Perlu Perhatian',
            ],
        ];
    }

    // Tampilkan halaman login
    public function showLogin()
    {
        return view('login');
    }

    // Proses form login → teruskan username ke dashboard via query string
    public function login(Request $request)
    {
        $username = $request->input('username');

        return redirect()->route('dashboard', ['username' => $username]);
    }

    // Halaman Dashboard
    public function dashboard(Request $request)
    {
        $username = $request->query('username', 'Petani');
        $tanaman = $this->getDataTanaman();

        $siapPanen = collect($tanaman)->where('status', 'Siap Panen')->count();
        $perluPerhatian = collect($tanaman)->where('status', 'Perlu Perhatian')->count();
        $totalTanaman = count($tanaman);

        // Masa tanam = selain siap panen dan perlu perhatian
        $ringkasan = [
            'total_tanaman'   => $totalTanaman,
            'siap_panen'      => $siapPanen,
            'masa_tanam'      => $totalTanaman - $siapPanen - $perluPerhatian,
            'perlu_perhatian' => $perluPerhatian,
        ];

        return view('dashboard', compact('username', 'ringkasan'));
    }

    // Halaman Pengelolaan — data array tanaman hidroponik
    public function pengelolaan(Request $request)
    {
        $username = $request->query('username', 'Petani');
        $tanaman = $this->getDataTanaman();

        return view('pengelolaan', compact('username', 'tanaman'));
    }

    // Halaman Profile
    public function profile(Request $request)
    {
        $username = $request->query('username', 'Petani');

        // Data profil petani (dummy)
        $profil = [
            'nama'     => $username,
            'jabatan'  => 'Admin Kebun',
            'lokasi'   => 'Jember, Jawa Timur',
            'bergabung'=> 'Januari 2026',
            'kebun'    => 'Kebun Hidroponik, Jember',
            'luas'     => '100 m²',
        ];

        return view('profile', compact('username', 'profil'));
    }

    // Logout — kembali ke login
    public function logout()
    {
        return redirect()->route('login');
    }
}
