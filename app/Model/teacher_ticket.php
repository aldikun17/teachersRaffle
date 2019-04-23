<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use App\Model\ticket_winner;

class teacher_ticket extends Model
{
    
	protected $table = 'school_tickets';

	protected $fillable = [

		'ticket_number',

		'school_name',

		'school_teacher_name',

		'status'

	];

	public function ticket_winner()
	{

		return $this->belongsTo( ticket_winner::class, 'ticket_number', 'ticket_number' );

	}


}
