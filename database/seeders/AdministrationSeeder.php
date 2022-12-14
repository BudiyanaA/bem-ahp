<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdministrationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('administrations')->insert([
            'code' => 'A',
            'name' => "Berkas Lengkap",
        ]);

        DB::table('administrations')->insert([
            'code' => 'B',
            'name' => "Berkas Kurang 1",
        ]);

        DB::table('administrations')->insert([
            'code' => 'C',
            'name' => "Berkas Kurang 2",
        ]);

        DB::table('administrations')->insert([
            'code' => 'D',
            'name' => "Berkas Kurang >3",
        ]);
    }
}
