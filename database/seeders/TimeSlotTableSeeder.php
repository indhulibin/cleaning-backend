<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TimeSlotTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('time_slots')->insert([
            [
                'slot' => '09:00:00',
            ],
            [
                'slot' => '10:00:00',
            ],
            [
                'slot' => '11:00:00',
            ],
            [
                'slot' => '12:00:00',
            ],
            [
                'slot' => '13:00:00',
            ],
            [
                'slot' => '14:00:00',
            ],
            [
                'slot' => '15:00:00',
            ],
            [
                'slot' => '16:00:00',
            ],
            [
                'slot' => '17:00:00',
            ],
        ]);
    }
}
