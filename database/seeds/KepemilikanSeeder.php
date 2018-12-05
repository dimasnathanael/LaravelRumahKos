<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class KepemilikanSeeder extends Seeder
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

        DB::table('kepemilikan')->insert([
            'id_penghuni' => '1',
            'id_vehicle' => '1',
            'created_at' => $dateTimeNow,
            'updated_at' => $dateTimeNow,
        ]);
    }
}
