<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Guru;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $namas= ['neni','tika'];

       foreach($namas as $nama) : Guru::firstOrCreate(['nama'=> $nama]);
    endforeach;

    }

}
