<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CityCode extends Model
{
    protected $fillable =[
        'name_city',
        'code_city',
        'name_country',
        'country_code'];
}
