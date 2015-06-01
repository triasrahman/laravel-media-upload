<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel Media Upload - by Trias Nur Rahman</title>
	<meta name="title" content="Laravel Media Upload - by Trias Nur Rahman">
	<meta name="description" content="This is a package to make AJAX upload process easy and simple! Enhance your customer experience and improve your system performance.">
	<meta name="keywords" content="laravel media upload ajax image file simple">

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	
	<meta property="og:title" content="Laravel Media Upload Demo" />
	<meta property="og:site_name" content="Laravel Media Upload"/>
	<meta property="og:url" content="{{ url('') }}" />
	<meta property="og:description" content="This is a package to make AJAX upload process easy and simple! Enhance your customer experience and improve your system performance." />
	<meta property="og:image" content="http://www.gravatar.com/avatar/b5df782a25c0cfef80abcbe606ca11af?s=300">
	{{-- <meta property="fb:app_id" content="" /> --}}
	<meta name="twitter:site" content="@triasrahman">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

	@yield('content')

	<!-- Scripts -->
	@section('scripts')
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<!--<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>-->
	@show
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-53829891-2', 'auto');
		ga('send', 'pageview');
	</script>

</body>
</html>
