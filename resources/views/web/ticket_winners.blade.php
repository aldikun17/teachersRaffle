@extends('web.index')
@section('title','Ticket Winners')
@section('content')

	<div class="col-md-12 well" style="color: black;">

		<table class="table table-striped table-bordered">

			<thead>
				
				<tr>
					
					<th> Ticket Number </th>

					<th> School Name </th>

					<th> Teacher Name </th>

				</tr>

			</thead>

			<tbody>
				
				@foreach($tickets as $ticket)

				<tr>
					
					<td>{{$ticket::find($ticket->id)->teacher_ticket->ticket_number}}</td>

					<td>{{$ticket::find($ticket->id)->teacher_ticket->school_name}}</td>

					<td>{{$ticket::find($ticket->id)->teacher_ticket->school_teacher_name}}</td>

				</tr>

				@endforeach

			</tbody>
			
		</table>

	</div>

@endsection