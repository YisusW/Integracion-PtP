<?php

use Illuminate\Database\Seeder;

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
           'name'      => 'Colombia',
           'locale'    => 'es_CO',
           'dial_code' => '57',
           'currency'  => 'COP',
        ],[
          'name'      => 'Ecuadoor',
          'locale'    => 'es_EC',
          'dial_code' => '593',
          'currency'  => 'USD',
        ],[
           'name'      => 'Panamá',
           'locale'    => 'es_PA',
           'dial_code' => '507',
           'currency'  => 'PAB',
        ],[
           'name'      => 'Brazil',
           'locale'    => 'pt_BR',
           'dial_code' => '55',
           'currency'  => 'BRL',
        ],[
           'name'      => 'USA',
           'locale'    => 'en_US',
           'dial_code' => '1',
           'currency'  => 'USD',
        ],[
           'name'      => 'Internacional',
           'locale'    => 'NA',
           'dial_code' => 'NA',
           'currency'  => 'NA',
        ]);
    }
}
