<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $criterias = [
            "Administrasi",
            "Pengetahuan",
            "Psikotest",
            "Interview",
            "Portofolio",
        ];

        foreach ($criterias as $key => $c) {
            DB::table('criterias')->insert([
                'id'   => $key + 1,
                'code' => 'C0' . ($key + 1),
                'name' => $c,
            ]);
        }
    }
}
