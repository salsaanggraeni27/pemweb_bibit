<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $cities = [
    // Cities in DKI Jakarta
    ['id' => 3171, 'province_id' => 31, 'title' => 'JAKARTA SELATAN'],
    ['id' => 3172, 'province_id' => 31, 'title' => 'JAKARTA TIMUR'],
    ['id' => 3173, 'province_id' => 31, 'title' => 'JAKARTA PUSAT'],
    ['id' => 3174, 'province_id' => 31, 'title' => 'JAKARTA BARAT'],
    ['id' => 3175, 'province_id' => 31, 'title' => 'JAKARTA UTARA'],
    // Cities in Jawa Barat
    ['id' => 3201, 'province_id' => 32, 'title' => 'KABUPATEN BOGOR'],
    ['id' => 3202, 'province_id' => 32, 'title' => 'KABUPATEN SUKABUMI'],
    ['id' => 3203, 'province_id' => 32, 'title' => 'KABUPATEN CIANJUR'],
    ['id' => 3204, 'province_id' => 32, 'title' => 'KABUPATEN BANDUNG'],
    ['id' => 3271, 'province_id' => 32, 'title' => 'KOTA BOGOR'],
    ['id' => 3272, 'province_id' => 32, 'title' => 'KOTA SUKABUMI'],
    ['id' => 3273, 'province_id' => 32, 'title' => 'KOTA BANDUNG'],
];

        foreach ($cities as $city) {
            DB::table('cities')->insert([
                'id' => $city['id'],
                'province_id' => $city['province_id'],
                'city_id' => $city['id'], // Adding city_id
                'title' => $city['title'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
                
        }
    }
}
