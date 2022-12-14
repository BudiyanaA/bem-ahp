<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolios')->insert([
            'code' => 'A',
            'name' => "Sesuai & Jumlah >=3",
        ]);

        DB::table('portfolios')->insert([
            'code' => 'B',
            'name' => "Sesuai & Jumlah 2",
        ]);

        DB::table('portfolios')->insert([
            'code' => 'C',
            'name' => "Sesuai & Jumlah 1",
        ]);

        DB::table('portfolios')->insert([
            'code' => 'D',
            'name' => "Tidak Ada",
        ]);
    }
}
