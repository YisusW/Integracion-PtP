<?php

use Illuminate\Database\Seeder;

class TypeDocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('country_type_documents')->insert([
          'country_id'  => 1,
          'code'        => 'CC',
          'description' => 'Cédula de ciudadanía',
          'created_at'=> now(),
          'updated_at'=> now()
        ]);
        DB::table('country_type_documents')->insert([
          'country_id'  => 1,
          'code'        => 'CE',
          'description' => 'Cédula de extranjería',
          'created_at'=> now(),
          'updated_at'=> now()
        ]);
        DB::table('country_type_documents')->insert([
          'country_id'  => 1,
          'code'        => 'TI',
          'description' => 'Tarjeta de identidad',
          'created_at'=> now(),
          'updated_at'=> now()
        ]);
        DB::table('country_type_documents')->insert([
          'country_id'  => 1,
          'code'        => 'RC',
          'description' => 'Registro Civil',
          'created_at'=> now(),
          'updated_at'=> now()
        ]);
        DB::table('country_type_documents')->insert([
          'country_id'  => 1,
          'code'        => 'NIT',
          'description' => 'Número de Identificación Tributaria',
          'created_at'=> now(),
          'updated_at'=> now()
        ]);
        DB::table('country_type_documents')->insert([
          'country_id'  => 1,
          'code'        => 'RUT',
          'description' => 'Registro único tributario',
          'created_at'=> now(),
          'updated_at'=> now()
        ]);
        DB::table('country_type_documents')->insert([
          'country_id'  => 6,
          'code'        => 'PPN',
          'description' => 'Pasaporte',
          'created_at'=> now(),
          'updated_at'=> now()
        ]);
        DB::table('country_type_documents')->insert([
          'country_id'  => 6,
          'code'        => 'TAX',
          'description' => 'TAX',
          'created_at'=> now(),
          'updated_at'=> now()
        ]);
        DB::table('country_type_documents')->insert([
          'country_id'  => 6,
          'code'        => 'LIC',
          'description' => 'Labeler Identification Code',
          'created_at'=> now(),
          'updated_at'=> now()
        ]);
        DB::table('country_type_documents')->insert([
          'country_id'  => 2,
          'code'        => 'CI',
          'description' => 'Cédula de identidad',
          'created_at'=> now(),
          'updated_at'=> now()
        ]);
        DB::table('country_type_documents')->insert([
          'country_id'  => 2,
          'code'        => 'RUC',
          'description' => 'Registro Único de Contribuyentes',
          'created_at'=> now(),
          'updated_at'=> now()
        ]);
        DB::table('country_type_documents')->insert([
          'country_id' => 3,
          'code' => 'CIP',
          'description' => 'Cédula de identidad personal',
          'created_at'=> now(),
          'updated_at'=> now()
        ]);
        DB::table('country_type_documents')->insert([
          'country_id' => 4,
          'code' => 'CPF',
          'description' => 'Cadastro de Pessoas Físicas',
          'created_at'=> now(),
          'updated_at'=> now()
        ]);
        DB::table('country_type_documents')->insert([
          'country_id' => 5,
          'code' => 'SSN',
          'description' => 'Social security number',
          'created_at'=> now(),
          'updated_at'=> now()
        ]);
    }
}
