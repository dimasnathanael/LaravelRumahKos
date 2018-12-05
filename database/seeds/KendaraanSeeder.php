<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class KendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dt = Carbon::now('Asia/Jakarta');
        $dateTimeNow = $dt->toDateTimeString();

        DB::table('kendaraans')->insert([
            'name' => 'Kijang Innova',
            'engine_number' => 'TGN21243JDSJ943D',
            'license_plate' => 'T 1479 AO',
            'color' => 'Hitam',
            'created_at' => $dateTimeNow,
            'updated_at' => $dateTimeNow,
        ]);
    }
}
