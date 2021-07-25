
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="shortcut icon" href="{{asset('/images/favicon.png')}}">
<title>@yield('title')</title>
    @yield('facebookComment')
<link href="{{asset('/css/bootstrap.css')}}" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' rel='stylesheet' type='text/css'>
<link href="{{asset('/css/font-awesome.min.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('/css/flexslider.css')}}" type="text/css" media="screen"/>
<link href="{{asset('/css/sequence-looptheme.css')}}" rel="stylesheet" media="all"/>
<link href="{{asset('/css/style.css')}}" rel="stylesheet">
<link href="{{asset('/css/myStyle.css')}}" rel="stylesheet">
<meta name="csrf-token" content="{{ csrf_token() }}">




<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js">
</script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js">
</script>

<![endif]-->

</head>
<body id="home">
<div class="wrapper">

    @include('includes/header');

    <div class="clearfix"></div>
    @yield('content')
            <div class="clearfix"></div>
            @include('includes/our-brand')
        </div>
    </div>
    <div class="clearfix"></div>
   @include('includes/footer')
</div>
<!-- Bootstrap core JavaScript==================================================-->
@include('includes/script');
@yield('js_by_page')
</body>
</html>
