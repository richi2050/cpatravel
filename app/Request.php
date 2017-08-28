<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $primaryKey ="iden";
    protected $fillable = [
                        'id',
                        'iden',
                        'start_date',
                        'end_date',
                        'departure_hour',
                        'hour_return',
                        'initial_destination',
                        'final_destination',
                        'days',
                        'project_id',
                        'subproject_id',
                        'user_id',
                        'travel_id',
                        'status'];
    protected $casts = [
        'iden' => 'string',
    ];

}
