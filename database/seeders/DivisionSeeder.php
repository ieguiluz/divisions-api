<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('divisions')->insert([
            'name' => 'Dirección general',
            'level' => 1,
            'colaborators_qty' => 1,
        ]);

        DB::table('divisions')->insert([
            'name' => 'Producto',
            'level' => 1,
            'colaborators_qty' => 2,
        ]);

        DB::table('divisions')->insert([
            'name' => 'Operaciones',
            'level' => 1,
            'colaborators_qty' => 5,
        ]);

        DB::table('divisions')->insert([
            'name' => 'CEO',
            'level' => 1,
            'colaborators_qty' => 1,
            'ambassador' => 'Jordyn Herwitz',
            'parent_id' => 1,
        ]);

        DB::table('divisions')->insert([
            'name' => 'Mandu-Corp',
            'level' => 2,
            'colaborators_qty' => 11,
            'ambassador' => 'Carla Siphron',
            'parent_id' => 1,
        ]);

        DB::table('divisions')->insert([
            'name' => 'Growth',
            'level' => 2,
            'colaborators_qty' => 4,
            'parent_id' => 2,
        ]);

        DB::table('divisions')->insert([
            'name' => 'Strategy',
            'level' => 3,
            'colaborators_qty' => 6,
            'parent_id' => 1,
        ]);

        DB::table('divisions')->insert([
            'name' => 'Tech',
            'level' => 3,
            'colaborators_qty' => 10,
            'parent_id' => 3,
            'ambassador' => 'Johnny Quest',
        ]);

        DB::table('divisions')->insert([
            'name' => 'Lorem ipsum',
            'level' => 4,
            'colaborators_qty' => 14,
            'parent_id' => 3,
        ]);

        DB::table('divisions')->insert([
            'name' => 'Dolor sit amet',
            'level' => 3,
            'colaborators_qty' => 3,
            'parent_id' => 2,
        ]);
    }
}
