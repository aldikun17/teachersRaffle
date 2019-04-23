<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Model\teacher_ticket;

use App\Model\ticket_winner;

use DB;

use Response;

class WebController extends Controller
{

	protected function empty_ticket()
	{
		$tickets = teacher_ticket::where('status',1)->orderBy('id','desc')->get();

		return $tickets;

	}

	protected function new_ticker_number()
	{

		foreach($this->empty_ticket() as $ticket):

				if(strlen($ticket->ticket_number) == 12)
				{

					$old_ticket_number 	= substr($ticket->ticket_number, 0,11);


					$increment_id 		= substr($ticket->ticket_number, 11,11) + 1;

				}	else if(strlen($ticket->ticket_number) == 13)
				{

					$old_ticket_number 	= substr($ticket->ticket_number, 0,11);

					$increment_id 		= substr($ticket->ticket_number, 11,12) + 1;


				}	else if(strlen($ticket->ticket_number) == 14)
				{

					$old_ticket_number 	= substr($ticket->ticket_number, 0,11);

					if(substr($ticket->ticket_number, 11,13) == 199)
					{

						$increment_id 		= '200';

					}	else if(substr($ticket->ticket_number, 11,13) == 299)
					{

						$increment_id 		= '300';

					}	else if(substr($ticket->ticket_number, 11,13) == 399)
					{

						$increment_id 		= '400';

					}	else if(substr($ticket->ticket_number, 11,13) == 499)
					{

						$increment_id 		= '500';

					}	else if(substr($ticket->ticket_number, 11,13) == 599)
					{

						$increment_id 		= '600';

					}	else if(substr($ticket->ticket_number, 11,13) == 699)
					{

						$increment_id 		= '700';

					}	else if(substr($ticket->ticket_number, 11,13) == 799)
					{

						$increment_id 		= '800';

					}	else if(substr($ticket->ticket_number, 11,13) == 899)
					{

						$increment_id 		= '900';

					}	else if(substr($ticket->ticket_number, 11,13) == 999)
					{

						$increment_id 		= '1000';

					}


					$increment_id = substr($ticket->ticket_number, 14,15) + 1;


				}		else if(strlen($ticket->ticket_number) == 15)
				{

					$old_ticket_number 	= substr($ticket->ticket_number, 0,11);

					if(substr($ticket->ticket_number, 12,14) == 1099)
					{

						$increment_id 		= '1100';

					}	else if(substr($ticket->ticket_number, 12,14) == 1199)
					{

						$increment_id 		= '1200';

					}	else if(substr($ticket->ticket_number, 12,14) == 1299)
					{

						$increment_id 		= '1300';

					}	else if(substr($ticket->ticket_number, 12,14) == 1399)
					{

						$increment_id 		= '1400';

					}	else if(substr($ticket->ticket_number, 12,14) == 1499)
					{

						$increment_id 		= '1500';

					}	else if(substr($ticket->ticket_number, 12,14) == 1599)
					{

						$increment_id 		= '1600';

					}	else if(substr($ticket->ticket_number, 12,14) == 1699)
					{

						$increment_id 		= '1700';

					}	else if(substr($ticket->ticket_number, 12,14) == 1799)
					{

						$increment_id 		= '1800';

					}	else if(substr($ticket->ticket_number, 12,14) == 1899)
					{

						$increment_id 		= '1900';

					}	else if(substr($ticket->ticket_number, 12,14) == 1999)
					{

						$increment_id 		= '2000';

					}	else if(substr($ticket->ticket_number, 11,14) == 2099)
					{

						$increment_id 		= '2100';

					}	else if(substr($ticket->ticket_number, 11,14) == 2199)
					{

						$increment_id 		= '2200';

					}	else if(substr($ticket->ticket_number, 11,14) == 2299)
					{

						$increment_id 		= '2300';

					}	else if(substr($ticket->ticket_number, 11,14) == 2399)
					{

						$increment_id 		= '2400';

					}	else if(substr($ticket->ticket_number, 11,14) == 2499)
					{

						$increment_id 		= '2500';

					}


					$increment_id = substr($ticket->ticket_number, 11,14) + 1;


				}

				$new_ticket_number 	= $old_ticket_number.$increment_id;

				return $new_ticket_number;

				
		endforeach;

	}

	protected function price_winner($ticker_number , $amount_price = null)
	{

		$request = array(

			'ticket_number' => $ticker_number,

			'amount_price'	=> $amount_price,

		);

		ticket_winner::create($request);

	}
    
	public function web_index(){

		if(empty($this->empty_ticket()))
		{

			$ticket_number = 'ticket-00001';

			return view('web.registration',compact('ticket_number'));

		}	else {

			$ticket_number = $this->new_ticker_number();

			return view('web.registration',compact('ticket_number'));

		}

	}

	protected function min_tickets()
	{

		$min_tickets = teacher_ticket::where('status',1)->min('id');

		return $min_tickets;

	}

	protected function max_tickets()
	{

		$max_tickets = teacher_ticket::where('status',1)->max('id');

		return $max_tickets;

	}

	public function generate_ticket()
	{

		$random_number = rand(1,$this->max_tickets());

		return view('web.generate_ticket',compact('random_number'));

	}

	public function ticket_generated($id, $amount = null)
	{

		$ticket_winner = teacher_ticket::where('ticket_number',$id)->where('status',1)->first();

		$this->price_winner($id,$amount);

		$ticket_update_status = teacher_ticket::find($ticket_winner->id);

		$ticket_update_status->status = 0;

		$ticket_update_status->save();

		return response::json([

			'ticket_winner' => $ticket_winner

		]);


	}


}
