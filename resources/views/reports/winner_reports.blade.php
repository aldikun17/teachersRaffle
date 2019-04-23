<!DOCTYPE html>
<html>
<head>
	<title> Winner Reports </title>
	<style type="text/css">

		.wrapper-title{

			margin-top: 20px;
			max-height: 150px;
			height: 100px;

		}
		
	</style>
</head>
<body>

	<div style="width: 80%;margin-left: 150px;font-family: calibri">

		<div class="wrapper-title">
			
			<center><h1> List of Winner on Teachers Week </h1></center>
			<hr>

		</div>

		<div style="border:1px solid black;font-family: calibri">
			
			<table cellpadding="5px" cellspacing="5px" border="1" style="width: 100%">
				
				<thead>

					<thead>

						<tr>
							
							<th width="300px"> Ticket # </th>

							<th width="500px"> School Name </th>

							<th> Teacher Name </th>

						</tr>

					</thead>

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
		
	</div>

</body>
</html>