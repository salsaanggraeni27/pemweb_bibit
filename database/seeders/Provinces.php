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
    ['id' => 31, 'province_id' => 31, 'title' => 'DKI JAKARTA'],
    ['id' => 32, 'province_id' => 32, 'title' => 'JAWA BARAT'],
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
