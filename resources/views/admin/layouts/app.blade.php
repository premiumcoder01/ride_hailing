<!DOCTYPE html>
<html lang="en">
	<head>
		@include('admin.common.meta')
	</head>
	<body class="">
		<section id="wrapper" class="wrapper">
			@include('admin.common.sidebar')
			<section class="content-area">
				@include('admin.common.header')
				@yield('content')
			</section>
			@include('admin.common.footer')
		</section>
		@include('admin.common.footer-js')
	</body>

</html>

