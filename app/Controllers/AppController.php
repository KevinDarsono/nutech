<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AppController extends BaseController
{
    public function dashboard()
    {
        $data["component"] = [
            [
                "id" => 1,
                "name" => "PBB",
                "image" => "image/PBB.png",
                "links" => ""
            ],
            [
                "id" => 2,
                "name" => "Listrik",
                "image" => "image/Listrik.png",
                "links" => ""
            ],
            [
                "id" => 3,
                "name" => "Pulsa",
                "image" => "image/Pulsa.png",
                "links" => ""
            ],
            [
                "id" => 4,
                "name" => "PDAM",
                "image" => "image/PDAM.png",
                "links" => ""
            ],
            [
                "id" => 5,
                "name" => "PGN",
                "image" => "image/PGN.png",
                "links" => ""
            ],
            [
                "id" => 6,
                "name" => "TV Langganan",
                "image" => "image/Televisi.png",
                "links" => ""
            ],
            [
                "id" => 7,
                "name" => "Musik",
                "image" => "image/Musik.png",
                "links" => ""
            ],
            [
                "id" => 8,
                "name" => "Voucher Game",
                "image" => "image/Game.png",
                "links" => ""
            ],
            [
                "id" => 9,
                "name" => "Voucher Makanan",
                "image" => "image/Voucher Makanan.png",
                "links" => ""
            ],
            [
                "id" => 10,
                "name" => "Kurban",
                "image" => "image/Kurban.png",
                "links" => ""
            ],
            [
                "id" => 11,
                "name" => "Zakat",
                "image" => "image/Zakat.png",
                "links" => ""
            ],
            [
                "id" => 12,
                "name" => "Paket Data",
                "image" => "image/Paket Data.png",
                "links" => ""
            ]
        ];

        $data["banners"] = [
            [
                "id" => 1,
                "image" => "image/Banner 1.png"
            ],
            [
                "id" => 2,
                "image" => "image/Banner 2.png"
            ],
            [
                "id" => 3,
                "image" => "image/Banner 3.png"
            ],
            [
                "id" => 4,
                "image" => "image/Banner 4.png"
            ],
            [
                "id" => 4,
                "image" => "image/Banner 5.png"
            ],
        ];

        return view("page/dashboard/index", $data);
    }

    public function fetchDashboard()
    {
        $apiUrl = "https://take-home-test-api.nutech-integrasi.app/banner";

        // Melakukan request ke API dengan metode GET
        $apiData = file_get_contents($apiUrl);

        // Menangani respons dari API
        if ($apiData !== false) {
            // Mengirimkan data ke view
            $data['api_data'] = json_decode($apiData, true); // Jika data API dalam format JSON

            // Memuat view dan menyertakan data
            return view('page/dashboard/index', $data);
        } else {
            // Menangani kesalahan jika request tidak berhasil
            echo 'Error fetching API data';
        }
    }
}
