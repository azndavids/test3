<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    
    protected $table = 'tickets';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'cust_name',
        'log_date',
        'target_date',
        'completed_date',
        'prob_title',
        'prob_log',
        'product',
        'circuit_no',
        'CTT',
        'responsible_team',
        'category',
        'priority'

    ];

    protected $dates = [
        
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // public function attachments()
    // {
    //     return $this->hasMany(TicketAttachment::class, 'ticket_id');
    // }


}