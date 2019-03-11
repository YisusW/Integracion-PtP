<?php

use Illuminate\Database\Seeder;

class PymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('country_payment_methods')->insert([
          'country_id'  => 1,
          'code'        => 'CR_VS',
          'description' => 'Visa',
          'created_at'=> now(),
          'updated_at'=> now()
        ]);
        DB::table('country_payment_methods')->insert([
          'country_id'  => 1,
          'code'        => 'CR_CR',
          'description' => 'Credencial Banco de Occidente',
          'created_at'=> now(),
          'updated_at'=> now()
        ]);
        DB::table('country_payment_methods')->insert([
          'country_id'  => 1,
          'code'        => 'CR_VE',
          'description' => 'Visa Electron',
          'created_at'=> now(),
          'updated_at'=> now()
        ]);
        DB::table('country_payment_methods')->insert([
          'country_id'  => 1,
          'code'        => 'CR_DN',
          'description' => 'Diners Club',
          'created_at'=> now(),
          'updated_at'=> now()
        ]);
        DB::table('country_payment_methods')->insert([
          'country_id'  => 1,
          'code'        => 'CR_AM',
          'description' => 'American Express',
          'created_at'=> now(),
          'updated_at'=> now()
        ]);
        DB::table('country_payment_methods')->insert([
          'country_id'  => 1,
          'code'        => 'RM_MC',
          'description' => 'MasterCard',
          'created_at'=> now(),
          'updated_at'=> now()
        ]);
        DB::table('country_payment_methods')->insert([
          'country_id'  => 1,
          'code'        => 'TY_EX',
          'description' => 'Tarjeta Éxito',
          'created_at'=> now(),
          'updated_at'=> now()
        ]);
        DB::table('country_payment_methods')->insert([
          'country_id'  => 1,
          'code'        => 'TY_AK',
          'description' => 'Alkosto',
          'created_at'=> now(),
          'updated_at'=> now()
        ]);
        DB::table('country_payment_methods')->insert([
          'country_id'  => 1,
          'code'        => '_PSE_',
          'description' => 'Débito a cuentas corrientes y ahorros (PSE)',
          'created_at'=> now(),
          'updated_at'=> now()
        ]);
        DB::table('country_payment_methods')->insert([
          'country_id'  => 1,
          'code'        => 'SFPAY',
          'description' => 'Safety Pay',
          'created_at'=> now(),
          'updated_at'=> now()
        ]);
        DB::table('country_payment_methods')->insert([
          'country_id'  => 1,
          'code'        => '_ATH_',
          'description' => 'Corresponsales bancarios Grupo Aval',
          'created_at'=> now(),
          'updated_at'=> now()
        ]);
        DB::table('country_payment_methods')->insert([
          'country_id'  => 1,
          'code'        => 'AC_WU',
          'description' => 'Western Union',
          'created_at'=> now(),
          'updated_at'=> now()
        ]);
        DB::table('country_payment_methods')->insert([
          'country_id'  => 1,
          'code'        => 'PYPAL',
          'description' => 'PayPal',
          'created_at'=> now(),
          'updated_at'=> now()
        ]);
        DB::table('country_payment_methods')->insert([
          'country_id'  => 1,
          'code'        => 'T1_BC',
          'description' => 'Bancolombia Recaudos',
          'created_at'=> now(),
          'updated_at'=> now()
        ]);
        DB::table('country_payment_methods')->insert([
          'country_id'  => 1,
          'code'        => 'AV_BO',
          'description' => 'Banco de Occidente Recaudos',
          'created_at'=> now(),
          'updated_at'=> now()
        ]);
        DB::table('country_payment_methods')->insert([
          'country_id'  => 1,
          'code'        => 'AV_AV',
          'description' => 'Banco AV Villas Recaudos',
          'created_at'=> now(),
          'updated_at'=> now()
        ]);
        DB::table('country_payment_methods')->insert([
          'country_id'  => 1,
          'code'        => 'AV_BB',
          'description' => 'Banco de Bogotá Recaudos',
          'created_at'=> now(),
          'updated_at'=> now()
        ]);
        DB::table('country_payment_methods')->insert([
          'country_id'  => 1,
          'code'        => 'VISAC',
          'description' => 'Visa Checkout',
          'created_at'=> now(),
          'updated_at'=> now()
        ]);
        DB::table('country_payment_methods')->insert([
          'country_id'  => 1,
          'code'        => 'GNPIN',
          'description' => 'GanaPIN',
          'created_at'=> now(),
          'updated_at'=> now()
        ]);
        DB::table('country_payment_methods')->insert([
          'country_id'  => 1,
          'code'        => 'GNRIS',
          'description' => 'Tarjeta RIS',
          'created_at'=> now(),
          'updated_at'=> now()
        ]);
        DB::table('country_payment_methods')->insert([
          'country_id'  => 1,
          'code'        => 'MSTRP',
          'description' => 'Masterpass',
          'created_at'=> now(),
          'updated_at'=> now()
        ]);
        DB::table('country_payment_methods')->insert([
          'country_id'  => 1,
          'code'        => 'DBTAC',
          'description' => 'Registro cuentas débito',
          'created_at'=> now(),
          'updated_at'=> now()
        ]);
        DB::table('country_payment_methods')->insert([
          'country_id'  => 1,
          'code'        => '_PPD_',
          'description' => 'Débito pre-autorizado (PPD)',
          'created_at'=> now(),
          'updated_at'=> now()
        ]);
        DB::table('country_payment_methods')->insert([
          'country_id'  => 1,
          'code'        => 'CDNSA',
          'description' => 'Codensa',
          'created_at'=> now(),
          'updated_at'=> now()
        ]);
        DB::table('country_payment_methods')->insert([
          'country_id'  => 2,
          'code'        => 'ID_VS',
          'description' => 'Visa',
          'created_at'=> now(),
          'updated_at'=> now()
        ]);
        DB::table('country_payment_methods')->insert([
          'country_id'  => 2,
          'code'        => 'ID_MC',
          'description' => 'Mastercard',
          'created_at'=> now(),
          'updated_at'=> now()
        ]);
        DB::table('country_payment_methods')->insert([
          'country_id'  => 2,
          'code'        => 'ID_DN',
          'description' => 'Diners',
          'created_at'=> now(),
          'updated_at'=> now()
        ]);
        DB::table('country_payment_methods')->insert([
          'country_id'  => 2,
          'code'        => 'ID_DS',
          'description' => 'Discover',
          'created_at'=> now(),
          'updated_at'=> now()
        ]);
    }
}
