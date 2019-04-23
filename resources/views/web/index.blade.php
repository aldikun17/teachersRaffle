@include('web.includes.header.header')

<div class="container-fluid">
	
	<div class="col-md-10 col-md-offset-1" style="margin-top:80px;">
		
		<div class="row">

			@yield('content')
			
		</div>

	</div>

</div>

@include('web.includes.footer.footer')