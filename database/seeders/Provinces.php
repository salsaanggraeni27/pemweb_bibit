<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin\Province;
use Carbon\Carbon;

class Provinces extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provinces = [
            ['id' => 1, 'province_id' => 11, 'title' => 'ACEH'],
            ['id' => 2, 'province_id' => 12, 'title' => 'SUMATERA UTARA'],
            ['id' => 3, 'province_id' => 13, 'title' => 'SUMATERA BARAT'],
            ['id' => 4, 'province_id' => 14, 'title' => 'RIAU'],
            ['id' => 5, 'province_id' => 15, 'title' => 'JAMBI'],
            ['id' => 6, 'province_id' => 16, 'title' => 'SUMATERA SELATAN'],
            ['id' => 7, 'province_id' => 17, 'title' => 'BENGKULU'],
            ['id' => 8, 'province_id' => 18, 'title' => 'LAMPUNG'],
            ['id' => 9, 'province_id' => 19, 'title' => 'KEPULAUAN BANGKA BELITUNG'],
            ['id' => 10, 'province_id' => 21, 'title' => 'KEPULAUAN RIAU'],
            ['id' => 11, 'province_id' => 31, 'title' => 'DKI JAKARTA'],
            ['id' => 12, 'province_id' => 32, 'title' => 'JAWA BARAT'],
            ['id' => 13, 'province_id' => 33, 'title' => 'JAWA TENGAH'],
            ['id' => 14, 'province_id' => 34, 'title' => 'DI YOGYAKARTA'],
            ['id' => 15, 'province_id' => 35, 'title' => 'JAWA TIMUR'],
            ['id' => 16, 'province_id' => 36, 'title' => 'BANTEN'],
            ['id' => 17, 'province_id' => 51, 'title' => 'BALI'],
            ['id' => 18, 'province_id' => 52, 'title' => 'NUSA TENGGARA BARAT'],
            ['id' => 19, 'province_id' => 53, 'title' => 'NUSA TENGGARA TIMUR'],
            ['id' => 20, 'province_id' => 61, 'title' => 'KALIMANTAN BARAT'],
            ['id' => 21, 'province_id' => 62, 'title' => 'KALIMANTAN TENGAH'],
            ['id' => 22, 'province_id' => 63, 'title' => 'KALIMANTAN SELATAN'],
            ['id' => 23, 'province_id' => 64, 'title' => 'KALIMANTAN TIMUR'],
            ['id' => 24, 'province_id' => 65, 'title' => 'KALIMANTAN UTARA'],
            ['id' => 25, 'province_id' => 71, 'title' => 'SULAWESI UTARA'],
            ['id' => 26, 'province_id' => 72, 'title' => 'SULAWESI TENGAH'],
            ['id' => 27, 'province_id' => 73, 'title' => 'SULAWESI SELATAN'],
            ['id' => 28, 'province_id' => 74, 'title' => 'SULAWESI TENGGARA'],
            ['id' => 29, 'province_id' => 75, 'title' => 'GORONTALO'],
            ['id' => 30, 'province_id' => 76, 'title' => 'SULAWESI BARAT'],
            ['id' => 31, 'province_id' => 81, 'title' => 'MALUKU'],
            ['id' => 32, 'province_id' => 82, 'title' => 'MALUKU UTARA'],
            ['id' => 33, 'province_id' => 91, 'title' => 'PAPUA BARAT'],
            ['id' => 34, 'province_id' => 94, 'title' => 'PAPUA'],
        ];

        foreach ($provinces as $province) {
            Province::create([
                'id' => $province['id'],
                'province_id' => $province['province_id'],
                'title' => $province['title'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
