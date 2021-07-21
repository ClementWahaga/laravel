<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use app\Medecin;

class medecinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medecin')->insert(
            [
                'nom' => 'Lory',
                'prenom'=>'Olga',
                'specialite' =>'dentiste',

            ]

        );
       

    }
}
