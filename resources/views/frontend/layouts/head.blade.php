<!-- Title Tag  -->
<title>@yield('title')</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="apple-touch-icon" sizes="180x180" href="{{asset('img/favicon/apple-touch-icon.png')}}" />
<link rel="icon" type="image/png" sizes="32x32" href="{{asset('img/favicon/favicon-32x32.png')}}" />
<link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/favicon/favicon-16x16.png')}}" />
<link rel="shortcut icon" type="image/x-icon" href="{{asset('img/favicon/favicon.ico')}}" />
<!-- bootstrap grid css -->
<link rel="stylesheet" href="{{asset('css/plugins/bootstrap-grid.css')}}">
<!-- font awesome css -->
<link rel="stylesheet" href="{{asset('css/plugins/font-awesome.min.css')}}">
<!-- swiper css -->
<link rel="stylesheet" href="{{asset('css/plugins/swiper.min.css')}}">
<!-- fancybox css -->
<link rel="stylesheet" href="{{asset('css/plugins/fancybox.min.css')}}">
<!-- ashley scss -->
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<script>
    document.addEventListener('contextmenu', event => event.preventDefault());
    document.addEventListener('keydown', event => {
        if (event.key === 'F12' || (event.ctrlKey && event.shiftKey && event.key === 'I')) {
            event.preventDefault();
        }
    });
</script>