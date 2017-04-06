<!DOCTYPE html>
<html lang="{{Session::get('lang')}}">
<head>

	@include('app.includes.head')

</head>

<body>

	<!-- Document Wrapper
	============================================= -->

	@include('app.includes.nav')
	<div id="app">	
	@yield('content')
	</div>
	<hr>

	@include('app.includes.footer')
	
	@include('app.includes.scripts')
	

</body>
</html>