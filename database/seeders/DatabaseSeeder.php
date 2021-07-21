<?php

namespace Database\Seeders;

use App\Models\medecins;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\medecins::created(
            [
                'nom' => 'Delmar',
                'prenom'=> 'Cathy',
                'specialite' => 'kinesitherapeute',

            ]

        );

    }



    
}
