<?php

namespace Modules\VietNamZone\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class VietNamZoneDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

         $this->call(ProvincesTableSeeder::class);
         $this->call(LabelTableSeeder::class);
    }
}
