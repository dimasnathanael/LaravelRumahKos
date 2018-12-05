<?php

require 'vendor/autoload.php';

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PenghuniSeeder extends Seeder
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

        DB::table('penghunis')->insert([
            'name' => 'Dimas Nathanael',
            'email' => 'nathanael.silalahi@gmail.com',
            'phone' => '082120504611',
            'address' => 'Komplek POJ Blok B No.8, Sadang, Purwakarta',
            'created_at' => $dateTimeNow,
            'updated_at' => $dateTimeNow,
        ]);
    }
}
