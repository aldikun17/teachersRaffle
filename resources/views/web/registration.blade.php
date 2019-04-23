@extends('web.index')
@section('title','Ticket Registration')
@section('content')

	<form action="{{Route('teacher.store')}}" method="POST">

		{{csrf_field()}}

		<div class="panel panel-primary" style="color:black">
		  <div class="panel-heading">
		    <h3 class="panel-title"> Ticket Registration </h3>
		  </div>
		  <div class="panel-body">
		    
		  	<div class="row" style="padding: 20px 20px 20px 20px">

		  		<div class="col-md-12">

		  			<div class="col-md-3">

		  				<label> Ticket Number: </label>
		  				
		  			</div>

		  			<div class="col-md-9 form-group">

		  				<input type="text" name="ticket_number" class="form-control" readonly value="{{ucwords($ticket_number)}}" required>
		  				
		  			</div>
		  			
		  		</div>
		  		
		  		<div class="col-md-12">

		  			<div class="col-md-3">

		  				<label> Teacher: </label>
		  				
		  			</div>

		  			<div class="col-md-9 form-group">

		  				<input type="text" name="school_teacher_name" class="form-control" required>
		  				
		  			</div>
		  			
		  		</div>

		  		<div class="col-md-12">

		  			<div class="col-md-3">

		  				<label> School Name: </label>
		  				
		  			</div>

		  			<div class="col-md-9 form-group">

		  				<input type="text" name="school_name" class="form-control" required>
		  				
		  			</div>
		  			
		  		</div>

		  		<div class="col-md-12" style="display: none">

		  			<div class="col-md-9 form-group">

		  				<input type="hidden" name="status" class="form-control" value="1">
		  				
		  			</div>
		  			
		  		</div>

		  		<div class="col-md-12">

		  			<center><input type="submit" value="Submit" class="btn btn-primary"></center>
		  			
		  		</div>

		  	</div>

		  </div>

		</div>

	</form>


@endsection