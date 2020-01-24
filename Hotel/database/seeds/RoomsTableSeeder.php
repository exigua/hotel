<?php

use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            // 'room_id' => 1,
            'name' => 'The room',
            'number' => 1,
            'price' => 955,
            'type' => 'Standard',

        ]);
        
        DB::table('rooms')->insert([
            // 'room_id' => 2,
            'name' => 'A better room',
            'number' => 2,
            'price' => 1255,
            'type' => 'Deluxe',
        ]);
        
        DB::table('rooms')->insert([
            // 'room_id' => 3,
            'name' => 'The best room',
            'number' => 3,
            'price' => 1555,
            'type' => 'Deluxe',
        ]);

        DB::table('rooms')->insert([
            // 'room_id' => 4,
            'name' => 'The very best room',
            'number' => 4,
            'price' => 1955,
            'type' => 'Superior',
        ]);

        DB::table('rooms')->insert([
            // 'room_id' => 5,
            'name' => 'The magnificent room',
            'number' => 5,
            'price' => 2555,
            'type' => 'Luxurious',
        ]);

        DB::table('rooms')->insert([
            // 'room_id' => 6,
            'name' => 'The unbelievable room',
            'number' => 6,
            'price' => 4955,
            'type' => 'Luxurious',
        ]);
    }
}
