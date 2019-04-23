@extends('web.index')
@section('title','Ticket Generator')
@section('content')


	<div class="col-md-12">

		<div class="col-md-6 col-md-offset-3" style="color:black">

			<div class="col-md-12 well" style="height: 350px;">
				
				<div>
					
					<ul class="list list-unstyled" id="ticket_winner">
						
					</ul>

				</div>

			</div>

			<form id="generate_ticket">

				<input type="text" name="ticket_number" id="ticker_number" value="Ticket-0000{{$random_number}}" class="form-control form-group" readonly>

				<input type="text" name="amount_price" id="amount_price" class="form-control form-group" placeholder="Enter Code">

				<center><input type="submit" value="Submit" class="btn btn-primary"></center>

			</form>

			<button class="btn btn-default" style="position: fixed;left:830px;top:545px;" id="clear">Clear</button>
			
		</div>
		
	</div>

	<script type="text/javascript">
		
		$('#generate_ticket').submit(function(e){

			$('#clear').click(function(){

				location.reload();

			});

			$.ajax({

				type: 'GET',

				url : "{{url('ticket/number')}}/"+ document.getElementById('ticker_number').value + '/' + document.getElementById('amount_price').value,

				success: function(response){

					var tickets_winner = "<li>"+
											"<li> <label> Ticket: </label><label class='pull-right'>" + response.ticket_winner['ticket_number'] + "</label></li>"+
											"<li><label> Winner Name: </label><label class='pull-right'>" + response.ticket_winner['school_teacher_name'] + "</label></li>"+
											"<li><label> School Name: </label><label class='pull-right'>" + response.ticket_winner['school_name'] + "</label></li>";

					$('#ticket_winner').html(tickets_winner);

				}

			});

			e.preventDefault();

		});

	</script>

@endsection