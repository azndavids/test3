<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Golek extends Model
{

    /**
     * table name
     *
     * @var string
     */
    protected $table = 'craw';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','phone','email',''
    ];

    

}
