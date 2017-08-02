<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
    protected $table='labels';

    protected $primaryKey = 'iden';

    protected $fillable = [
                'id',
                'iden',
                'name',
                'description',
                'national_maximum_deductible_amount',
                'foreign_maximum_deductible_amount',
                'national_company_policies',
                'foreign_company_policies',
                'active',
                'user_id',
                'business_id'
    ];
}
