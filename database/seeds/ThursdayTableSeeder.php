<?php

use Illuminate\Database\Seeder;

class ThursdayTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('thursdays')->insert([
            'time' => '13:30',
        ]);
        DB::table('thursdays')->insert([
            'time' => '13:45',
        ]);
        DB::table('thursdays')->insert([
            'time' => '14:00',
        ]);
        DB::table('thursdays')->insert([
            'time' => '14:15',
        ]);
        DB::table('thursdays')->insert([
            'time' => '14:30',
        ]);
        DB::table('thursdays')->insert([
            'time' => '14:45',
        ]);
        DB::table('thursdays')->insert([
            'time' => '15:00',
        ]);
        DB::table('thursdays')->insert([
            'time' => '15:15',
        ]);
        DB::table('thursdays')->insert([
            'time' => '15:30',
        ]);
        DB::table('thursdays')->insert([
            'time' => '15:45',
        ]);
        DB::table('thursdays')->insert([
            'time' => '16:00',
        ]);
        DB::table('thursdays')->insert([
            'time' => '16:15',
        ]);
        DB::table('thursdays')->insert([
            'time' => '16:30',
        ]);
        DB::table('thursdays')->insert([
            'time' => '',
        ]);
        DB::table('thursdays')->insert([
            'time' => '',
        ]);
    }
}
