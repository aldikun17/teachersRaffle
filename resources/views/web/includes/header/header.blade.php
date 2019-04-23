<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
</head>
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/admin.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('admin/css/datatables/dataTables.bootstrap.min.css')}}">
	<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jqueryui.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('admin/js/validate/AdminValidate.js')}}"></script>
	<script type="text/javascript" src="{{asset('admin/js/datatables/jquery.dataTables.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('admin/js/datatables/dataTables.bootstrap.min.js')}}"></script>

	<script type="text/javascript">
	    $.ajaxSetup({
	           headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
	    });
	</script>
<body>
