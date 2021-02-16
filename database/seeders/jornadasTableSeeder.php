<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\jornadas;

class jornadasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        jornadas::create([
           'DescJornada' => ''
        ]);
    }
}
