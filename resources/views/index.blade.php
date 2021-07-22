
<!DOCTYPE html>
<html>
<head>
    @include('includes/head');
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
</body>
</html>
