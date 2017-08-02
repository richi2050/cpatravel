<?php

use Illuminate\Database\Seeder;
use App\Label;

class LabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Label::create([
            'iden'                                  => sha1('Alimentación'),
            'name'                                  => 'Alimentación',
            'description'                           => 'Etiqueta descripcion Alimentación',
            'national_maximum_deductible_amount'    =>  100.00,
            'foreign_maximum_deductible_amount'     =>  100.00,
            'national_company_policies'             =>  90.00,
            'foreign_company_policies'              =>  90.99,
            'business_id'                           =>  1,
            'user_id'                               =>  "af342f96-9425-44c2-bdde-78b9d00b131e"
        ]);

        Label::create([
            'iden'                                  => sha1('Hospedaje'),
            'name'                                  => 'Hospedaje',
            'description'                           => 'Etiqueta descripcion Hospedaje',
            'national_maximum_deductible_amount'    =>  19.00,
            'foreign_maximum_deductible_amount'     =>  10.00,
            'national_company_policies'             =>  9.00,
            'foreign_company_policies'              =>  9.99,
            'business_id'                           =>  1,
            'user_id'                               =>  "af342f96-9425-44c2-bdde-78b9d00b131e"
        ]);

        Label::create([
            'iden'                                  => sha1('Transporte'),
            'name'                                  => 'Transporte',
            'description'                           => 'Etiqueta descripcion Transporte',
            'national_maximum_deductible_amount'    =>  100.00,
            'foreign_maximum_deductible_amount'     =>  100.00,
            'national_company_policies'             =>  90.00,
            'foreign_company_policies'              =>  90.99,
            'business_id'                           =>  1,
            'user_id'                               =>  "af342f96-9425-44c2-bdde-78b9d00b131e"
        ]);

        Label::create([
            'iden'                                  => sha1('Renta de Autos'),
            'name'                                  => 'Renta de Autos',
            'description'                           => 'Etiqueta descripcion Renta de Autos',
            'national_maximum_deductible_amount'    =>  100.00,
            'foreign_maximum_deductible_amount'     =>  100.00,
            'national_company_policies'             =>  90.00,
            'foreign_company_policies'              =>  90.99,
            'business_id'                           =>  1,
            'user_id'                               =>  "af342f96-9425-44c2-bdde-78b9d00b131e"
        ]);

        Label::create([
            'iden'                                  => sha1('Seminarios o Convenciones'),
            'name'                                  => 'Seminarios o Convenciones',
            'description'                           => 'Etiqueta descripcion Seminarios o Convenciones',
            'national_maximum_deductible_amount'    =>  300.00,
            'foreign_maximum_deductible_amount'     =>  19.00,
            'national_company_policies'             =>  67.00,
            'foreign_company_policies'              =>  90.99,
            'business_id'                           =>  1,
            'user_id'                               =>  "af342f96-9425-44c2-bdde-78b9d00b131e"
        ]);

        Label::create([
            'iden'                                  => sha1('Pago por kilometraje'),
            'name'                                  => 'Pago por kilometraje',
            'description'                           => 'Etiqueta descripcion Pago por kilometraje',
            'national_maximum_deductible_amount'    =>  100.00,
            'foreign_maximum_deductible_amount'     =>  13.00,
            'national_company_policies'             =>  78.00,
            'foreign_company_policies'              =>  90.99,
            'business_id'                           =>  1,
            'user_id'                               =>  "af342f96-9425-44c2-bdde-78b9d00b131e"
        ]);

        Label::create([
            'iden'                                  => sha1('Transporte aéreo'),
            'name'                                  => 'Renta de Transporte aéreo',
            'description'                           => 'Etiqueta descripcion Transporte aéreo',
            'national_maximum_deductible_amount'    =>  12.00,
            'foreign_maximum_deductible_amount'     =>  45.00,
            'national_company_policies'             =>  90.00,
            'foreign_company_policies'              =>  90.99,
            'business_id'                           =>  1,
            'user_id'                               =>  "af342f96-9425-44c2-bdde-78b9d00b131e"
        ]);

        Label::create([
            'iden'                                  => sha1('Transporte terrestre'),
            'name'                                  => 'Renta de Transporte terrestre',
            'description'                           => 'Etiqueta descripcion Transporte terrestre',
            'national_maximum_deductible_amount'    =>  100.00,
            'foreign_maximum_deductible_amount'     =>  100.00,
            'national_company_policies'             =>  90.00,
            'foreign_company_policies'              =>  90.99,
            'business_id'                           =>  1,
            'user_id'                               =>  "af342f96-9425-44c2-bdde-78b9d00b131e"
        ]);
    }
}
