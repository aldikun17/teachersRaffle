<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use App\Model\teacher_ticket;

class ticket_winner extends Model
{
    
	protected $table = 'ticket_winners';

	protected $fillable = [

		'ticket_number',

		'amount_price'

	];

	public function teacher_ticket()
	{

		return $this->belongsTo( teacher_ticket::class, 'ticket_number', 'ticket_number' );

	}

}
