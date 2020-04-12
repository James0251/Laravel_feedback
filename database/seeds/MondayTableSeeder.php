<?php

use Illuminate\Database\Seeder;

class MondayTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mondays')->insert([
            'time' => '08:30',
        ]);
        DB::table('mondays')->insert([
            'time' => '08:45',
        ]);
        DB::table('mondays')->insert([
            'time' => '09:00',
        ]);
        DB::table('mondays')->insert([
            'time' => '09:15',
        ]);
        DB::table('mondays')->insert([
            'time' => '09:30',
        ]);
        DB::table('mondays')->insert([
            'time' => '09:45',
        ]);
        DB::table('mondays')->insert([
            'time' => '10:00',
        ]);
        DB::table('mondays')->insert([
            'time' => '10:15',
        ]);
        DB::table('mondays')->insert([
            'time' => '10:30',
        ]);
        DB::table('mondays')->insert([
            'time' => '10:45',
        ]);
        DB::table('mondays')->insert([
            'time' => '11:00',
        ]);
        DB::table('mondays')->insert([
            'time' => '11:15',
        ]);
        DB::table('mondays')->insert([
            'time' => '11:30',
        ]);
        DB::table('mondays')->insert([
            'time' => '11:45',
        ]);
        DB::table('mondays')->insert([
            'time' => '12:00',
        ]);
    }
}
