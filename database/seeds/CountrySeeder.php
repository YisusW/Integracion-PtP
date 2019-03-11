<?php

use Illuminate\Database\Seeder;
use App\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('country')->insert([
           'id'        => 1,
           'name'      => 'Colombia',
           'locale'    => 'es_CO',
           'dial_code' => '57',
           'currency'  => 'COP',
           'created_at'=> now(),
           'updated_at'=> now()
        ]);
        DB::table('country')->insert([
           'id'        => 2,
           'name'      => 'Ecuadoor',
           'locale'    => 'es_EC',
           'dial_code' => '593',
           'currency'  => 'USD',
           'created_at'=> now(),
           'updated_at'=> now()
        ]);
        DB::table('country')->insert([
           'id'        => 3,
           'name'      => 'Panamá',
           'locale'    => 'es_PA',
           'dial_code' => '507',
           'currency'  => 'PAB',
           'created_at'=> now(),
           'updated_at'=> now()
        ]);
        DB::table('country')->insert([
           'id'        => 4,
           'name'      => 'Brazil',
           'locale'    => 'pt_BR',
           'dial_code' => '55',
           'currency'  => 'BRL',
           'created_at'=> now(),
           'updated_at'=> now()
        ]);
        DB::table('country')->insert([
           'id'        => 5,
           'name'      => 'USA',
           'locale'    => 'en_US',
           'dial_code' => '1',
           'currency'  => 'USD',
           'created_at'=> now(),
           'updated_at'=> now()
        ]);
        DB::table('country')->insert([
           'id'        => 6,
           'name'      => 'Internacional',
           'locale'    => 'NA',
           'dial_code' => 'NA',
           'currency'  => 'NA',
           'created_at'=> now(),
           'updated_at'=> now()
        ]);
    }
}
