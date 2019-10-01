<!DOCTYPE html>
<html lang="en">

<head>

	<title>{{ $title }}</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />
	<!-- Favicon icon -->
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

	<!-- vendor css -->
	<link rel="stylesheet" href="{{ url('public/backend/assets/css/style.css') }}">
</head>
    @yield('content')
    
<script src="{{ url('public/backend/assets/js/vendor-all.min.js') }}"></script>
<script src="{{ url('public/backend/assets/js/plugins/bootstrap.min.js') }}"></script>
<script src="{{ url('public/backend/assets/js/ripple.js') }}"></script>
<script src="{{ url('public/backend/assets/js/pcoded.min.js') }}"></script>
</body>