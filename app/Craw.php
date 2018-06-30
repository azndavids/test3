<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Craw extends Model
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
        'nameCraw','phoneCraw','emailCraw','statusCraw'
    ];

    

}
